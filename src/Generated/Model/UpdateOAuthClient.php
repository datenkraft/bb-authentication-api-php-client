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
     * The name to identify the client - Must not be changed for generated clients.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The name to identify the client - Must not be changed for generated clients.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name to identify the client - Must not be changed for generated clients.
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
}