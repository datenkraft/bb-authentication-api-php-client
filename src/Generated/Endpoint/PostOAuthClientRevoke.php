<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class PostOAuthClientRevoke extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    protected $clientId;
    /**
     * Revoke an OAuth client. Be aware that this has no immediate effect on issued tokens.
     * This endpoint may not be used to disenfranchisement users by revoking generated clients, since new clients
     * would be created.
     * @param string $clientId OAuth client Id
     */
    public function __construct(string $clientId)
    {
        $this->clientId = $clientId;
    }
    use \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{clientId}'], [rawurlencode($this->clientId)], '/oauth-client/{clientId}/revoke');
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
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeInternalServerErrorException
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
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientRevokeInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
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