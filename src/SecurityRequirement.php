<?php

namespace LrvSwagger;

class SecurityRequirement
{
    public $name = null;

    public $scopes = [];

    public function __construct($name = null,array $scopes = [])
    {
        $this->name = $name;
        $this->scopes = $scopes;
    }

    public static function create($name = null,array $scopes = [])
    {
        return new static($name, $scopes);
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
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }

    /**
     * Add the value of scopes
     *
     * @return  self
     */ 
    public function addScope(string $scope)
    {
        $this->scopes[] = $scope;

        return $this;
    }
}