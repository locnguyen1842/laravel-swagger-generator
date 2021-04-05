<?php

namespace LrvSwagger;

class Server
{
    public $url;
    
    public $description = '';

    /** @var ServerVariable[]|null */
    public $variables;

    public function __construct($url = '',$description = '', $variables = null)
    {
        $this->url = $url;
        $this->description = $description;
        $this->variables = $variables;
    }

    public static function create($url = '',$description = '') {
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
    public function setVariables(ServerVariable $variable)
    {
        $this->variables[] = $variable;

        return $this;
    }

    /**
     * Add the server variable
     *
     * @return  self
     */ 
    public function addVariable(ServerVariable $variable)
    {
        $this->variables[] = $variable;

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