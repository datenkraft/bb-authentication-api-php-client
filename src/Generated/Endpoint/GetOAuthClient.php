<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class GetOAuthClient extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    protected $clientId;
    /**
     * Get the OAuth client with the given client ID.
     * @param string $clientId Client ID of the OAuth Client
     */
    public function __construct(string $clientId)
    {
        $this->clientId = $clientId;
    }
    use \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{clientId}'], [rawurlencode($this->clientId)], '/oauth-client/{clientId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}