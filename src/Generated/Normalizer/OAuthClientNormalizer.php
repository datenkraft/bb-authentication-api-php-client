<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OAuthClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\OAuthClient';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\AuthenticationApi\\Generated\\Model\\OAuthClient';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('clientId', $data)) {
            $object->setClientId($data['clientId']);
            unset($data['clientId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('identityId', $data)) {
            $object->setIdentityId($data['identityId']);
            unset($data['identityId']);
        }
        if (\array_key_exists('secret', $data)) {
            $object->setSecret($data['secret']);
            unset($data['secret']);
        }
        if (\array_key_exists('revoked', $data)) {
            $object->setRevoked($data['revoked']);
            unset($data['revoked']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['clientId'] = $object->getClientId();
        $data['name'] = $object->getName();
        $data['identityId'] = $object->getIdentityId();
        if ($object->isInitialized('secret') && null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        $data['revoked'] = $object->getRevoked();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}