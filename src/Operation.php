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

    /** @var Parameter[]|null */
    public $parameters = null;

    /** @var RequestBody|null */
    public $requestBody = null;

    /** @var Response[]|array */
    public $responses = [];

    public $deprecated = false;

    /** @var SecurityRequirement|null */
    public $security = null;

    /** @var Server[]|null */
    public $servers = null;

    // public $callbacks = null;

    public function __construct(
        Response $response,
        array $tags = [],
        string $summary = '',
        string $description = '',
        ExternalDocs $externalDocs = null,
        string $operationId = null,
        RequestBody $requestBody = null,
        bool $deprecated = false,
        SecurityRequirement $security = null
    ) {
        $this->responses[] = $response;
        $this->tags = $tags;
        $this->summary = $summary;
        $this->description = $description;
        $this->externalDocs = $externalDocs;
        $this->operationId = $operationId;
        $this->requestBody = $requestBody;
        $this->deprecated = $deprecated;
        $this->security = $security;
    }

    public static function create(
        Response $response,
        array $tags = [],
        string $summary = '',
        string $description = '',
        ExternalDocs $externalDocs = null,
        string $operationId = null,
        RequestBody $requestBody = null,
        bool $deprecated = false,
        SecurityRequirement $security = null
    ) {
        return new static($response, $tags, $summary, $description, $externalDocs, $operationId, $requestBody, $deprecated, $security);
    }

    /**
     * Get the value of responses
     */ 
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Set the value of responses
     *
     * @return  self
     */ 
    public function addResponse(Response $response)
    {
        $this->responses[] = $response;

        return $this;
    }

    /**
     * Get the value of tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function addTag(string $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Get the value of summary
     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */ 
    public function setSummary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of externalDocs
     */ 
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    /**
     * Set the value of externalDocs
     *
     * @return  self
     */ 
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * Get the value of operationId
     */ 
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * Set the value of operationId
     *
     * @return  self
     */ 
    public function setOperationId(string $operationId)
    {
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * Get the value of parameters
     */ 
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set the value of parameters
     *
     * @return  self
     */ 
    public function addParameter(Parameter $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * Get the value of requestBody
     */ 
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * Set the value of requestBody
     *
     * @return  self
     */ 
    public function setRequestBody(RequestBody $requestBody)
    {
        $this->requestBody = $requestBody;

        return $this;
    }

    /**
     * Get the value of deprecated
     */ 
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Set the value of deprecated
     *
     * @return  self
     */ 
    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * Get the value of security
     */ 
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set the value of security
     *
     * @return  self
     */ 
    public function setSecurity(SecurityRequirement $security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get the value of servers
     */ 
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * Set the value of servers
     *
     * @return  self
     */ 
    public function addServer(Server $server)
    {
        $this->servers[] = $server;

        return $this;
    }
}