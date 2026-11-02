<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class OAuthClientCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var list<OAuthClient>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}