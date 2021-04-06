<?php

namespace LrvSwagger\DataTypes;

abstract class AbstractType 
{
    const ARRAY_TYPE = 'array';

    const OBJECT_TYPE = 'object';

    const STRING_TYPE = 'string';

    const INTEGER_TYPE = 'integer';

    const NUMBER_TYPE = 'number';

    const BOOLEAN_TYPE = 'boolean';

    const DATA_TYPE_MAPPING = [
        self::ARRAY_TYPE => \LrvSwagger\DataTypes\ArrayType::class,
        self::OBJECT_TYPE => \LrvSwagger\DataTypes\ObjectType::class,
        self::STRING_TYPE => \LrvSwagger\DataTypes\StringType::class,
        self::INTEGER_TYPE => \LrvSwagger\DataTypes\IntegerType::class,
        self::NUMBER_TYPE => \LrvSwagger\DataTypes\NumberType::class,
        self::BOOLEAN_TYPE => \LrvSwagger\DataTypes\BooleanType::class,
    ];

    abstract public function getType(): string;

    public function __toString()
    {
        return $this->getType();
    }

    public static function checkDataType($type)
    {
        if(! isset(self::DATA_TYPE_MAPPING[$type])) {
            throw new \Exception('Invalid data type');
        }

        return $type;
    }

    public static function getDataTypeClass($type)
    {
        return self::DATA_TYPE_MAPPING[self::checkDataType($type)];
    }
}