<?php

namespace LrvSwagger;

class License
{
    public $name = '';

    public $url = '';

    public function __construct(string $name = '',string $url = '')
    {
        $this->name = $name;
        $this->url = $url;
    }

    public static function create(string $name = '',string $url = '')
    {
        return new static($name, $url);
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
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }
}