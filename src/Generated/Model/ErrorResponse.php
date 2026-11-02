<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class ErrorResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * errors
     *
     * @var list<Error>
     */
    public array $errors;
    public function definedProperties(): array
    {
        return ['errors' => 'errors'];
    }
}