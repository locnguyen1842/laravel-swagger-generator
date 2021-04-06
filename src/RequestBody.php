<?php

namespace LrvSwagger;

class RequestBody
{
    /** @var MediaType[]|array */
    public $content = [];

    public $required = false;

    public $description = '';

    public function __construct(array $content = [],bool $required = false,string $description = '')
    {
        $this->content = $content;
        $this->required = $required;
        $this->description = $description;
    }

    public static function create(array $content = [], bool $required = false, string $description = '')
    {
        return new static($content, $required, $description);
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
    public function setContent(array $content)
    {
        $this->content = $content;

        return $this;
    }


    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function addContent(MediaType $content)
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
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }
}