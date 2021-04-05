<?php

namespace LrvSwagger;

class OpenApi
{
    public $openapi;

    public $info;

    public $servers;

    public $components;

    public $paths;

    public $externalDocs;

    public function __construct(
        $info = [],
        $servers = [],
        $paths = [],
        $components = [],
        $externalDocs = [],
        $version = '3.0.0'
    ) {
        $this->openapi = $version;
        $this->info = $info;
        $this->servers = $servers;
        $this->paths = $paths;
        $this->components = $components;
        $this->externalDocs = $externalDocs;
    }

    public function getVersion()
    {
        return $this->openapi;
    }

    public function setVersion($version)
    {
        $this->openapi = $version;

        return $this;
    }

    public function getServers()
    {
        return $this->servers;
    }

    public function setServers($servers)
    {
        $this->servers = $servers;

        return $this;
    }

    public function addServer($servers)
    {
        $this->servers[] = $servers;

        return $this;
    }

    public function getInfo()
    {
        $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    public function getPaths()
    {
        return $this->paths;
    }

    public function setPaths($paths)
    {
        $this->paths = $paths;

        return $this;
    }

    public function getComponents()
    {
        return $this->components;
    }

    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    public function getExternalDocs()
    {
        return $this->externalDocs;
    }

    public function setExternalDocs($uri, $description = null)
    {
        $this->externalDocs = array_filter([
            'url' => $uri,
            'description' => $description,
        ]);

        return $this;
    }

    public function __toArray()
    {
        return array_filter(call_user_func('object_to_array_recursive', $this), '_remove_empty_internal');
    }
}