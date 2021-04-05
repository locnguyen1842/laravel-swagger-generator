<?php

namespace LrvSwagger\DataTypes;

class Integer extends AbstractType
{
    const INT32 = 'int32';

    const INT64 = 'int64';

    private $type = 'integer';

    public $format;

    public function __construct($format = null)
    {
        $this->format = $format ?? self::INT32;
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