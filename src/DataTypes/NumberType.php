<?php

namespace LrvSwagger\DataTypes;

class NumberType extends AbstractType
{
    const FLOAT = 'float';

    const DOUBLE = 'double';

    private $type = 'number';

    public $format;

    public function __construct($format = null)
    {
        $this->format = $format ?? self::FLOAT;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }

    public function getType(): string
    {
        return $this->type;
    }
}