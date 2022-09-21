<?php

namespace Strctural\DependencyInjection;

class DatabaseConfig
{
    private string $host;
    private string $username;
    private string $password;
    private string $port;
    private string $databaseName;

    public function __construct(string $host, string $username, string $password, string $port, string $databaseName)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
        $this->databaseName = $databaseName;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }


    /**
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
}