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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}