<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use InvalidArgumentException;
use YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface;
use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
use YoastSEO_Vendor\Psr\Http\Message\UploadedFileInterface;
use YoastSEO_Vendor\Psr\Http\Message\UriInterface;
/**
 * Server-side HTTP request
 *
 * Extends the Request definition to add methods for accessing incoming data,
 * specifically server parameters, cookies, matched path parameters, query
 * string arguments, body parameters, and upload file information.
 *
 * "Attributes" are discovered via decomposing the request (and usually
 * specifically the URI path), and typically will be injected by the application.
 *
 * Requests are considered immutable; all methods that might change state are
 * implemented such that they retain the internal state of the current
 * message and return a new instance that contains the changed state.
 */
class ServerRequest extends \YoastSEO_Vendor\GuzzleHttp\Psr7\Request implements \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
{
    /**
     * @var array
     */
    private $attributes = [];
    /**
     * @var array
     */
    private $cookieParams = [];
    /**
     * @var array|object|null
     */
    private $parsedBody;
    /**
     * @var array
     */
    private $queryParams = [];
    /**
     * @var array
     */
    private $serverParams;
    /**
     * @var array
     */
    private $uploadedFiles = [];
    /**
     * @param string                               $method       HTTP method
     * @param string|UriInterface                  $uri          URI
<<<<<<< HEAD
     * @param array                                $headers      Request headers
=======
     * @param array<string, string|string[]>       $headers      Request headers
>>>>>>> update
     * @param string|resource|StreamInterface|null $body         Request body
     * @param string                               $version      Protocol version
     * @param array                                $serverParams Typically the $_SERVER superglobal
     */
<<<<<<< HEAD
    public function __construct($method, $uri, array $headers = [], $body = null, $version = '1.1', array $serverParams = [])
=======
    public function __construct(string $method, $uri, array $headers = [], $body = null, string $version = '1.1', array $serverParams = [])
>>>>>>> update
    {
        $this->serverParams = $serverParams;
        parent::__construct($method, $uri, $headers, $body, $version);
    }
    /**
     * Return an UploadedFile instance array.
     *
<<<<<<< HEAD
     * @param array $files A array which respect $_FILES structure
     *
     * @return array
     *
     * @throws InvalidArgumentException for unrecognized values
     */
    public static function normalizeFiles(array $files)
=======
     * @param array $files An array which respect $_FILES structure
     *
     * @throws InvalidArgumentException for unrecognized values
     */
    public static function normalizeFiles(array $files) : array
>>>>>>> update
    {
        $normalized = [];
        foreach ($files as $key => $value) {
            if ($value instanceof \YoastSEO_Vendor\Psr\Http\Message\UploadedFileInterface) {
                $normalized[$key] = $value;
            } elseif (\is_array($value) && isset($value['tmp_name'])) {
                $normalized[$key] = self::createUploadedFileFromSpec($value);
            } elseif (\is_array($value)) {
                $normalized[$key] = self::normalizeFiles($value);
                continue;
            } else {
                throw new \InvalidArgumentException('Invalid value in files specification');
            }
        }
        return $normalized;
    }
    /**
     * Create and return an UploadedFile instance from a $_FILES specification.
     *
     * If the specification represents an array of values, this method will
     * delegate to normalizeNestedFileSpec() and return that return value.
     *
     * @param array $value $_FILES struct
     *
<<<<<<< HEAD
     * @return array|UploadedFileInterface
=======
     * @return UploadedFileInterface|UploadedFileInterface[]
>>>>>>> update
     */
    private static function createUploadedFileFromSpec(array $value)
    {
        if (\is_array($value['tmp_name'])) {
            return self::normalizeNestedFileSpec($value);
        }
        return new \YoastSEO_Vendor\GuzzleHttp\Psr7\UploadedFile($value['tmp_name'], (int) $value['size'], (int) $value['error'], $value['name'], $value['type']);
    }
    /**
     * Normalize an array of file specifications.
     *
     * Loops through all nested files and returns a normalized array of
     * UploadedFileInterface instances.
     *
<<<<<<< HEAD
     * @param array $files
     *
     * @return UploadedFileInterface[]
     */
    private static function normalizeNestedFileSpec(array $files = [])
    {
        $normalizedFiles = [];
        foreach (\array_keys($files['tmp_name']) as $key) {
            $spec = ['tmp_name' => $files['tmp_name'][$key], 'size' => $files['size'][$key], 'error' => $files['error'][$key], 'name' => $files['name'][$key], 'type' => $files['type'][$key]];
=======
     * @return UploadedFileInterface[]
     */
    private static function normalizeNestedFileSpec(array $files = []) : array
    {
        $normalizedFiles = [];
        foreach (\array_keys($files['tmp_name']) as $key) {
            $spec = ['tmp_name' => $files['tmp_name'][$key], 'size' => $files['size'][$key] ?? null, 'error' => $files['error'][$key] ?? null, 'name' => $files['name'][$key] ?? null, 'type' => $files['type'][$key] ?? null];
>>>>>>> update
            $normalizedFiles[$key] = self::createUploadedFileFromSpec($spec);
        }
        return $normalizedFiles;
    }
    /**
     * Return a ServerRequest populated with superglobals:
     * $_GET
     * $_POST
     * $_COOKIE
     * $_FILES
     * $_SERVER
<<<<<<< HEAD
     *
     * @return ServerRequestInterface
     */
    public static function fromGlobals()
    {
        $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
=======
     */
    public static function fromGlobals() : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
>>>>>>> update
        $headers = \getallheaders();
        $uri = self::getUriFromGlobals();
        $body = new \YoastSEO_Vendor\GuzzleHttp\Psr7\CachingStream(new \YoastSEO_Vendor\GuzzleHttp\Psr7\LazyOpenStream('php://input', 'r+'));
        $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? \str_replace('HTTP/', '', $_SERVER['SERVER_PROTOCOL']) : '1.1';
        $serverRequest = new \YoastSEO_Vendor\GuzzleHttp\Psr7\ServerRequest($method, $uri, $headers, $body, $protocol, $_SERVER);
        return $serverRequest->withCookieParams($_COOKIE)->withQueryParams($_GET)->withParsedBody($_POST)->withUploadedFiles(self::normalizeFiles($_FILES));
    }
<<<<<<< HEAD
    private static function extractHostAndPortFromAuthority($authority)
=======
    private static function extractHostAndPortFromAuthority(string $authority) : array
>>>>>>> update
    {
        $uri = 'http://' . $authority;
        $parts = \parse_url($uri);
        if (\false === $parts) {
            return [null, null];
        }
<<<<<<< HEAD
        $host = isset($parts['host']) ? $parts['host'] : null;
        $port = isset($parts['port']) ? $parts['port'] : null;
=======
        $host = $parts['host'] ?? null;
        $port = $parts['port'] ?? null;
>>>>>>> update
        return [$host, $port];
    }
    /**
     * Get a Uri populated with values from $_SERVER.
<<<<<<< HEAD
     *
     * @return UriInterface
     */
    public static function getUriFromGlobals()
=======
     */
    public static function getUriFromGlobals() : \YoastSEO_Vendor\Psr\Http\Message\UriInterface
>>>>>>> update
    {
        $uri = new \YoastSEO_Vendor\GuzzleHttp\Psr7\Uri('');
        $uri = $uri->withScheme(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http');
        $hasPort = \false;
        if (isset($_SERVER['HTTP_HOST'])) {
<<<<<<< HEAD
            list($host, $port) = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
=======
            [$host, $port] = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
>>>>>>> update
            if ($host !== null) {
                $uri = $uri->withHost($host);
            }
            if ($port !== null) {
                $hasPort = \true;
                $uri = $uri->withPort($port);
            }
        } elseif (isset($_SERVER['SERVER_NAME'])) {
            $uri = $uri->withHost($_SERVER['SERVER_NAME']);
        } elseif (isset($_SERVER['SERVER_ADDR'])) {
            $uri = $uri->withHost($_SERVER['SERVER_ADDR']);
        }
        if (!$hasPort && isset($_SERVER['SERVER_PORT'])) {
            $uri = $uri->withPort($_SERVER['SERVER_PORT']);
        }
        $hasQuery = \false;
        if (isset($_SERVER['REQUEST_URI'])) {
            $requestUriParts = \explode('?', $_SERVER['REQUEST_URI'], 2);
            $uri = $uri->withPath($requestUriParts[0]);
            if (isset($requestUriParts[1])) {
                $hasQuery = \true;
                $uri = $uri->withQuery($requestUriParts[1]);
            }
        }
        if (!$hasQuery && isset($_SERVER['QUERY_STRING'])) {
            $uri = $uri->withQuery($_SERVER['QUERY_STRING']);
        }
        return $uri;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getServerParams()
    {
        return $this->serverParams;
    }
    /**
     * {@inheritdoc}
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }
    /**
     * {@inheritdoc}
     */
    public function withUploadedFiles(array $uploadedFiles)
=======
    public function getServerParams() : array
    {
        return $this->serverParams;
    }
    public function getUploadedFiles() : array
    {
        return $this->uploadedFiles;
    }
    public function withUploadedFiles(array $uploadedFiles) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        $new = clone $this;
        $new->uploadedFiles = $uploadedFiles;
        return $new;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getCookieParams()
    {
        return $this->cookieParams;
    }
    /**
     * {@inheritdoc}
     */
    public function withCookieParams(array $cookies)
=======
    public function getCookieParams() : array
    {
        return $this->cookieParams;
    }
    public function withCookieParams(array $cookies) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        $new = clone $this;
        $new->cookieParams = $cookies;
        return $new;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }
    /**
     * {@inheritdoc}
     */
    public function withQueryParams(array $query)
=======
    public function getQueryParams() : array
    {
        return $this->queryParams;
    }
    public function withQueryParams(array $query) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @return array|object|null
>>>>>>> update
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function withParsedBody($data)
=======
    public function withParsedBody($data) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getAttributes()
=======
    public function getAttributes() : array
>>>>>>> update
    {
        return $this->attributes;
    }
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @return mixed
>>>>>>> update
     */
    public function getAttribute($attribute, $default = null)
    {
        if (\false === \array_key_exists($attribute, $this->attributes)) {
            return $default;
        }
        return $this->attributes[$attribute];
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function withAttribute($attribute, $value)
=======
    public function withAttribute($attribute, $value) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        $new = clone $this;
        $new->attributes[$attribute] = $value;
        return $new;
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function withoutAttribute($attribute)
=======
    public function withoutAttribute($attribute) : \YoastSEO_Vendor\Psr\Http\Message\ServerRequestInterface
>>>>>>> update
    {
        if (\false === \array_key_exists($attribute, $this->attributes)) {
            return $this;
        }
        $new = clone $this;
        unset($new->attributes[$attribute]);
        return $new;
    }
}
