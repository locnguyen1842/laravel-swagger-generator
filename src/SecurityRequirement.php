<?php

namespace LrvSwagger;

class SecurityRequirement
{
    public $name = null;

    public $scopes = [];

    public function __construct($name = null, $scopes = [])
    {
        $this->name = $name;
        $this->scopes = $scopes;
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
     * Get the value of scopes
     */ 
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Set the value of scopes
     *
     * @return  self
     */ 
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
}