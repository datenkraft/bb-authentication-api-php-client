<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewOAuthClient implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['name' => 'name', 'identityId' => 'identityId'];
    }
}