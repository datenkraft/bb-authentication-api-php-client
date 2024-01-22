<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception;

class PatchOAuthClientUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable Entity

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.
- OAUTH_CLIENT_REVOKED: The client has been revoked.
- OAUTH_CLIENT_GENERATED: Generated clients must not be patched.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}