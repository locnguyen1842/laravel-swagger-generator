<?php

namespace LrvSwagger;

class MediaType
{
    public $type = 'application/json';

    /** @var Schema */
    public $schema;

    public $example = null;

    // public $examples = null;

    // public $encoding = null;

    public function __construct(Schema $schema, $example = null,string $type = 'application/json')
    {
        $this->schema = $schema;
        $this->example = $example;
        $this->type = $type;
    }

    public static function create(Schema $schema, $example = null,string $type = 'application/json')
    {
        return new static($schema, $example, $type);
    }

    public static function createFromArray(array $attributes = [])
    {
        $type = array_key_first($attributes);
        $example = $attributes[$type]['example'] ?? null;
        $schema = Schema::createFromArray($attributes[$type]['schema'] ?? []);

        return new static($schema, $example, $type);
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
    public function setType(string $type)
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
    public function setSchema(Schema $schema)
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