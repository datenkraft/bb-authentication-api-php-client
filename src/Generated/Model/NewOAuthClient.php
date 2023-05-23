<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class NewOAuthClient extends \ArrayObject
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
}