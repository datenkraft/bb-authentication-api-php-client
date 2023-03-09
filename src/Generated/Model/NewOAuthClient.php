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
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
    *
    * @var string
    */
    protected $secret;
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
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
    *
    * @return string
    */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
    * At least 32 char length, mandatory usage of at least one upper and lower case letter,
    as well as numbers and special characters.
    
    Make a note of this secret and keep it carefully, it cannot be retrieved again!
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
}