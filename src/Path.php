<?php

namespace LrvSwagger;

class Path
{
    public $path;

    /** @var PathItem */
    public $item = null;

    public function __construct(string $path,PathItem $item = null)
    {
        $this->path = $path;
        $this->item = $item;
    }

    public static function create(string $path, PathItem $item = null)
    {
        return new static($path, $item);
    }

    /**
     * Get the value of path
     */ 
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  self
     */ 
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of item
     */ 
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set the value of item
     *
     * @return  self
     */ 
    public function setItem(PathItem $item)
    {
        $this->item = $item;

        return $this;
    }
}