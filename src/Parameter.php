<?php

namespace LrvSwagger;

class Parameter
{
    const AVAILABLE_IN = ['query', 'header', 'path', 'cookie'];

    public $name;

    public $in = 'query';

    public $description = '';

    public $required = false;

    public $deprecated = false;

    public $allowEmptyValue = false;

    public function __construct(
        $name,
        $in = 'query',
        $required = false,
        $description = '',
        $deprecated = false,
        $allowEmptyValue = false

    ) {
        $this->name = $name;
        $this->in = $this->checkFieldIn($in);
        $this->required = $required;
        $this->description = $description;
        $this->deprecated = $deprecated;
        $this->allowEmptyValue = $allowEmptyValue;
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
     * Get the value of in
     */ 
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Set the value of in
     *
     * @return  self
     */ 
    public function setIn($in)
    {
        $this->in = $this->checkFieldIn($in);

        return $this;
    }

    private function checkFieldIn($in) {
        if(! in_array($in, self::AVAILABLE_IN)) {
            throw new \Exception('Unavailable value for "in" field');
        }

        return $in;
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

    /**
     * Get the value of required
     */ 
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set the value of required
     *
     * @return  self
     */ 
    public function setRequired(bool $required)
    {
        $this->required = $required;

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

    /**
     * Get the value of allowEmptyValue
     */ 
    public function getAllowEmptyValue()
    {
        return $this->allowEmptyValue;
    }

    /**
     * Set the value of allowEmptyValue
     *
     * @return  self
     */ 
    public function setAllowEmptyValue(bool $allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;

        return $this;
    }
}