<?php
namespace PhpSigep\Model;

/**
 * @author: Rômulo Neves (https://github.com/romuloneves)
 */
class Proxy extends AbstractModel
{

    /** @var string */
    protected $host;

    /** @var int */
    protected $port;

    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return Proxy
     */
    public function setHost(string $host): Proxy
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @return Proxy
     */
    public function setPort(int $port): Proxy
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return Proxy
     */
    public function setLogin(string $login): Proxy
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Proxy
     */
    public function setPassword(string $password): Proxy
    {
        $this->password = $password;
        return $this;
    }


}