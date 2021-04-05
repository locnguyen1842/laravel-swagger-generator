<?php

namespace LrvSwagger\DataTypes;

class BooleanType extends AbstractType
{
    private $type = 'boolean';

    public function getType(): string
    {
        return $this->type;
    }
}