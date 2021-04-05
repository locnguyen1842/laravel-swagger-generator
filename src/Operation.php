<?php

namespace LrvSwagger;

class Operation
{
    const AVAILABLE_TYPES = [
        'get',
        'put',
        'post',
        'delete',
        'options',
        'head',
        'patch',
        'trace',
    ];

    public $type = 'get';

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
    public $responses = [
        200 => ['description' => 'Success'],
    ];

    public $deprecated = false;

    /** @var SecurityRequirement|null */
    public $security = null;

    /** @var Server[]|null */
    public $servers = null;

    // public $callbacks = null;

    public function __construct(
        $type = 'get',
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
        $this->type = $type;
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

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

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
    public function setTags($tags)
    {
        $this->tags = $tags;

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
    public function setSummary($summary)
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
    public function setDescription($description)
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
    public function setExternalDocs($externalDocs)
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
    public function setOperationId($operationId)
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
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

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
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;

        return $this;
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
    public function setResponses($responses)
    {
        $this->responses = $responses;

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
    public function setDeprecated($deprecated)
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
    public function setSecurity($security)
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
    public function setServers($servers)
    {
        $this->servers = $servers;

        return $this;
    }
}