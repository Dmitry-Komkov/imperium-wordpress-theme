<?php

namespace YoastSEO_Vendor\GuzzleHttp\Handler;

<<<<<<< HEAD
=======
use YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface;
>>>>>>> update
use YoastSEO_Vendor\GuzzleHttp\RequestOptions;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
/**
 * Provides basic proxies for handlers.
<<<<<<< HEAD
=======
 *
 * @final
>>>>>>> update
 */
class Proxy
{
    /**
     * Sends synchronous requests to a specific handler while sending all other
     * requests to another handler.
     *
<<<<<<< HEAD
     * @param callable $default Handler used for normal responses
     * @param callable $sync    Handler used for synchronous responses.
     *
     * @return callable Returns the composed handler.
     */
    public static function wrapSync(callable $default, callable $sync)
    {
        return function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($default, $sync) {
=======
     * @param callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface $default Handler used for normal responses
     * @param callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface $sync    Handler used for synchronous responses.
     *
     * @return callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface Returns the composed handler.
     */
    public static function wrapSync(callable $default, callable $sync) : callable
    {
        return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($default, $sync) : PromiseInterface {
>>>>>>> update
            return empty($options[\YoastSEO_Vendor\GuzzleHttp\RequestOptions::SYNCHRONOUS]) ? $default($request, $options) : $sync($request, $options);
        };
    }
    /**
     * Sends streaming requests to a streaming compatible handler while sending
     * all other requests to a default handler.
     *
     * This, for example, could be useful for taking advantage of the
     * performance benefits of curl while still supporting true streaming
     * through the StreamHandler.
     *
<<<<<<< HEAD
     * @param callable $default   Handler used for non-streaming responses
     * @param callable $streaming Handler used for streaming responses
     *
     * @return callable Returns the composed handler.
     */
    public static function wrapStreaming(callable $default, callable $streaming)
    {
        return function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($default, $streaming) {
=======
     * @param callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface $default   Handler used for non-streaming responses
     * @param callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface $streaming Handler used for streaming responses
     *
     * @return callable(\Psr\Http\Message\RequestInterface, array): \GuzzleHttp\Promise\PromiseInterface Returns the composed handler.
     */
    public static function wrapStreaming(callable $default, callable $streaming) : callable
    {
        return static function (\YoastSEO_Vendor\Psr\Http\Message\RequestInterface $request, array $options) use($default, $streaming) : PromiseInterface {
>>>>>>> update
            return empty($options['stream']) ? $default($request, $options) : $streaming($request, $options);
        };
    }
}
