<?php
/**
 * CategoriesChildsApi
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
 * OpenAPI spec version: 2.108.0
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
use Softonic\CatalogApiSdk\Client\Model\ModelInterface;
use Softonic\CatalogApiSdk\Configuration;
use Softonic\CatalogApiSdk\HeaderSelector;
use Softonic\CatalogApiSdk\ObjectSerializer;

/**
 * CategoriesChildsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesChildsApi
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
     * Operation createCategoryChild
     *
     * Creates a new CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\CategoryChild $body body (optional)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createCategoryChild($id_category, $body = null)
    {
        $this->createCategoryChildWithHttpInfo($id_category, $body);
    }

    /**
     * Operation createCategoryChildWithHttpInfo
     *
     * Creates a new CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\CategoryChild $body (optional)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCategoryChildWithHttpInfo($id_category, $body = null)
    {
        $returnType = '';
        $request = $this->createCategoryChildRequest($id_category, $body);

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
     * Operation createCategoryChildAsync
     *
     * Creates a new CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\CategoryChild $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCategoryChildAsync($id_category, $body = null)
    {
        return $this->createCategoryChildAsyncWithHttpInfo($id_category, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCategoryChildAsyncWithHttpInfo
     *
     * Creates a new CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\CategoryChild $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCategoryChildAsyncWithHttpInfo($id_category, $body = null)
    {
        $returnType = '';
        $request = $this->createCategoryChildRequest($id_category, $body);

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
     * Create request for operation 'createCategoryChild'
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  \Softonic\CatalogApiSdk\Client\Model\CategoryChild $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createCategoryChildRequest($id_category, $body = null)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_category when calling createCategoryChild'
            );
        }
        if (strlen($id_category) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.createCategoryChild, must be smaller than or equal to 40.');
        }
        if (strlen($id_category) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.createCategoryChild, must be bigger than or equal to 1.');
        }


        $resourcePath = '/categories/{id_category}/childs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_category !== null) {
            $resourcePath = str_replace(
                '{' . 'id_category' . '}',
                ObjectSerializer::toPathValue($id_category),
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
            elseif ($httpBody instanceof ModelInterface && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($httpBody->toArray(true));
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation findCategoryChild
     *
     * List of CategoryChilds
     *
     * @param  string $id_category Parent category identifier (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\CatalogApiSdk\Client\Model\CategoryChild[]
     */
    public function findCategoryChild($id_category)
    {
        list($response) = $this->findCategoryChildWithHttpInfo($id_category);
        return $response;
    }

    /**
     * Operation findCategoryChildWithHttpInfo
     *
     * List of CategoryChilds
     *
     * @param  string $id_category Parent category identifier (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\CatalogApiSdk\Client\Model\CategoryChild[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findCategoryChildWithHttpInfo($id_category)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\CategoryChild[]';
        $request = $this->findCategoryChildRequest($id_category);

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
                        '\Softonic\CatalogApiSdk\Client\Model\CategoryChild[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findCategoryChildAsync
     *
     * List of CategoryChilds
     *
     * @param  string $id_category Parent category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findCategoryChildAsync($id_category)
    {
        return $this->findCategoryChildAsyncWithHttpInfo($id_category)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findCategoryChildAsyncWithHttpInfo
     *
     * List of CategoryChilds
     *
     * @param  string $id_category Parent category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findCategoryChildAsyncWithHttpInfo($id_category)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\CategoryChild[]';
        $request = $this->findCategoryChildRequest($id_category);

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
     * Create request for operation 'findCategoryChild'
     *
     * @param  string $id_category Parent category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findCategoryChildRequest($id_category)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_category when calling findCategoryChild'
            );
        }
        if (strlen($id_category) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.findCategoryChild, must be smaller than or equal to 40.');
        }
        if (strlen($id_category) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.findCategoryChild, must be bigger than or equal to 1.');
        }


        $resourcePath = '/categories/{id_category}/childs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_category !== null) {
            $resourcePath = str_replace(
                '{' . 'id_category' . '}',
                ObjectSerializer::toPathValue($id_category),
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
     * Operation readCategoryChild
     *
     * Fetches a single CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  string $id_child Child category identifier (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\CatalogApiSdk\Client\Model\CategoryChild
     */
    public function readCategoryChild($id_category, $id_child)
    {
        list($response) = $this->readCategoryChildWithHttpInfo($id_category, $id_child);
        return $response;
    }

    /**
     * Operation readCategoryChildWithHttpInfo
     *
     * Fetches a single CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  string $id_child Child category identifier (required)
     *
     * @throws \Softonic\CatalogApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\CatalogApiSdk\Client\Model\CategoryChild, HTTP status code, HTTP response headers (array of strings)
     */
    public function readCategoryChildWithHttpInfo($id_category, $id_child)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\CategoryChild';
        $request = $this->readCategoryChildRequest($id_category, $id_child);

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
                        '\Softonic\CatalogApiSdk\Client\Model\CategoryChild',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation readCategoryChildAsync
     *
     * Fetches a single CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  string $id_child Child category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readCategoryChildAsync($id_category, $id_child)
    {
        return $this->readCategoryChildAsyncWithHttpInfo($id_category, $id_child)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation readCategoryChildAsyncWithHttpInfo
     *
     * Fetches a single CategoryChild
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  string $id_child Child category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readCategoryChildAsyncWithHttpInfo($id_category, $id_child)
    {
        $returnType = '\Softonic\CatalogApiSdk\Client\Model\CategoryChild';
        $request = $this->readCategoryChildRequest($id_category, $id_child);

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
     * Create request for operation 'readCategoryChild'
     *
     * @param  string $id_category Parent category identifier (required)
     * @param  string $id_child Child category identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function readCategoryChildRequest($id_category, $id_child)
    {
        // verify the required parameter 'id_category' is set
        if ($id_category === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_category when calling readCategoryChild'
            );
        }
        if (strlen($id_category) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.readCategoryChild, must be smaller than or equal to 40.');
        }
        if (strlen($id_category) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_category" when calling CategoriesChildsApi.readCategoryChild, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id_child' is set
        if ($id_child === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_child when calling readCategoryChild'
            );
        }
        if (strlen($id_child) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_child" when calling CategoriesChildsApi.readCategoryChild, must be smaller than or equal to 40.');
        }
        if (strlen($id_child) < 1) {
            throw new \InvalidArgumentException('invalid length for "$id_child" when calling CategoriesChildsApi.readCategoryChild, must be bigger than or equal to 1.');
        }


        $resourcePath = '/categories/{id_category}/childs/{id_child}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_category !== null) {
            $resourcePath = str_replace(
                '{' . 'id_category' . '}',
                ObjectSerializer::toPathValue($id_category),
                $resourcePath
            );
        }
        // path params
        if ($id_child !== null) {
            $resourcePath = str_replace(
                '{' . 'id_child' . '}',
                ObjectSerializer::toPathValue($id_child),
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
