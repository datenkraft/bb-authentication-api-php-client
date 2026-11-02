<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\AdditionalPropertiesInterface;
class Collection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * @var iterable<string, mixed>
     */
    public iterable $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}