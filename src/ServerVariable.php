<?php

namespace LrvSwagger;

class ServerVariable
{
    public $name;

    public $default;

    /** @var string[]|null */
    public $enum = null;

    public $description = '';

    public function __construct($name, $default, $enum = null, $description = '')
    {
        $this->name = $name;
        $this->default = $default;
        $this->enum = $enum;
        $this->description = $description;
    }

    public static function create($name, $default, $enum = null, $description = '')
    {
        return new static($name, $default, $enum, $description);
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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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