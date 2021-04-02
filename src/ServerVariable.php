<?php

namespace LrvSwagger;

class ServerVariable
{
    public $default;

    /** @var string[]|null */
    public $enum = null;

    public $description = '';

    public function __construct($default, $enum = null, $description = '') {
        $this->default = $default;
        $this->enum = $enum;
        $this->description = $description;
    }

    /**
     * Get the value of default
     */ 
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set the value of default
     *
     * @return  self
     */ 
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get the value of enum
     */ 
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * Set the value of enum
     *
     * @return  self
     */ 
    public function setEnum(array $enum)
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}