<?php

namespace LrvSwagger\DataTypes;

abstract class AbstractType 
{
    abstract public function getType(): string;

    public function __toString()
    {
        return $this->getType();
    }
}