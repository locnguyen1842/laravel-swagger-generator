<?php

namespace LrvSwagger;

class PathItem
{
    const AVAILABLE_TYPES = [
        'get',
        'put',
        'post',
        'delete',
        'options',
        'head',
        'patch',
        'trace',
    ];

    public $type = 'get';

    /** @var Operation */
    public $operation;

    public $description = '';

    public $summary = '';

    public function __construct(string $type, Operation $operation, string $description = '', string $summary = '')
    {
        $this->type = $this->checkType($type);
        $this->operation = $operation;
        $this->description = $description;
        $this->summary = $summary;
    }

    public static function create(string $type, Operation $operation, string $description = '', string $summary = '')
    {
        return new static($type, $operation, $description, $summary);
    }


    public function checkType($type)
    {
        if(! in_array($type, self::AVAILABLE_TYPES)) {
            throw new \Exception('Unavailable value for "type" field');
        }

        return $type;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $this->checkType($type);

        return $this;
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
    public function setOperation(Operation $operation)
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
    public function setDescription(string $description)
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
    public function setSummary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }
}