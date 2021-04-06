<?php

namespace LrvSwagger;

use LrvSwagger\DataTypes\AbstractType;

class Property
{
    public $name = '';

    /** @var \LrvSwagger\DataTypes\AbstractType */
    public $type;

    public function __construct(string $name = '', $type = 'string')
    {
        $this->name = $name;
        $this->type = $this->parseType($type);
    }

    private function parseType($type)
    {
        $this->type = $type;
        if(!$type instanceof AbstractType) {
            $typeClass = AbstractType::getDataTypeClass($type);
            $type = new $typeClass;
        }
        
        return $type;
    }

    public static function create(string $name = '', $dataType = 'string')
    {
        return new static($name, $dataType);
    }

    public static function parseRecursiveFromArray(array $properties = [])
    {
        $parsedProperties = []; 
        foreach($properties as $name => $attributes) {
            $propertyInstance = static::create($name, $type = $attributes['type']);
            if(isset($attributes['type'])) {
                if($type == AbstractType::ARRAY_TYPE) {

                    $items = $attributes['items'];
                    if($items['type'] == AbstractType::OBJECT_TYPE) {
                        $items = static::parseRecursiveFromArray([null => $items]);
                    }
                    $propertyInstance->getType()->setItems($items);
                }

                if($type == AbstractType::OBJECT_TYPE) {
                    $properties = static::parseRecursiveFromArray($attributes['properties']);
                    $propertyInstance->getType()->setProperties($properties);
                }
            }

            $parsedProperties[] = $propertyInstance;
        }

        return $parsedProperties;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of data type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $this->parseType($type);

        return $this;
    }
}