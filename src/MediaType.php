<?php

namespace LrvSwagger;

class MediaType
{
    /** @var Schema */
    public $schema;

    public $example = '';

    // public $examples = null;

    // public $encoding = null;

    public function __construct($schema, $example = '')
    {
        $this->schema = $schema;
        $this->example = $example;
    }
}