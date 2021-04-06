<?php

namespace LrvSwagger;

use LrvSwagger\DataTypes\AbstractType;

class Schema
{
    public $property;

    public $example = '';

    public $nullable = false;

    public $readOnly = false;

    public $writeOnly = false;

    public $xml = null;

    /** @var ExternalDocs|null */
    public $externalDocs = null;

    public $deprecated = false;

    public function __construct(
        Property $property,
        string $example = '',
        bool $nullable = false,
        bool $readOnly = false,
        bool $writeOnly = false,
        $xml = null,
        ExternalDocs $externalDocs = null,
        bool $deprecated = false
    ) {
        $this->property = $property;
        $this->example = $example;
        $this->nullable = $nullable;
        $this->readOnly = $readOnly;
        $this->writeOnly = $writeOnly;
        $this->xml = $xml;
        $this->externalDocs = $externalDocs;
        $this->deprecated = $deprecated;
    }

    public static function create(
        Property $property,
        string $example = '',
        bool $nullable = false,
        bool $readOnly = false,
        bool $writeOnly = false,
        $xml = null,
        ExternalDocs $externalDocs = null,
        bool $deprecated = false
    ) {
        return new static($property, $example, $nullable, $readOnly, $writeOnly, $xml, $externalDocs, $deprecated);
    }

    public static function createFromArray(array $attributes = [])
    {
        $property = Property::parseRecursiveFromArray([null => $attributes])[0];

        $schemaInstance = static::create($property);

        return $schemaInstance;
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
    public function setExample(string $example)
    {
        $this->example = $example;

        return $this;
    }

    /**
     * Get the value of nullable
     */ 
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Set the value of nullable
     *
     * @return  self
     */ 
    public function setNullable(bool $nullable)
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * Get the value of readOnly
     */ 
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Set the value of readOnly
     *
     * @return  self
     */ 
    public function setReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Get the value of writeOnly
     */ 
    public function getWriteOnly()
    {
        return $this->writeOnly;
    }

    /**
     * Set the value of writeOnly
     *
     * @return  self
     */ 
    public function setWriteOnly(bool $writeOnly)
    {
        $this->writeOnly = $writeOnly;

        return $this;
    }

    /**
     * Get the value of xml
     */ 
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Set the value of xml
     *
     * @return  self
     */ 
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Get the value of externalDocs
     */ 
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    /**
     * Set the value of externalDocs
     *
     * @return  self
     */ 
    public function setExternalDocs($externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * Get the value of deprecated
     */ 
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Set the value of deprecated
     *
     * @return  self
     */ 
    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;

        return $this;
    }
}