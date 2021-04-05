<?php

namespace LrvSwagger;

class Info
{
    public $title;

    public $version = '1.0';

    public $description = '';

    public $termsOfService = null;
    
    /** @var Contact|null */
    public $contact = null;

    /** @var License|null */
    public $license = null;

    public function __construct(
        string $title,
        string $description = '',
        string $version = '1.0',
        string $termsOfService = null,
        Contact $contact = null,
        License $license = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->version = $version;
        $this->termsOfService = $termsOfService;
        $this->contact = $contact;
        $this->license = $license;
    }

    public static function create(
        string $title,
        string $description = '',
        string $version = '1.0',
        string $termsOfService = null,
        Contact $contact = null,
        License $license = null
    ) {
        return new static($title, $description, $version, $termsOfService, $contact, $license);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of version
     */ 
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @return  self
     */ 
    public function setVersion(string $version)
    {
        $this->version = $version;

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

    /**
     * Get the value of termsOfService
     */ 
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * Set the value of termsOfService
     *
     * @return  self
     */ 
    public function setTermsOfService(string $termsOfService)
    {
        $this->termsOfService = $termsOfService;

        return $this;
    }

    /**
     * Get the value of contact
     */ 
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of license
     */ 
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set the value of license
     *
     * @return  self
     */ 
    public function setLicense(License $license)
    {
        $this->license = $license;

        return $this;
    }
}