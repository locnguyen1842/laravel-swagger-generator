<?php

namespace LrvSwagger\DataTypes;

class ArrayType extends AbstractType
{
    private $type = self::ARRAY_TYPE;

    public $items = [];

    public function __construct(array $items = [])
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
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }
}