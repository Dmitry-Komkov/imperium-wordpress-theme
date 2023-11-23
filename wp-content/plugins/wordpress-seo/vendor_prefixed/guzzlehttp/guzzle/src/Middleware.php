<?php

namespace YoastSEO_Vendor\GuzzleHttp;

use YoastSEO_Vendor\GuzzleHttp\Cookie\CookieJarInterface;
use YoastSEO_Vendor\GuzzleHttp\Exception\RequestException;
<<<<<<< HEAD
use YoastSEO_Vendor\GuzzleHttp\Promise\RejectedPromise;
use YoastSEO_Vendor\GuzzleHttp\Psr7;
=======
use YoastSEO_Vendor\GuzzleHttp\Promise as P;
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
>>>>>>> update
use YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
use YoastSEO_Vendor\Psr\Log\LoggerInterface;
/**
 * Functions used to create and wrap handlers with handler middleware.
 */
final class Middleware
{
    /**
     * Middleware that adds cookies to requests.
     *
     * The options array must be set to a CookieJarInterface in order to use
     * cookies. This is typically handled for you by a client.
     *
     * @return callable Returns a function that accepts the next handler.
     */
<<<<<<< HEAD
    public static function cookies()
    {
        return function (callable $handler) {
            return function ($request, array $options) use($handler) {
=======
    public static function cookies() : callable
    {
        return static function (callable $handler) : callable {
            return static function ($request, array $options) use($handler) {
>>>>>>> update
                if (empty($options['cookies'])) {
                    return $handler($request, $options);
                } elseif (!$options['cookies'] instanceof \YoastSEO_Vendor\GuzzleHttp\Cookie\CookieJarInterface) {
                    throw new \InvalidArgumentException('cookies must be an instance of YoastSEO_Vendor\\GuzzleHttp\\Cookie\\CookieJarInterface');
                }
                $cookieJar = $options['cookies'];
                $request = $cookieJar->withCookieHeader($request);
<<<<<<< HEAD
                return $handler($request, $options)->then(function ($response) use($cookieJar, $request) {
=======
                return $handler($request, $options)->then(static function (\YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $response) use($cookieJar, $request) : ResponseInterface {
>>>>>>> update
                    $cookieJar->extractCookies($request, $response);
                    return $response;
                });
            };
        };
    }
    /**
     * Middleware that throws exceptions for 4xx or 5xx responses when the
<<<<<<< HEAD
     * "http_error" request option is set to true.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    public static function httpErrors()
    {
        return function (callable $handler) {
            return function ($request, array $options) use($handler) {
                if (empty($options['http_errors'])) {
                    return $handler($request, $options);
                }
                return $handler($request, $options)->then(function (\YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $response) use($request) {
=======
     * "http_errors" request option is set to true.
     *
     * @param BodySummarizerInterface|null $bodySummarizer The body summarizer to use in exception messages.
     *
     * @return callable(callable): callable Returns a function that accepts the next handler.
     */
    public static function httpErrors(\YoastSEO_Vendor\GuzzleHttp\BodySummarizerInterface $bodySummarizer = null) : callable
    {
        return static function (callable $handler) use($bodySummarizer) : callable {
            return static function ($request, array $options) use($handler, $bodySummarizer) {
                if (empty($options['http_errors'])) {
                    return $handler($request, $options);
                }
                return $handler($request, $options)->then(static function (\YoastSEO_Vendor\Psr\Http\Message\ResponseInterface $response) use($request, $bodySummarizer) {
>>>>>>> update
                    $code = $response->getStatusCode();
                    if ($code < 400) {
                        return $response;
                    }
<<<<<<< HEAD
                    throw \YoastSEO_Vendor\GuzzleHttp\Exception\RequestException::create($request, $response);
=======
                    throw \YoastSEO_Vendor\GuzzleHttp\Exception\RequestException::create($request, $response, null, [], $bodySummarizer);
>>>>>>> update
                });
            };
        };
    }
    /**
     * Middleware that pushes history data to an ArrayAccess container.
     *
<<<<<<< HEAD
     * @param array|\ArrayAccess $container Container to hold the history (by reference).
     *
     * @return callable Returns a function that accepts the next handler.
     * @throws \InvalidArgumentException if container is not an array or ArrayAccess.
     */
    public static function history(&$container)
=======
     * @param array|\ArrayAccess<int, array> $container Container to hold the history (by reference).
     *
     * @return callable(callable): callable Returns a function that accepts the next handler.
     *
     * @throws \InvalidArgumentException if container is not an array or ArrayAccess.
     */
    public static function history(&$container) : callable
>>>>>>> update
    {
        if (!\is_array($container) && !$container instanceof \ArrayAccess) {
            throw new \InvalidArgumentException('history container must be an array or object implementing ArrayAccess');
        }
<<<<<<< HEAD
        return function (callable $handler) use(&$container) {
            return function ($request, array $options) use($handler, &$container) {
                return $handler($request, $options)->then(function ($value) use($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => $value, 'error' => null, 'options' => $options];
                    return $value;
                }, function ($reason) use($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => null, 'error' => $reason, 'options' => $options];
                    return \YoastSEO_Vendor\GuzzleHttp\Promise\rejection_for($reason);
=======
        return static function (callable $handler) use(&$container) : callable {
            return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($handler, &$container) {
                return $handler($request, $options)->then(static function ($value) use($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => $value, 'error' => null, 'options' => $options];
                    return $value;
                }, static function ($reason) use($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => null, 'error' => $reason, 'options' => $options];
                    return \YoastSEO_Vendor\GuzzleHttp\Promise\Create::rejectionFor($reason);
>>>>>>> update
                });
            };
        };
    }
    /**
     * Middleware that invokes a callback before and after sending a request.
     *
     * The provided listener cannot modify or alter the response. It simply
     * "taps" into the chain to be notified before returning the promise. The
     * before listener accepts a request and options array, and the after
     * listener accepts a request, options array, and response promise.
     *
     * @param callable $before Function to invoke before forwarding the request.
     * @param callable $after  Function invoked after forwarding.
     *
     * @return callable Returns a function that accepts the next handler.
     */
<<<<<<< HEAD
    public static function tap(callable $before = null, callable $after = null)
    {
        return function (callable $handler) use($before, $after) {
            return function ($request, array $options) use($handler, $before, $after) {
=======
    public static function tap(callable $before = null, callable $after = null) : callable
    {
        return static function (callable $handler) use($before, $after) : callable {
            return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($handler, $before, $after) {
>>>>>>> update
                if ($before) {
                    $before($request, $options);
                }
                $response = $handler($request, $options);
                if ($after) {
                    $after($request, $options, $response);
                }
                return $response;
            };
        };
    }
    /**
     * Middleware that handles request redirects.
     *
     * @return callable Returns a function that accepts the next handler.
     */
<<<<<<< HEAD
    public static function redirect()
    {
        return function (callable $handler) {
=======
    public static function redirect() : callable
    {
        return static function (callable $handler) : RedirectMiddleware {
>>>>>>> update
            return new \YoastSEO_Vendor\GuzzleHttp\RedirectMiddleware($handler);
        };
    }
    /**
     * Middleware that retries requests based on the boolean result of
     * invoking the provided "decider" function.
     *
     * If no delay function is provided, a simple implementation of exponential
     * backoff will be utilized.
     *
     * @param callable $decider Function that accepts the number of retries,
     *                          a request, [response], and [exception] and
     *                          returns true if the request is to be retried.
     * @param callable $delay   Function that accepts the number of retries and
     *                          returns the number of milliseconds to delay.
     *
     * @return callable Returns a function that accepts the next handler.
     */
<<<<<<< HEAD
    public static function retry(callable $decider, callable $delay = null)
    {
        return function (callable $handler) use($decider, $delay) {
=======
    public static function retry(callable $decider, callable $delay = null) : callable
    {
        return static function (callable $handler) use($decider, $delay) : RetryMiddleware {
>>>>>>> update
            return new \YoastSEO_Vendor\GuzzleHttp\RetryMiddleware($decider, $handler, $delay);
        };
    }
    /**
     * Middleware that logs requests, responses, and errors using a message
     * formatter.
     *
<<<<<<< HEAD
     * @param LoggerInterface  $logger Logs messages.
     * @param MessageFormatter $formatter Formatter used to create message strings.
     * @param string           $logLevel Level at which to log requests.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    public static function log(\YoastSEO_Vendor\Psr\Log\LoggerInterface $logger, \YoastSEO_Vendor\GuzzleHttp\MessageFormatter $formatter, $logLevel = 'info')
    {
        return function (callable $handler) use($logger, $formatter, $logLevel) {
            return function ($request, array $options) use($handler, $logger, $formatter, $logLevel) {
                return $handler($request, $options)->then(function ($response) use($logger, $request, $formatter, $logLevel) {
                    $message = $formatter->format($request, $response);
                    $logger->log($logLevel, $message);
                    return $response;
                }, function ($reason) use($logger, $request, $formatter) {
                    $response = $reason instanceof \YoastSEO_Vendor\GuzzleHttp\Exception\RequestException ? $reason->getResponse() : null;
                    $message = $formatter->format($request, $response, $reason);
                    $logger->notice($message);
                    return \YoastSEO_Vendor\GuzzleHttp\Promise\rejection_for($reason);
=======
     * @phpstan-param \Psr\Log\LogLevel::* $logLevel  Level at which to log requests.
     *
     * @param LoggerInterface                            $logger    Logs messages.
     * @param MessageFormatterInterface|MessageFormatter $formatter Formatter used to create message strings.
     * @param string                                     $logLevel  Level at which to log requests.
     *
     * @return callable Returns a function that accepts the next handler.
     */
    public static function log(\YoastSEO_Vendor\Psr\Log\LoggerInterface $logger, $formatter, string $logLevel = 'info') : callable
    {
        // To be compatible with Guzzle 7.1.x we need to allow users to pass a MessageFormatter
        if (!$formatter instanceof \YoastSEO_Vendor\GuzzleHttp\MessageFormatter && !$formatter instanceof \YoastSEO_Vendor\GuzzleHttp\MessageFormatterInterface) {
            throw new \LogicException(\sprintf('Argument 2 to %s::log() must be of type %s', self::class, \YoastSEO_Vendor\GuzzleHttp\MessageFormatterInterface::class));
        }
        return static function (callable $handler) use($logger, $formatter, $logLevel) : callable {
            return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options = []) use($handler, $logger, $formatter, $logLevel) {
                return $handler($request, $options)->then(static function ($response) use($logger, $request, $formatter, $logLevel) : ResponseInterface {
                    $message = $formatter->format($request, $response);
                    $logger->log($logLevel, $message);
                    return $response;
                }, static function ($reason) use($logger, $request, $formatter) : PromiseInterface {
                    $response = $reason instanceof \YoastSEO_Vendor\GuzzleHttp\Exception\RequestException ? $reason->getResponse() : null;
                    $message = $formatter->format($request, $response, \YoastSEO_Vendor\GuzzleHttp\Promise\Create::exceptionFor($reason));
                    $logger->error($message);
                    return \YoastSEO_Vendor\GuzzleHttp\Promise\Create::rejectionFor($reason);
>>>>>>> update
                });
            };
        };
    }
    /**
     * This middleware adds a default content-type if possible, a default
     * content-length or transfer-encoding header, and the expect header.
<<<<<<< HEAD
     *
     * @return callable
     */
    public static function prepareBody()
    {
        return function (callable $handler) {
=======
     */
    public static function prepareBody() : callable
    {
        return static function (callable $handler) : PrepareBodyMiddleware {
>>>>>>> update
            return new \YoastSEO_Vendor\GuzzleHttp\PrepareBodyMiddleware($handler);
        };
    }
    /**
     * Middleware that applies a map function to the request before passing to
     * the next handler.
     *
     * @param callable $fn Function that accepts a RequestInterface and returns
     *                     a RequestInterface.
<<<<<<< HEAD
     * @return callable
     */
    public static function mapRequest(callable $fn)
    {
        return function (callable $handler) use($fn) {
            return function ($request, array $options) use($handler, $fn) {
=======
     */
    public static function mapRequest(callable $fn) : callable
    {
        return static function (callable $handler) use($fn) : callable {
            return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($handler, $fn) {
>>>>>>> update
                return $handler($fn($request), $options);
            };
        };
    }
    /**
     * Middleware that applies a map function to the resolved promise's
     * response.
     *
     * @param callable $fn Function that accepts a ResponseInterface and
     *                     returns a ResponseInterface.
<<<<<<< HEAD
     * @return callable
     */
    public static function mapResponse(callable $fn)
    {
        return function (callable $handler) use($fn) {
            return function ($request, array $options) use($handler, $fn) {
=======
     */
    public static function mapResponse(callable $fn) : callable
    {
        return static function (callable $handler) use($fn) : callable {
            return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($handler, $fn) {
>>>>>>> update
                return $handler($request, $options)->then($fn);
            };
        };
    }
}
