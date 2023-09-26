<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class OAuthClient extends \ArrayObject
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
     * Client ID
     *
     * @var string
     */
    protected $clientId;
    /**
     * The name to identify the client
     *
     * @var string
     */
    protected $name;
    /**
     * The Identity Id corresponding to the client
     *
     * @var string
     */
    protected $identityId;
    /**
     * Only shown once when posting a new client.
     *
     * @var string
     */
    protected $secret;
    /**
     * Flag if the OAuth client is revoked
     *
     * @var bool
     */
    protected $revoked;
    /**
     * Client ID
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * Client ID
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name to identify the client
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name to identify the client
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The Identity Id corresponding to the client
     *
     * @return string
     */
    public function getIdentityId() : string
    {
        return $this->identityId;
    }
    /**
     * The Identity Id corresponding to the client
     *
     * @param string $identityId
     *
     * @return self
     */
    public function setIdentityId(string $identityId) : self
    {
        $this->initialized['identityId'] = true;
        $this->identityId = $identityId;
        return $this;
    }
    /**
     * Only shown once when posting a new client.
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * Only shown once when posting a new client.
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
    /**
     * Flag if the OAuth client is revoked
     *
     * @return bool
     */
    public function getRevoked() : bool
    {
        return $this->revoked;
    }
    /**
     * Flag if the OAuth client is revoked
     *
     * @param bool $revoked
     *
     * @return self
     */
    public function setRevoked(bool $revoked) : self
    {
        $this->initialized['revoked'] = true;
        $this->revoked = $revoked;
        return $this;
    }
}