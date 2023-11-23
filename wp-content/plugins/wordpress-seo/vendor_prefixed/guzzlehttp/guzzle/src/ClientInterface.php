<?php

namespace YoastSEO_Vendor\GuzzleHttp;

use YoastSEO_Vendor\GuzzleHttp\Exception\GuzzleException;
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
use YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
use YoastSEO_Vendor\Psr\Http\Message\UriInterface;
/**
 * Client interface for sending HTTP requests.
 */
interface ClientInterface
{
    /**
<<<<<<< HEAD
     * @deprecated Will be removed in Guzzle 7.0.0
     */
    const VERSION = '6.5.5';
=======
     * The Guzzle major version.
     */
    public const MAJOR_VERSION = 7;
>>>>>>> update
    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
<<<<<<< HEAD
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function send(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options = []);
=======
     * @throws GuzzleException
     */
    public function send(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options = []) : \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
>>>>>>> update
    /**
     * Asynchronously send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
<<<<<<< HEAD
     *
     * @return PromiseInterface
     */
    public function sendAsync(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options = []);
=======
     */
    public function sendAsync(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options = []) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
>>>>>>> update
    /**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string              $method  HTTP method.
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
<<<<<<< HEAD
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request($method, $uri, array $options = []);
=======
     * @throws GuzzleException
     */
    public function request(string $method, $uri, array $options = []) : \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
>>>>>>> update
    /**
     * Create and send an asynchronous HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string              $method  HTTP method
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
<<<<<<< HEAD
     *
     * @return PromiseInterface
     */
    public function requestAsync($method, $uri, array $options = []);
=======
     */
    public function requestAsync(string $method, $uri, array $options = []) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
>>>>>>> update
    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
<<<<<<< HEAD
     */
    public function getConfig($option = null);
=======
     *
     * @deprecated ClientInterface::getConfig will be removed in guzzlehttp/guzzle:8.0.
     */
    public function getConfig(string $option = null);
>>>>>>> update
}
