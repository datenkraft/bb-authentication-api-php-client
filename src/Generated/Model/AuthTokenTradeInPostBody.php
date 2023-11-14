<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class AuthTokenTradeInPostBody extends \ArrayObject
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
     * Id Token
     *
     * @var string
     */
    protected $idToken;
    /**
     * Id Token
     *
     * @return string
     */
    public function getIdToken() : string
    {
        return $this->idToken;
    }
    /**
     * Id Token
     *
     * @param string $idToken
     *
     * @return self
     */
    public function setIdToken(string $idToken) : self
    {
        $this->initialized['idToken'] = true;
        $this->idToken = $idToken;
        return $this;
    }
}