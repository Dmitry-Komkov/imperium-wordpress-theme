<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

final class Is
{
    /**
     * Returns true if a promise is pending.
<<<<<<< HEAD
     *
     * @return bool
     */
    public static function pending(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise)
=======
     */
    public static function pending(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise) : bool
>>>>>>> update
    {
        return $promise->getState() === \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface::PENDING;
    }
    /**
     * Returns true if a promise is fulfilled or rejected.
<<<<<<< HEAD
     *
     * @return bool
     */
    public static function settled(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise)
=======
     */
    public static function settled(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise) : bool
>>>>>>> update
    {
        return $promise->getState() !== \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface::PENDING;
    }
    /**
     * Returns true if a promise is fulfilled.
<<<<<<< HEAD
     *
     * @return bool
     */
    public static function fulfilled(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise)
=======
     */
    public static function fulfilled(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise) : bool
>>>>>>> update
    {
        return $promise->getState() === \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface::FULFILLED;
    }
    /**
     * Returns true if a promise is rejected.
<<<<<<< HEAD
     *
     * @return bool
     */
    public static function rejected(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise)
=======
     */
    public static function rejected(\YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface $promise) : bool
>>>>>>> update
    {
        return $promise->getState() === \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface::REJECTED;
    }
}
