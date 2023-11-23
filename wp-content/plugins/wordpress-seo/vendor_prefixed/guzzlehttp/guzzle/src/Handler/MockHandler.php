<?php

namespace YoastSEO_Vendor\GuzzleHttp\Handler;

use YoastSEO_Vendor\GuzzleHttp\Exception\RequestException;
use YoastSEO_Vendor\GuzzleHttp\HandlerStack;
<<<<<<< HEAD
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
use YoastSEO_Vendor\GuzzleHttp\Promise\RejectedPromise;
use YoastSEO_Vendor\GuzzleHttp\TransferStats;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
use YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
/**
 * Handler that returns responses or throw exceptions from a queue.
 */
class MockHandler implements \Countable
{
    private $queue = [];
    private $lastRequest;
    private $lastOptions;
    private $onFulfilled;
=======
use YoastSEO_Vendor\GuzzleHttp\Promise as P;
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
use YoastSEO_Vendor\GuzzleHttp\TransferStats;
use YoastSEO_Vendor\GuzzleHttp\Utils;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
use YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
/**
 * Handler that returns responses or throw exceptions from a queue.
 *
 * @final
 */
class MockHandler implements \Countable
{
    /**
     * @var array
     */
    private $queue = [];
    /**
     * @var RequestInterface|null
     */
    private $lastRequest;
    /**
     * @var array
     */
    private $lastOptions = [];
    /**
     * @var callable|null
     */
    private $onFulfilled;
    /**
     * @var callable|null
     */
>>>>>>> update
    private $onRejected;
    /**
     * Creates a new MockHandler that uses the default handler stack list of
     * middlewares.
     *
<<<<<<< HEAD
     * @param array $queue Array of responses, callables, or exceptions.
     * @param callable $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable $onRejected  Callback to invoke when the return value is rejected.
     *
     * @return HandlerStack
     */
    public static function createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
=======
     * @param array|null    $queue       Array of responses, callables, or exceptions.
     * @param callable|null $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null $onRejected  Callback to invoke when the return value is rejected.
     */
    public static function createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null) : \YoastSEO_Vendor\GuzzleHttp\HandlerStack
>>>>>>> update
    {
        return \YoastSEO_Vendor\GuzzleHttp\HandlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }
    /**
     * The passed in value must be an array of
<<<<<<< HEAD
     * {@see Psr7\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array $queue
     * @param callable $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable $onRejected  Callback to invoke when the return value is rejected.
=======
     * {@see \Psr\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array<int, mixed>|null $queue       The parameters to be passed to the append function, as an indexed array.
     * @param callable|null          $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null          $onRejected  Callback to invoke when the return value is rejected.
>>>>>>> update
     */
    public function __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
    {
        $this->onFulfilled = $onFulfilled;
        $this->onRejected = $onRejected;
        if ($queue) {
<<<<<<< HEAD
            \call_user_func_array([$this, 'append'], $queue);
        }
    }
    public function __invoke(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options)
=======
            // array_values included for BC
            $this->append(...\array_values($queue));
        }
    }
    public function __invoke(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
>>>>>>> update
    {
        if (!$this->queue) {
            throw new \OutOfBoundsException('Mock queue is empty');
        }
        if (isset($options['delay']) && \is_numeric($options['delay'])) {
<<<<<<< HEAD
            \usleep($options['delay'] * 1000);
=======
            \usleep((int) $options['delay'] * 1000);
>>>>>>> update
        }
        $this->lastRequest = $request;
        $this->lastOptions = $options;
        $response = \array_shift($this->queue);
        if (isset($options['on_headers'])) {
            if (!\is_callable($options['on_headers'])) {
                throw new \InvalidArgumentException('on_headers must be callable');
            }
            try {
                $options['on_headers']($response);
            } catch (\Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $response = new \YoastSEO_Vendor\GuzzleHttp\Exception\RequestException($msg, $request, $response, $e);
            }
        }
        if (\is_callable($response)) {
<<<<<<< HEAD
            $response = \call_user_func($response, $request, $options);
        }
        $response = $response instanceof \Exception ? \YoastSEO_Vendor\GuzzleHttp\Promise\rejection_for($response) : \YoastSEO_Vendor\GuzzleHttp\Promise\promise_for($response);
        return $response->then(function ($value) use($request, $options) {
            $this->invokeStats($request, $options, $value);
            if ($this->onFulfilled) {
                \call_user_func($this->onFulfilled, $value);
            }
            if (isset($options['sink'])) {
=======
            $response = $response($request, $options);
        }
        $response = $response instanceof \Throwable ? \YoastSEO_Vendor\GuzzleHttp\Promise\Create::rejectionFor($response) : \YoastSEO_Vendor\GuzzleHttp\Promise\Create::promiseFor($response);
        return $response->then(function (?\YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $value) use($request, $options) {
            $this->invokeStats($request, $options, $value);
            if ($this->onFulfilled) {
                ($this->onFulfilled)($value);
            }
            if ($value !== null && isset($options['sink'])) {
>>>>>>> update
                $contents = (string) $value->getBody();
                $sink = $options['sink'];
                if (\is_resource($sink)) {
                    \fwrite($sink, $contents);
                } elseif (\is_string($sink)) {
                    \file_put_contents($sink, $contents);
                } elseif ($sink instanceof \YoastSEO_Vendor\Psr\Http\Message\StreamInterface) {
                    $sink->write($contents);
                }
            }
            return $value;
        }, function ($reason) use($request, $options) {
            $this->invokeStats($request, $options, null, $reason);
            if ($this->onRejected) {
<<<<<<< HEAD
                \call_user_func($this->onRejected, $reason);
            }
            return \YoastSEO_Vendor\GuzzleHttp\Promise\rejection_for($reason);
=======
                ($this->onRejected)($reason);
            }
            return \YoastSEO_Vendor\GuzzleHttp\Promise\Create::rejectionFor($reason);
>>>>>>> update
        });
    }
    /**
     * Adds one or more variadic requests, exceptions, callables, or promises
     * to the queue.
<<<<<<< HEAD
     */
    public function append()
    {
        foreach (\func_get_args() as $value) {
            if ($value instanceof \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface || $value instanceof \Exception || $value instanceof \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface || \is_callable($value)) {
                $this->queue[] = $value;
            } else {
                throw new \InvalidArgumentException('Expected a response or ' . 'exception. Found ' . \YoastSEO_Vendor\GuzzleHttp\describe_type($value));
=======
     *
     * @param mixed ...$values
     */
    public function append(...$values) : void
    {
        foreach ($values as $value) {
            if ($value instanceof \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface || $value instanceof \Throwable || $value instanceof \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface || \is_callable($value)) {
                $this->queue[] = $value;
            } else {
                throw new \TypeError('Expected a Response, Promise, Throwable or callable. Found ' . \YoastSEO_Vendor\GuzzleHttp\Utils::describeType($value));
>>>>>>> update
            }
        }
    }
    /**
     * Get the last received request.
<<<<<<< HEAD
     *
     * @return RequestInterface
     */
    public function getLastRequest()
=======
     */
    public function getLastRequest() : ?\YoastSEO_Vendor\Psr\Http\Message\RequestInterface
>>>>>>> update
    {
        return $this->lastRequest;
    }
    /**
     * Get the last received request options.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getLastOptions()
=======
     */
    public function getLastOptions() : array
>>>>>>> update
    {
        return $this->lastOptions;
    }
    /**
     * Returns the number of remaining items in the queue.
<<<<<<< HEAD
     *
     * @return int
     */
    public function count()
    {
        return \count($this->queue);
    }
    public function reset()
    {
        $this->queue = [];
    }
    private function invokeStats(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options, \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $response = null, $reason = null)
    {
        if (isset($options['on_stats'])) {
            $transferTime = isset($options['transfer_time']) ? $options['transfer_time'] : 0;
            $stats = new \YoastSEO_Vendor\GuzzleHttp\TransferStats($request, $response, $transferTime, $reason);
            \call_user_func($options['on_stats'], $stats);
=======
     */
    public function count() : int
    {
        return \count($this->queue);
    }
    public function reset() : void
    {
        $this->queue = [];
    }
    /**
     * @param mixed $reason Promise or reason.
     */
    private function invokeStats(\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options, \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $response = null, $reason = null) : void
    {
        if (isset($options['on_stats'])) {
            $transferTime = $options['transfer_time'] ?? 0;
            $stats = new \YoastSEO_Vendor\GuzzleHttp\TransferStats($request, $response, $transferTime, $reason);
            $options['on_stats']($stats);
>>>>>>> update
        }
    }
}
