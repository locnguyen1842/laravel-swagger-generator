<?php

namespace LrvSwagger;

class Response
{
    public $code = '200';

    public $description = 'Response';

    // public $headers = [];

    // public $content = [];

    // public $links = [];

    public function __construct(string $code = '200',string $description = 'Response')
    {
        $this->code = $code;
        $this->description = $description;
    }

    public static function create(string $code = '200',string $description = 'Response') {
        return new static($code, $description);
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode(string $code)
    {
        $this->code = $code;

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
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }
}