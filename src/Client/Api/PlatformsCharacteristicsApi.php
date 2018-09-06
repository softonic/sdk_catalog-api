<?php
/**
 * PlatformsCharacteristicsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * API that allows to manage the programs catalog of Softonic
 *
 * OpenAPI spec version: 2.99.0
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\CatalogApiSdk\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Softonic\CatalogApiSdk\ApiException;
use Softonic\CatalogApiSdk\Configuration;
use Softonic\CatalogApiSdk\HeaderSelector;
use Softonic\CatalogApiSdk\ObjectSerializer;

/**
 * PlatformsCharacteristicsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlatformsCharacteristicsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation findPlatformCharacteristic
     *
     * List of PlatformCharacteristics
     *
     * @param  string $id_platform Platform ID (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[]
     */
    public function findPlatformCharacteristic($id_platform)
    {
        list($response) = $this->findPlatformCharacteristicWithHttpInfo($id_platform);
        return $response;
    }

    /**
     * Operation findPlatformCharacteristicWithHttpInfo
     *
     * List of PlatformCharacteristics
     *
     * @param  string $id_platform Platform ID (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findPlatformCharacteristicWithHttpInfo($id_platform)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[]';
        $request = $this->findPlatformCharacteristicRequest($id_platform);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findPlatformCharacteristicAsync
     *
     * List of PlatformCharacteristics
     *
     * @param  string $id_platform Platform ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findPlatformCharacteristicAsync($id_platform)
    {
        return $this->findPlatformCharacteristicAsyncWithHttpInfo($id_platform)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findPlatformCharacteristicAsyncWithHttpInfo
     *
     * List of PlatformCharacteristics
     *
     * @param  string $id_platform Platform ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findPlatformCharacteristicAsyncWithHttpInfo($id_platform)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic[]';
        $request = $this->findPlatformCharacteristicRequest($id_platform);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findPlatformCharacteristic'
     *
     * @param  string $id_platform Platform ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findPlatformCharacteristicRequest($id_platform)
    {
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_platform when calling findPlatformCharacteristic'
            );
        }
        if (strlen($id_platform) > 20) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.findPlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if (strlen($id_platform) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.findPlatformCharacteristic, must be bigger than or equal to 1.');
        }


        $resourcePath = '/platforms/{id_platform}/characteristics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                '{' . 'id_platform' . '}',
                ObjectSerializer::toPathValue($id_platform),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation readPlatformCharacteristic
     *
     * Fetches a single PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic
     */
    public function readPlatformCharacteristic($id_platform, $id_characteristic)
    {
        list($response) = $this->readPlatformCharacteristicWithHttpInfo($id_platform, $id_characteristic);
        return $response;
    }

    /**
     * Operation readPlatformCharacteristicWithHttpInfo
     *
     * Fetches a single PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic, HTTP status code, HTTP response headers (array of strings)
     */
    public function readPlatformCharacteristicWithHttpInfo($id_platform, $id_characteristic)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic';
        $request = $this->readPlatformCharacteristicRequest($id_platform, $id_characteristic);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation readPlatformCharacteristicAsync
     *
     * Fetches a single PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readPlatformCharacteristicAsync($id_platform, $id_characteristic)
    {
        return $this->readPlatformCharacteristicAsyncWithHttpInfo($id_platform, $id_characteristic)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation readPlatformCharacteristicAsyncWithHttpInfo
     *
     * Fetches a single PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readPlatformCharacteristicAsyncWithHttpInfo($id_platform, $id_characteristic)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic';
        $request = $this->readPlatformCharacteristicRequest($id_platform, $id_characteristic);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'readPlatformCharacteristic'
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function readPlatformCharacteristicRequest($id_platform, $id_characteristic)
    {
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_platform when calling readPlatformCharacteristic'
            );
        }
        if (strlen($id_platform) > 20) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.readPlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if (strlen($id_platform) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.readPlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_characteristic' is set
        if ($id_characteristic === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_characteristic when calling readPlatformCharacteristic'
            );
        }
        if (strlen($id_characteristic) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_characteristic" when calling PlatformsCharacteristicsApi.readPlatformCharacteristic, must be smaller than or equal to 40.');
        }
        if (strlen($id_characteristic) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_characteristic" when calling PlatformsCharacteristicsApi.readPlatformCharacteristic, must be bigger than or equal to 1.');
        }


        $resourcePath = '/platforms/{id_platform}/characteristics/{id_characteristic}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                '{' . 'id_platform' . '}',
                ObjectSerializer::toPathValue($id_platform),
                $resourcePath
            );
        }
        // path params
        if ($id_characteristic !== null) {
            $resourcePath = str_replace(
                '{' . 'id_characteristic' . '}',
                ObjectSerializer::toPathValue($id_characteristic),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replacePlatformCharacteristic
     *
     * Entirely replaces a PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic $body body (optional)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function replacePlatformCharacteristic($id_platform, $id_characteristic, $body = null)
    {
        $this->replacePlatformCharacteristicWithHttpInfo($id_platform, $id_characteristic, $body);
    }

    /**
     * Operation replacePlatformCharacteristicWithHttpInfo
     *
     * Entirely replaces a PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic $body (optional)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function replacePlatformCharacteristicWithHttpInfo($id_platform, $id_characteristic, $body = null)
    {
        $returnType = '';
        $request = $this->replacePlatformCharacteristicRequest($id_platform, $id_characteristic, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation replacePlatformCharacteristicAsync
     *
     * Entirely replaces a PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replacePlatformCharacteristicAsync($id_platform, $id_characteristic, $body = null)
    {
        return $this->replacePlatformCharacteristicAsyncWithHttpInfo($id_platform, $id_characteristic, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replacePlatformCharacteristicAsyncWithHttpInfo
     *
     * Entirely replaces a PlatformCharacteristic
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replacePlatformCharacteristicAsyncWithHttpInfo($id_platform, $id_characteristic, $body = null)
    {
        $returnType = '';
        $request = $this->replacePlatformCharacteristicRequest($id_platform, $id_characteristic, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replacePlatformCharacteristic'
     *
     * @param  string $id_platform Platform ID (required)
     * @param  string $id_characteristic Platform characteristic ID (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\PlatformCharacteristic $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replacePlatformCharacteristicRequest($id_platform, $id_characteristic, $body = null)
    {
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_platform when calling replacePlatformCharacteristic'
            );
        }
        if (strlen($id_platform) > 20) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.replacePlatformCharacteristic, must be smaller than or equal to 20.');
        }
        if (strlen($id_platform) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_platform" when calling PlatformsCharacteristicsApi.replacePlatformCharacteristic, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_characteristic' is set
        if ($id_characteristic === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_characteristic when calling replacePlatformCharacteristic'
            );
        }
        if (strlen($id_characteristic) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_characteristic" when calling PlatformsCharacteristicsApi.replacePlatformCharacteristic, must be smaller than or equal to 40.');
        }
        if (strlen($id_characteristic) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_characteristic" when calling PlatformsCharacteristicsApi.replacePlatformCharacteristic, must be bigger than or equal to 1.');
        }


        $resourcePath = '/platforms/{id_platform}/characteristics/{id_characteristic}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                '{' . 'id_platform' . '}',
                ObjectSerializer::toPathValue($id_platform),
                $resourcePath
            );
        }
        // path params
        if ($id_characteristic !== null) {
            $resourcePath = str_replace(
                '{' . 'id_characteristic' . '}',
                ObjectSerializer::toPathValue($id_characteristic),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
