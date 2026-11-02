<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class PatchOAuthClient extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    protected $clientId;
    /**
     * Update one or more fields of a OAuth client. Only a limited set of fields can be updated.
     * @param string $clientId OAuth client Id
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient $requestBody
     */
    public function __construct(string $clientId, \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient $requestBody)
    {
        $this->clientId = $clientId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{clientId}'], [rawurlencode($this->clientId)], '/oauth-client/{clientId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient) {
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
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientInternalServerErrorException
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
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchOAuthClientInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
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