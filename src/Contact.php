<?php

namespace LrvSwagger;

class Contact
{
    public $name = '';

    public $url = '';

    public $email = '';

    public function __construct(string $name = '',string $url = '',string $email = '')
    {
        $this->name = $name;
        $this->url = $url;
        $this->email = $email;
    }

    public static function create(string $name = '',string $url = '',string $email = '')
    {
        return new static($name, $url, $email);
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

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }
}