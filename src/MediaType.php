<?php

namespace LrvSwagger;

class MediaType
{
    public $type = 'application/json';

    /** @var Schema */
    public $schema;

    public $example = '';

    // public $examples = null;

    // public $encoding = null;

    public function __construct($schema, $example = '', $type = 'application/json')
    {
        $this->schema = $schema;
        $this->example = $example;
        $this->type = $type;
    }

    /**
     * Get the value of type
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
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of schema
     */ 
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Set the value of schema
     *
     * @return  self
     */ 
    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * Get the value of example
     */ 
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set the value of example
     *
     * @return  self
     */ 
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }
}