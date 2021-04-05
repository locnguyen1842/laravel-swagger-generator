<?php

namespace LrvSwagger;

class OpenApi
{
    public $openapi;

    /** @var Info */
    public $info;

    /** @var Server[]|null */
    public $servers = null;

    /** @var Path[] */
    public $paths;

    // public $components;

    /** @var SecurityRequirement[]|array|null */
    public $security = [];

    /** @var ExternalDocs|null */
    public $externalDocs = null;

    public function __construct(
        Info $info,
        Path $path,
        ExternalDocs $externalDocs = null,
        string $version = '3.0.0'
    ) {
        $this->info = $info;
        $this->paths[] = $path;
        $this->externalDocs = $externalDocs;
        $this->openapi = $version;
    }

    public static function create(
        Info $info,
        Path $path,
        ExternalDocs $externalDocs = null,
        string $version = '3.0.0'
    ) {
        return new static($info, $path, $externalDocs, $version);
    }

    /**
     * Get the value of openapi
     */ 
    public function getOpenapi()
    {
        return $this->openapi;
    }

    /**
     * Set the value of openapi
     *
     * @return  self
     */ 
    public function setOpenapi($openapi)
    {
        $this->openapi = $openapi;

        return $this;
    }

    /**
     * Get the value of info
     */ 
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @return  self
     */ 
    public function setInfo($info)
    {
        $this->info = $info;

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

    /**
     * Get the value of paths
     */ 
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Set the value of paths
     *
     * @return  self
     */ 
    public function setPaths(array $paths)
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * Set the value of paths
     *
     * @return  self
     */ 
    public function addPath(PathItem $path)
    {
        $this->paths[] = $path;

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
        $this->security[] = $security;

        return $this;
    }

    /**
     * Set the value of security
     *
     * @return  self
     */ 
    public function addSecurity(SecurityRequirement $security)
    {
        $this->security[] = $security;

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
}