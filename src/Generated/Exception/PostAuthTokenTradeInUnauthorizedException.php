<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception;

class PostAuthTokenTradeInUnauthorizedException extends UnauthorizedException
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
        parent::__construct('Unauthorized

Error codes:
- AUTHORIZATION_MISSING: No valid authentication information was given.
- TRADE_IN_TOKEN_NOT_PARSABLE: The given token could not be parsed.
- TRADE_IN_TOKEN_INVALID: The given token is invalid.
- TRADE_IN_TOKEN_EMAIL_MISSING: The given token is missing the mail address.
- TRADE_IN_TOKEN_IDENTITY_NOT_FOUND: The mail address given in the token could not be found.');
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