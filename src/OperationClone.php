<?php

namespace LrvSwagger;

class Operation
{
    public $tags;

    public $summary;

    public $parameters;

    public $security;

    public $requestBody;

    public $responses = [
        200 => [
            'description' => 'Success',
        ],
        // 201 => [
        //     'description' => 'Created'
        // ],
        // 204 => [
        //     'description' => 'No content'
        // ],
        // 400 => [
        //     'description' => 'Bad request'
        // ],
        // 401 => [
        //     'description' => 'Unauthorize'
        // ],
        // 403 => [
        //     'description' => 'Unauthenticated'
        // ],
        // 404 => [
        //     'description' => 'Page not found'
        // ],
        // 422 => [
        //     'description' => 'The given data was invalid'
        // ]
    ];

    public $requestBodyRawSchema = [];

    public function __construct($tags = [], $responses = [], $parameters = [], $requestBody = [], $security = [], $summary = '')
    {
        $this->tags = $tags;
        $this->responses = ! empty($responses) ? $responses : $this->responses;
        $this->parameters = $parameters;
        $this->requestBody = $requestBody;
        $this->security = $security;
        $this->summary = $summary;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function addParameter($name, $in, $required = false, $example = null, array $schema = [])
    {
        if (empty($schema)) {
            $schema = ['type' => 'string'];
        }

        $param = [
            'name' => $name,
            'in' => $in,
            'required' => $required,
            'schema' => $schema,
        ];

        if ($example) {
            $param['example'] = $example;
        }

        $this->parameters[] = $param;

        return $this;
    }

    public function setPathParameters($parameters)
    {
        $result = [];
        foreach ($parameters as $parameter) {
            $result[] = [
                'name' => $parameter,
                'in' => 'path',
                'required' => true,
                'schema' => [
                    'type' => 'string',
                ],
            ];
        }

        $this->parameters = $result;

        return $this;
    }

    public function getRequestBodyRawSchema()
    {
        return $this->requestBodyRawSchema;
    }

    public function setRequestBodyRawSchema($requestBodyRawSchema)
    {
        $this->requestBodyRawSchema = $requestBodyRawSchema;

        return $this;
    }

    public function getRequestBody()
    {
        return $this->requestBody;
    }

    public function setRequestBody($requestBody)
    {
        $this->setRequestBodyRawSchema($requestBody->content->getSchema());

        $requestBody->content = $requestBody->content->__toArray();

        $this->requestBody = $requestBody;

        return $this;
    }

    public function getResponses()
    {
        return $this->responses;
    }

    public function setResponses($responses)
    {
        $this->responses = $responses;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags)
    {
        $this->tags = (array) $tags;

        return $this;
    }

    public function getSecurity()
    {
        return $this->security;
    }

    public function setSecurity(bool $security)
    {
        if ($security) {
            $this->security = [[
                'bearerAuth' => [],
            ]];
        }

        return $this;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    public function __toArray()
    {
        unset($this->requestBodyRawSchema);

        return array_filter(call_user_func('get_object_vars', $this), '_remove_empty_internal');
    }
}