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
     * @var mixed
     */
    protected $id;
    /**
     * The name to identify the client
     *
     * @var string
     */
    protected $name;
    /**
     * Flag if the OAuth client is revoked
     *
     * @var bool
     */
    protected $revoked;
    /**
     * Client ID
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Client ID
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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