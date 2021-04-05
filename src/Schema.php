<?php

namespace LrvSwagger;

class Schema
{
    public $example = '';

    public $nullable = false;

    public $readOnly = false;

    public $writeOnly = false;

    public $xml = null;

    /** @var ExternalDocs|null */
    public $externalDocs = null;

    public $deprecated = false;

    public function __construct(
        $example = '',
        $nullable = false,
        $readOnly = false,
        $writeOnly = false,
        $xml = null,
        $externalDocs = null,
        $deprecated = false
    ) {
        $this->example = $example;
        $this->nullable = $nullable;
        $this->readOnly = $readOnly;
        $this->writeOnly = $writeOnly;
        $this->xml = $xml;
        $this->externalDocs = $externalDocs;
        $this->deprecated = $deprecated;
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