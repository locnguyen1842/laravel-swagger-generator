<?php

namespace LrvSwagger;

class RequestBody
{
    /** @var MediaType[] */
    public $content = [];

    public $required = false;

    public $description = '';

    public function __construct($content = [], $required = false, $description = '')
    {
        $this->content = $content;
        $this->required = $required;
        $this->description = $description;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

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