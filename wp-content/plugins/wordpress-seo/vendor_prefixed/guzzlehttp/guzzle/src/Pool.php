<?php

namespace YoastSEO_Vendor\GuzzleHttp;

<<<<<<< HEAD
=======
use YoastSEO_Vendor\GuzzleHttp\Promise as P;
>>>>>>> update
use YoastSEO_Vendor\GuzzleHttp\Promise\EachPromise;
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
use YoastSEO_Vendor\GuzzleHttp\Promise\PromisorInterface;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
/**
 * Sends an iterator of requests concurrently using a capped pool size.
 *
 * The pool will read from an iterator until it is cancelled or until the
 * iterator is consumed. When a request is yielded, the request is sent after
 * applying the "request_options" request options (if provided in the ctor).
 *
 * When a function is yielded by the iterator, the function is provided the
 * "request_options" array that should be merged on top of any existing
 * options, and the function MUST then return a wait-able promise.
<<<<<<< HEAD
 */
class Pool implements \YoastSEO_Vendor\GuzzleHttp\Promise\PromisorInterface
{
    /** @var EachPromise */
=======
 *
 * @final
 */
class Pool implements \YoastSEO_Vendor\GuzzleHttp\Promise\PromisorInterface
{
    /**
     * @var EachPromise
     */
>>>>>>> update
    private $each;
    /**
     * @param ClientInterface $client   Client used to send the requests.
     * @param array|\Iterator $requests Requests or functions that return
     *                                  requests to send concurrently.
     * @param array           $config   Associative array of options
<<<<<<< HEAD
     *     - concurrency: (int) Maximum number of requests to send concurrently
     *     - options: Array of request options to apply to each request.
     *     - fulfilled: (callable) Function to invoke when a request completes.
     *     - rejected: (callable) Function to invoke when a request is rejected.
     */
    public function __construct(\YoastSEO_Vendor\GuzzleHttp\ClientInterface $client, $requests, array $config = [])
    {
        // Backwards compatibility.
        if (isset($config['pool_size'])) {
            $config['concurrency'] = $config['pool_size'];
        } elseif (!isset($config['concurrency'])) {
=======
     *                                  - concurrency: (int) Maximum number of requests to send concurrently
     *                                  - options: Array of request options to apply to each request.
     *                                  - fulfilled: (callable) Function to invoke when a request completes.
     *                                  - rejected: (callable) Function to invoke when a request is rejected.
     */
    public function __construct(\YoastSEO_Vendor\GuzzleHttp\ClientInterface $client, $requests, array $config = [])
    {
        if (!isset($config['concurrency'])) {
>>>>>>> update
            $config['concurrency'] = 25;
        }
        if (isset($config['options'])) {
            $opts = $config['options'];
            unset($config['options']);
        } else {
            $opts = [];
        }
<<<<<<< HEAD
        $iterable = \YoastSEO_Vendor\GuzzleHttp\Promise\iter_for($requests);
        $requests = function () use($iterable, $client, $opts) {
=======
        $iterable = \YoastSEO_Vendor\GuzzleHttp\Promise\Create::iterFor($requests);
        $requests = static function () use($iterable, $client, $opts) {
>>>>>>> update
            foreach ($iterable as $key => $rfn) {
                if ($rfn instanceof \YoastSEO_Vendor\Psr\Http\Message\RequestInterface) {
                    (yield $key => $client->sendAsync($rfn, $opts));
                } elseif (\is_callable($rfn)) {
                    (yield $key => $rfn($opts));
                } else {
<<<<<<< HEAD
                    throw new \InvalidArgumentException('Each value yielded by ' . 'the iterator must be a Psr7\\Http\\Message\\RequestInterface ' . 'or a callable that returns a promise that fulfills ' . 'with a Psr7\\Message\\Http\\ResponseInterface object.');
=======
                    throw new \InvalidArgumentException('Each value yielded by the iterator must be a Psr7\\Http\\Message\\RequestInterface or a callable that returns a promise that fulfills with a Psr7\\Message\\Http\\ResponseInterface object.');
>>>>>>> update
                }
            }
        };
        $this->each = new \YoastSEO_Vendor\GuzzleHttp\Promise\EachPromise($requests(), $config);
    }
    /**
     * Get promise
<<<<<<< HEAD
     *
     * @return PromiseInterface
     */
    public function promise()
=======
     */
    public function promise() : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
>>>>>>> update
    {
        return $this->each->promise();
    }
    /**
     * Sends multiple requests concurrently and returns an array of responses
     * and exceptions that uses the same ordering as the provided requests.
     *
     * IMPORTANT: This method keeps every request and response in memory, and
     * as such, is NOT recommended when sending a large number or an
     * indeterminate number of requests concurrently.
     *
     * @param ClientInterface $client   Client used to send the requests
     * @param array|\Iterator $requests Requests to send concurrently.
     * @param array           $options  Passes through the options available in
<<<<<<< HEAD
     *                                  {@see GuzzleHttp\Pool::__construct}
     *
     * @return array Returns an array containing the response or an exception
     *               in the same order that the requests were sent.
     * @throws \InvalidArgumentException if the event format is incorrect.
     */
    public static function batch(\YoastSEO_Vendor\GuzzleHttp\ClientInterface $client, $requests, array $options = [])
=======
     *                                  {@see \GuzzleHttp\Pool::__construct}
     *
     * @return array Returns an array containing the response or an exception
     *               in the same order that the requests were sent.
     *
     * @throws \InvalidArgumentException if the event format is incorrect.
     */
    public static function batch(\YoastSEO_Vendor\GuzzleHttp\ClientInterface $client, $requests, array $options = []) : array
>>>>>>> update
    {
        $res = [];
        self::cmpCallback($options, 'fulfilled', $res);
        self::cmpCallback($options, 'rejected', $res);
        $pool = new static($client, $requests, $options);
        $pool->promise()->wait();
        \ksort($res);
        return $res;
    }
    /**
     * Execute callback(s)
<<<<<<< HEAD
     *
     * @return void
     */
    private static function cmpCallback(array &$options, $name, array &$results)
    {
        if (!isset($options[$name])) {
            $options[$name] = function ($v, $k) use(&$results) {
=======
     */
    private static function cmpCallback(array &$options, string $name, array &$results) : void
    {
        if (!isset($options[$name])) {
            $options[$name] = static function ($v, $k) use(&$results) {
>>>>>>> update
                $results[$k] = $v;
            };
        } else {
            $currentFn = $options[$name];
<<<<<<< HEAD
            $options[$name] = function ($v, $k) use(&$results, $currentFn) {
=======
            $options[$name] = static function ($v, $k) use(&$results, $currentFn) {
>>>>>>> update
                $currentFn($v, $k);
                $results[$k] = $v;
            };
        }
    }
}
