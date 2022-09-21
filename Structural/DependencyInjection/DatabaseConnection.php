<?php

namespace Strctural\DependencyInjection;

class DatabaseConnection
{
    private DatabaseConfig $config;

    public function __construct(DatabaseConfig $config)
    {
        $this->config = $config;
    }
    public function getConnectionToString(){
        return sprintf('mysql://%s:%s@%s:%s/%s',
        $this->config->getUsername(),
        $this->config->getPassword(),
        $this->config->getHost(),
        $this->config->getPort(),
        $this->config->getDatabaseName()
        );
    }
}