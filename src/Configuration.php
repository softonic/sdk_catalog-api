<?php
/**
 * Configuration
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
 * OpenAPI spec version: 2.0.377-2222
 * Contact: team.platform@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\CatalogApiSdk;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\CatalogApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The default header(s)
     *
     * @var array
     */
    protected $defaultHeaders = [];

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://catalog.sftapi.com';

    /**
     * Timeout (second) of the HTTP request, by default set to 0, no timeout
     *
     * @var string
     */
    protected $curlTimeout = 0;

    /**
     * Timeout (second) of the HTTP connection, by default set to 0, no timeout
     *
     * @var string
     */
    protected $curlConnectTimeout = 0;

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     *
     * @var string
     */
    protected $userAgent = 'Swagger-Codegen/v2.25.2/php';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Indicates if SSL verification should be enabled or disabled.
     *
     * This is useful if the host uses a self-signed SSL certificate.
     *
     * @var boolean True if the certificate should be validated, false otherwise.
     */
    protected $sslVerification = true;

    /**
     * Curl proxy host
     *
     * @var string
     */
    protected $proxyHost;

    /**
     * Curl proxy port
     *
     * @var integer
     */
    protected $proxyPort;

    /**
     * Curl proxy type, e.g. CURLPROXY_HTTP or CURLPROXY_SOCKS5
     *
     * @see https://secure.php.net/manual/en/function.curl-setopt.php
     * @var integer
     */
    protected $proxyType;

    /**
     * Curl proxy username
     *
     * @var string
     */
    protected $proxyUser;

    /**
     * Curl proxy password
     *
     * @var string
     */
    protected $proxyPassword;

    /**
     * Allow Curl encoding header
     *
     * @var bool
     */
    protected $allowEncoding = false;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Adds a default header
     *
     * @param string $headerName  header name (e.g. Token)
     * @param string $headerValue header value (e.g. 1z8wp3)
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function addDefaultHeader($headerName, $headerValue)
    {
        if (!is_string($headerName)) {
            throw new \InvalidArgumentException('Header name must be a string.');
        }

        $this->defaultHeaders[$headerName] =  $headerValue;
        return $this;
    }

    /**
     * Gets the default header
     *
     * @return array An array of default header(s)
     */
    public function getDefaultHeaders()
    {
        return $this->defaultHeaders;
    }

    /**
     * Deletes a default header
     *
     * @param string $headerName the header to delete
     *
     * @return $this
     */
    public function deleteDefaultHeader($headerName)
    {
        unset($this->defaultHeaders[$headerName]);
        return $this;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets the HTTP timeout value
     *
     * @param integer $seconds Number of seconds before timing out [set to 0 for no timeout]
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurlTimeout($seconds)
    {
        if (!is_numeric($seconds) || $seconds < 0) {
            throw new \InvalidArgumentException('Timeout value must be numeric and a non-negative number.');
        }

        $this->curlTimeout = $seconds;
        return $this;
    }

    /**
     * Gets the HTTP timeout value
     *
     * @return string HTTP timeout value
     */
    public function getCurlTimeout()
    {
        return $this->curlTimeout;
    }

    /**
     * Sets the HTTP connect timeout value
     *
     * @param integer $seconds Number of seconds before connection times out [set to 0 for no timeout]
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurlConnectTimeout($seconds)
    {
        if (!is_numeric($seconds) || $seconds < 0) {
            throw new \InvalidArgumentException('Connect timeout value must be numeric and a non-negative number.');
        }

        $this->curlConnectTimeout = $seconds;
        return $this;
    }

    /**
     * Set whether to accept encoding
     * @param bool $allowEncoding
     *
     * @return $this
     */
    public function setAllowEncoding($allowEncoding)
    {
        $this->allowEncoding = $allowEncoding;
        return $this;
    }

    /**
     * Gets the HTTP connect timeout value
     *
     * @return string HTTP connect timeout value
     */
    public function getCurlConnectTimeout()
    {
        return $this->curlConnectTimeout;
    }

    /**
     * Get whether to allow encoding
     *
     * @return bool
     */
    public function getAllowEncoding()
    {
        return $this->allowEncoding;
    }

    /**
     * Sets the HTTP Proxy Host
     *
     * @param string $proxyHost HTTP Proxy URL
     *
     * @return $this
     */
    public function setCurlProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Host
     *
     * @return string
     */
    public function getCurlProxyHost()
    {
        return $this->proxyHost;
    }

    /**
     * Sets the HTTP Proxy Port
     *
     * @param integer $proxyPort HTTP Proxy Port
     *
     * @return $this
     */
    public function setCurlProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Port
     *
     * @return integer
     */
    public function getCurlProxyPort()
    {
        return $this->proxyPort;
    }

    /**
     * Sets the HTTP Proxy Type
     *
     * @param integer $proxyType HTTP Proxy Type
     *
     * @return $this
     */
    public function setCurlProxyType($proxyType)
    {
        $this->proxyType = $proxyType;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Type
     *
     * @return integer
     */
    public function getCurlProxyType()
    {
        return $this->proxyType;
    }

    /**
     * Sets the HTTP Proxy User
     *
     * @param string $proxyUser HTTP Proxy User
     *
     * @return $this
     */
    public function setCurlProxyUser($proxyUser)
    {
        $this->proxyUser = $proxyUser;
        return $this;
    }

    /**
     * Gets the HTTP Proxy User
     *
     * @return string
     */
    public function getCurlProxyUser()
    {
        return $this->proxyUser;
    }

    /**
     * Sets the HTTP Proxy Password
     *
     * @param string $proxyPassword HTTP Proxy Password
     *
     * @return $this
     */
    public function setCurlProxyPassword($proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Password
     *
     * @return string
     */
    public function getCurlProxyPassword()
    {
        return $this->proxyPassword;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Sets if SSL verification should be enabled or disabled
     *
     * @param boolean $sslVerification True if the certificate should be validated, false otherwise
     *
     * @return $this
     */
    public function setSSLVerification($sslVerification)
    {
        $this->sslVerification = $sslVerification;
        return $this;
    }

    /**
     * Gets if SSL verification should be enabled or disabled
     *
     * @return boolean True if the certificate should be validated, false otherwise
     */
    public function getSSLVerification()
    {
        return $this->sslVerification;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Softonic\CatalogApiSdk) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 2.0.377-2222' . PHP_EOL;
        $report .= '    SDK Package Version: v2.25.2' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }
}
