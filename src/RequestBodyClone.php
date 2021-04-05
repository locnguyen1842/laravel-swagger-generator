<?php

namespace LrvSwagger;

class RequestBodyClone
{
    public $description;

    public $required;

    public $content;

    public function __construct($content, $required = true, $description = '')
    {
        $this->content = $content;
        $this->required = $required;
        $this->description = $description;
    }

    public static function create($content, $required = true, $description = '')
    {
        $instance = new static($content);
        $instance->required = $required;
        $instance->description = $description;

        return $instance;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($requestBodyContent)
    {
        $this->content = $requestBodyContent;

        return $this;
    }

    public function __toArray()
    {
        return array_filter(call_user_func('object_to_array_recursive', $this), '_remove_empty_internal');
    }
}