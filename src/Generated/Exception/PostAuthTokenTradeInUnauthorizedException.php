<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception;

class PostAuthTokenTradeInUnauthorizedException extends UnauthorizedException
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
        parent::__construct('Unauthorized

Error codes:
- AUTHORIZATION_MISSING: No valid authentication information was given.
- TRADE_IN_TOKEN_NOT_PARSABLE: The given token could not be parsed.
- TRADE_IN_TOKEN_INVALID: The given token is invalid.
- TRADE_IN_TOKEN_EMAIL_MISSING: The given token is missing the mail address.
- TRADE_IN_TOKEN_IDENTITY_NOT_FOUND: The mail address given in the token could not be found.
- TRADE_IN_TOKEN_IDENTITY_NOT_FOUND: The mail address given in the token could not be found.');
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