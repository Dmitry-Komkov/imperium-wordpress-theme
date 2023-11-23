<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

/**
 * A promise that has been fulfilled.
 *
 * Thenning off of this promise will invoke the onFulfilled callback
 * immediately and ignore other callbacks.
<<<<<<< HEAD
=======
 *
 * @final
>>>>>>> update
 */
class FulfilledPromise implements \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
{
    private $value;
<<<<<<< HEAD
=======
    /**
     * @param mixed $value
     */
>>>>>>> update
    public function __construct($value)
    {
        if (\is_object($value) && \method_exists($value, 'then')) {
            throw new \InvalidArgumentException('You cannot create a FulfilledPromise with a promise.');
        }
        $this->value = $value;
    }
<<<<<<< HEAD
    public function then(callable $onFulfilled = null, callable $onRejected = null)
=======
    public function then(callable $onFulfilled = null, callable $onRejected = null) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
>>>>>>> update
    {
        // Return itself if there is no onFulfilled function.
        if (!$onFulfilled) {
            return $this;
        }
        $queue = \YoastSEO_Vendor\GuzzleHttp\Promise\Utils::queue();
        $p = new \YoastSEO_Vendor\GuzzleHttp\Promise\Promise([$queue, 'run']);
        $value = $this->value;
<<<<<<< HEAD
        $queue->add(static function () use($p, $value, $onFulfilled) {
=======
        $queue->add(static function () use($p, $value, $onFulfilled) : void {
>>>>>>> update
            if (\YoastSEO_Vendor\GuzzleHttp\Promise\Is::pending($p)) {
                try {
                    $p->resolve($onFulfilled($value));
                } catch (\Throwable $e) {
                    $p->reject($e);
<<<<<<< HEAD
                } catch (\Exception $e) {
                    $p->reject($e);
=======
>>>>>>> update
                }
            }
        });
        return $p;
    }
<<<<<<< HEAD
    public function otherwise(callable $onRejected)
    {
        return $this->then(null, $onRejected);
    }
    public function wait($unwrap = \true, $defaultDelivery = null)
    {
        return $unwrap ? $this->value : null;
    }
    public function getState()
    {
        return self::FULFILLED;
    }
    public function resolve($value)
    {
        if ($value !== $this->value) {
            throw new \LogicException("Cannot resolve a fulfilled promise");
        }
    }
    public function reject($reason)
    {
        throw new \LogicException("Cannot reject a fulfilled promise");
    }
    public function cancel()
=======
    public function otherwise(callable $onRejected) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
    {
        return $this->then(null, $onRejected);
    }
    public function wait(bool $unwrap = \true)
    {
        return $unwrap ? $this->value : null;
    }
    public function getState() : string
    {
        return self::FULFILLED;
    }
    public function resolve($value) : void
    {
        if ($value !== $this->value) {
            throw new \LogicException('Cannot resolve a fulfilled promise');
        }
    }
    public function reject($reason) : void
    {
        throw new \LogicException('Cannot reject a fulfilled promise');
    }
    public function cancel() : void
>>>>>>> update
    {
        // pass
    }
}
