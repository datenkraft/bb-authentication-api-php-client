<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class PostOAuthClient extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Add a new OAuth client.
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/oauth-client';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
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