<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint;

class PostAuthTokenTradeIn extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Trade in an idToken for a token
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody $requestBody)
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
        return '/auth/token-trade-in';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody) {
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
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\TokenTradeIn|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\TokenTradeIn', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
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