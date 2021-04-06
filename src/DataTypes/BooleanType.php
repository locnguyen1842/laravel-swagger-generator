<?php

namespace LrvSwagger\DataTypes;

class BooleanType extends AbstractType
{
    private $type = self::BOOLEAN_TYPE;

    public function getType(): string
    {
        return $this->type;
    }
}