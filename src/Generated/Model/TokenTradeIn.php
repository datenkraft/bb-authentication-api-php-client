<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class TokenTradeIn implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Token
     *
     * @var string
     */
    public string $token;
    public function definedProperties(): array
    {
        return ['token' => 'token'];
    }
}