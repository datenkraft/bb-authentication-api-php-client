<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class UpdateOAuthClient extends \ArrayObject
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
     * @var string|null
     */
    protected $name;
    /**
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
    *
    * @var string|null
    */
    protected $secret;
    /**
     * Flag if the OAuth client is revoked
     *
     * @var bool|null
     */
    protected $revoked;
    /**
     * The name to identify the client
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name to identify the client
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
    *
    * @return string|null
    */
    public function getSecret() : ?string
    {
        return $this->secret;
    }
    /**
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
    *
    * @param string|null $secret
    *
    * @return self
    */
    public function setSecret(?string $secret) : self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
    /**
     * Flag if the OAuth client is revoked
     *
     * @return bool|null
     */
    public function getRevoked() : ?bool
    {
        return $this->revoked;
    }
    /**
     * Flag if the OAuth client is revoked
     *
     * @param bool|null $revoked
     *
     * @return self
     */
    public function setRevoked(?bool $revoked) : self
    {
        $this->initialized['revoked'] = true;
        $this->revoked = $revoked;
        return $this;
    }
}