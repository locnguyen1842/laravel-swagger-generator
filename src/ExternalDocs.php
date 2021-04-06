<?php

namespace LrvSwagger;

class ExternalDocs
{
    public $url;

    public $description = '';

    public function __construct(string $url, string $description = '')
    {
        $this->url = $url;
        $this->description = $description;
    }

    public static function create(string $url, string $description = '')
    {
        return new static($url, $description);
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