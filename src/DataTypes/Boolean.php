<?php

namespace LrvSwagger\DataTypes;

class Boolean extends AbstractType
{
    private $type = 'boolean';

    public function getType(): string
    {
        return $this->type;
    }
}