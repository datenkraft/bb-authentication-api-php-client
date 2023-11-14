<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class TokenTradeIn extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Token
     *
     * @var string
     */
    protected $token;
    /**
     * Token
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * Token
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}