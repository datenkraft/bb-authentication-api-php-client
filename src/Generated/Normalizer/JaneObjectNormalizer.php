<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClientCollection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewOAuthClientNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\TokenTradeIn::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\TokenTradeInNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\UpdateOAuthClientNormalizer::class,
        
        \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthTokenTradeInPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = match ($normalizerClass) {
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\OAuthClientCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuditLogCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionResourceNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionPaginationNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\CollectionPaginationNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorReferencesItemNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorResponseNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\ErrorResponseNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationResponseNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\InformationResponseNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewAuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewOAuthClientNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\NewOAuthClientNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\TokenTradeInNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\TokenTradeInNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\UpdateOAuthClientNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\UpdateOAuthClientNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthTokenTradeInPostBodyNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\AuthTokenTradeInPostBodyNormalizer(),
            \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}