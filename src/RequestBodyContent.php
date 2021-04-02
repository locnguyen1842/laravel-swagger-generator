<?php

namespace LrvSwagger;

class RequestBodyContent
{
    public $type = 'application/json';

    public $schema;

    public $example;

    public function __construct($schema = [], $example = [], $type = 'application/json')
    {
        $this->schema = $schema;
        $this->example = $example;
        $this->type = $type;
    }

    public static function create($type = 'application/json')
    {
        $instance = new static();
        $instance->type = $type;

        return $instance;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    public function getExample()
    {
        return $this->example;
    }

    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    public function addExample($example)
    {
        $this->example[] = $example;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function parseSchema()
    {
        $schema = $this->schema;
        $properties = [];
        $required = [];
        foreach ($schema as $field => $rules) {
            $explodedRule = explode('|', $rules);

            $fields = explode('.', $field);

            $type = $this->parseType($explodedRule);

            $this->convertSchemaItem($properties, $fields, $type);

            if (in_array('required', $explodedRule) && count($fields) == 1) {
                $required[] = $fields[0];
            }
        }

        $this->convertArraySchemaItem($properties);

        $schema = [];
        $schema['properties'] = $properties;

        if (! empty($required)) {
            $schema['required'] = $required;
        }

        return $schema;
    }

    private function getValueByKey(array $data, $keys, $default = null)
    {
        foreach ($keys as $innerKey) {
            if (! array_key_exists($innerKey, $data)) {
                return $default;
            }

            $data = $data[$innerKey];
        }

        return $data;
    }

    public function setNestedArray(&$array, $keys, $value)
    {
        foreach ($keys as $key) {
            if (! isset($array[$key]) || ! is_array($array[$key])) {
                $array[$key] = [];
            }

            $array = &$array[$key];
        }

        $array = $value;
    }

    private function getAvailableSchemaTypes()
    {
        return ['integer', 'string', 'array', 'object', 'date_format', 'boolean', 'numeric', 'number'];
    }

    private function parseType($rules)
    {
        $type = $this->handleAvailableSchemaType($rules);

        if (is_array($type)) {
            return $this->convertToOAType($type[0], $type[1]);
        }

        return $this->convertToOAType($type);
    }

    private function handleAvailableSchemaType($rules = [])
    {
        foreach ($rules as $rule) {
            $explodedRule = explode(':', $rule);
            if (in_array($explodedRule[0], $this->getAvailableSchemaTypes())) {
                if ($explodedRule[0] == 'date_format') {
                    $dateRule[0] = array_shift($explodedRule);
                    $dateRule[1] = implode(':', $explodedRule);

                    return $dateRule;
                }

                if (isset($explodedRule[1])) {
                    return $explodedRule;
                }

                return $explodedRule[0];
            }
        }

        return 'string';
    }

    private function convertToOAType(string $type, $attrs = null)
    {
        $convertedType = ['type' => 'string'];

        if ($type == 'numeric') {
            $convertedType = [
                'type' => 'number',
                'format' => $attrs ?? 'double',
            ];
        }

        if ($type == 'date_format') {
            $convertedType = [
                'type' => 'string',
                'example' => \Carbon\Carbon::now()->format($attrs),
            ];
        }

        return $convertedType;
    }

    private function parseRules($rules)
    {
        $rules = preg_replace('/(\:.+?)\|/m', '|', $rules);
        $rules = preg_replace('/(\:.+)/m', '', $rules);

        return explode('|', $rules);
    }

    private function convertSchemaItem(&$schema, $fields, $type)
    {
        $nestedFields = [];
        foreach ($fields as $f) {
            $nestedFields[] = $f;
            if (isset($this->getValueByKey($schema, $nestedFields)['type'])) {
                if ($this->getValueByKey($schema, $nestedFields)['type'] == 'object') {
                    $nestedFields[] = 'properties';
                } elseif ($this->getValueByKey($schema, $nestedFields)['type'] == 'array') {
                    $nestedFields[] = 'items';
                }
            }
        }

        $this->setNestedArray($schema, $nestedFields, $type);

        return $schema;
    }

    public function convertArraySchemaItem(&$schema)
    {
        foreach ($schema as $key => &$val) {
            if ($key == '*') {
                if (isset($val['type']) && count($val) == 1) {
                    $schema = $val;
                } else {
                    $schema = [
                        'type' => 'object',
                        'properties' => $val,
                    ];
                }

                unset($schema[$key]);
            }

            if (is_array($val)) {
                $this->convertArraySchemaItem($val);
            }
        }
    }

    public function __toArray()
    {
        return [
            $this->type => array_filter(
                [
                    'schema' => $this->parseSchema(),
                    'example' => $this->getExample(),
                ], '_remove_empty_internal'
            ),
        ];
    }
}