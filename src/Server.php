<?php

namespace LrvSwagger;

class Server
{
    public $url;

    /** @var ServerVariable[]|null */
    public $variables = null;

    public $description = '';

    public function __construct($url = '', $variables = null, $description = '') {
        $this->url = $url;
        $this->variables = $variables;
        $this->description = $description;
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
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of variables
     */ 
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Set the value of variables
     *
     * @return  self
     */ 
    public function setVariables(ServerVariable $variables)
    {
        $this->variables = $variables;

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