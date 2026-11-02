<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class OAuthClient implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Client ID
     *
     * @var string
     */
    public string $clientId;
    /**
     * The name to identify the client
     *
     * @var string
     */
    public string $name;
    /**
     * The Identity Id corresponding to the client
     *
     * @var string
     */
    public string $identityId;
    /**
     * Only shown once when posting a new client.
     *
     * @var string
     */
    public string $secret;
    /**
     * Flag if the OAuth client is revoked
     *
     * @var bool
     */
    public bool $revoked;
    public function definedProperties(): array
    {
        return ['clientId' => 'clientId', 'name' => 'name', 'identityId' => 'identityId', 'secret' => 'secret', 'revoked' => 'revoked'];
    }
}