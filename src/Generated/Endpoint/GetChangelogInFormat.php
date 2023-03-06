<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class GetChangelogInFormat extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    protected $format;
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     */
    public function __construct(string $format)
    {
        $this->format = $format;
    }
    use \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}'), array($this->format), '/docs/changelog.{format}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatNotFoundException($response);
        }
        if (400 === $status) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatBadRequestException($response);
        }
        throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}