<?php

namespace LrvSwagger;

class PathItem
{
    /** @var Operation */
    public $operation;

    public $description = '';

    public $summary = '';

    public function __construct(Operation $operation, $description = null, $summary = '') {
        $this->operation = $operation;
        $this->description = $description;
        $this->summary = $summary;
    }

    /**
     * Get the value of operation
     */ 
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set the value of operation
     *
     * @return  self
     */ 
    public function setOperation($operation)
    {
        $this->operation = $operation;

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
    public function setDescription(Operation $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of summary
     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */ 
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }
}