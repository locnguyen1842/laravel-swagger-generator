<?php

namespace LrvSwagger\DataTypes;

class StringType extends AbstractType
{
    const BYTE = 'byte';

    const BINARY = 'binary';

    const DATE = 'date';

    const DATETIME = 'date-time';

    const PASSWORD = 'password';

    private $type = 'string';

    public $format;

    public function __construct($format = '') {
        $this->format = $format;
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