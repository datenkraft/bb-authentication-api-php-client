<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception;

class PatchOAuthClientUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Unprocessable Entity

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.
- OAUTH_CLIENT_REVOKED: The client has been revoked.
- OAUTH_CLIENT_GENERATED: Generated clients must not be patched.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}