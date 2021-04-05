<?php

namespace LrvSwagger\SchemaTypes;

class ObjectType extends AbstractType
{
    private $type = 'object';

    public $properties = [];

    public function __construct($properties = [])
    {
        $this->properties = $properties;
    }
    
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of properties
     */ 
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set the value of properties
     *
     * @return  self
     */ 
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }
}