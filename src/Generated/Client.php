<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated;

class Client extends \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\Client
{
    /**
     * Get the audit log.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[endpoint]"?: string, //A filter for restricting the audit log to a endpoint.
     *    "filter[version]"?: string, //A filter for restricting the audit log to a endpoint version.
     *    "filter[identifier]"?: mixed, //A filter for querying actions for a identifier.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuditLogCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuditLogCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuditLogCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuditLogCollection($queryParameters));
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all role to permission assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters));
    }
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function postAuthPermissionRoleCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all permissions from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters));
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all role to identity assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleIdentityCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters));
    }
    /**
     * Create one or more role to identity assignments in this resource server
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function postAuthRoleIdentityCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all available roles from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters));
    }
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\DeleteAuthRole($roleCode));
    }
    /**
     * Get a role from this resource server by its roleCode
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetAuthRole($roleCode));
    }
    /**
     * Patch a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody));
    }
    /**
     * Post a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody));
    }
    /**
     * Trade in an idToken for a token
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostAuthTokenTradeInInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\TokenTradeIn|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function postAuthTokenTradeIn(\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\AuthTokenTradeInPostBody $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostAuthTokenTradeIn($requestBody));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApi()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetOpenApi());
    }
    /**
     * Get the changelog in the specified format
     * @param string $format Changelog file format
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getChangelogInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetChangelogInFormat($format));
    }
    /**
     * Get the openapi documentation in the specified format
     * @param string $format Openapi file format
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApiInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetOpenApiInFormat($format));
    }
    /**
     * Get a list of OAuth clients.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[identityId]"?: string, //Filter for a specific identity id to get all OAuth clients to a specific identity.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClientCollection|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getOAuthClientCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetOAuthClientCollection($queryParameters));
    }
    /**
     * Add a new OAuth client.
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient $requestBody
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\PostOAuthClientInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function postOAuthClient(\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\NewOAuthClient $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostOAuthClient($requestBody));
    }
    /**
     * Get the OAuth client with the given client ID.
     * @param string $clientId Client ID of the OAuth Client
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientBadRequestException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientForbiddenException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientNotFoundException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\GetOAuthClientInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\OAuthClient|\Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\ErrorResponse
     */
    public function getOAuthClient(string $clientId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\GetOAuthClient($clientId));
    }
    /**
     * Update one or more fields of a OAuth client. Only a limited set of fields can be updated.
     * @param string $clientId OAuth client Id
     * @param \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient $requestBody
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
    public function patchOAuthClient(string $clientId, \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model\UpdateOAuthClient $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PatchOAuthClient($clientId, $requestBody));
    }
    /**
     * Revoke an OAuth client. Be aware that this has no immediate effect on issued tokens.
     * This endpoint may not be used to disenfranchisement users by revoking generated clients, since new clients
     * would be created.
     * @param string $clientId OAuth client Id
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
    public function postOAuthClientRevoke(string $clientId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Endpoint\PostOAuthClientRevoke($clientId));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://authentication-api.steve.niceshops.com/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Datenkraft\Backbone\Client\AuthenticationApi\Generated\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}