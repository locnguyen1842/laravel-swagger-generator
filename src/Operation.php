<?php

namespace LrvSwagger;

class Operation
{
    public $tags = [];

    public $summary = '';

    public $description = '';

    /** @var ExternalDocs|null */
    public $externalDocs = null;

    public $operationId = null;

    /** @var Parameter|null */
    public $parameters = null;

    /** @var RequestBody|null */
    public $requestBody = null;

    /** @var Responses|array */
    public $responses = [
        200 => ['description' => 'Success'],
    ];

    public $deprecated = false;

    /** @var Security|null */
    public $security = null;

    /** @var Server[]|null */
    public $servers = null;

    public function __construct(
        $tags = [],
        $summary = '',
        $description = '',
        $externalDocs = null,
        $operationId = null,
        $parameters = null,
        $requestBody = null,
        $responses = [],
        $deprecated = false,
        $security = null,
        $servers = null
    ) {
        $this->tags = $tags;
        $this->summary = $summary;
        $this->description = $description;
        $this->externalDocs = $externalDocs;
        $this->operationId = $operationId;
        $this->parameters = $parameters;
        $this->requestBody = $requestBody;
        $this->responses = ! empty($responses) ? $responses : $this->responses;
        $this->deprecated = $deprecated;
        $this->security = $security;
        $this->servers = $servers;
    }
}