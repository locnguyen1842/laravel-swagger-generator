<?php

namespace LrvSwagger;

class Content
{
    /** @var MediaType */
    public $mediaType;

    public function __construct(MediaType $mediaType)
    {
        $this->mediaType = $mediaType;
    }

    public static function create(MediaType $mediaType)
    {
        return new static($mediaType);
    }

    /**
     * Get the value of mediaType
     */ 
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set the value of mediaType
     *
     * @return  self
     */ 
    public function setMediaType(MediaType $mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }
}