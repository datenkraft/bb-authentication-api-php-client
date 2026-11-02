<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class UpdateOAuthClient implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name to identify the client - Must not be changed for generated clients.
     *
     * @var string|null
     */
    public ?string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}