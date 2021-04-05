<?php

namespace LrvSwagger\SchemaTypes;

class ArrayType extends AbstractType
{
    private $type = 'array';

    public $items = [];

    public function __construct($items = [])
    {
        $this->items = $items;
    }
    
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}