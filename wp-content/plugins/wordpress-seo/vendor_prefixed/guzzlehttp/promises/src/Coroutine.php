<?php

<<<<<<< HEAD
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

use Exception;
=======
declare (strict_types=1);
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

>>>>>>> update
use Generator;
use Throwable;
/**
 * Creates a promise that is resolved using a generator that yields values or
 * promises (somewhat similar to C#'s async keyword).
 *
 * When called, the Coroutine::of method will start an instance of the generator
 * and returns a promise that is fulfilled with its final yielded value.
 *
 * Control is returned back to the generator when the yielded promise settles.
 * This can lead to less verbose code when doing lots of sequential async calls
 * with minimal processing in between.
 *
 *     use GuzzleHttp\Promise;
 *
 *     function createPromise($value) {
 *         return new Promise\FulfilledPromise($value);
 *     }
 *
 *     $promise = Promise\Coroutine::of(function () {
 *         $value = (yield createPromise('a'));
 *         try {
 *             $value = (yield createPromise($value . 'b'));
<<<<<<< HEAD
 *         } catch (\Exception $e) {
=======
 *         } catch (\Throwable $e) {
>>>>>>> update
 *             // The promise was rejected.
 *         }
 *         yield $value . 'c';
 *     });
 *
 *     // Outputs "abc"
 *     $promise->then(function ($v) { echo $v; });
 *
 * @param callable $generatorFn Generator function to wrap into a promise.
 *
 * @return Promise
 *
<<<<<<< HEAD
 * @link https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
=======
 * @see https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
>>>>>>> update
 */
final class Coroutine implements \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
{
    /**
     * @var PromiseInterface|null
     */
    private $currentPromise;
    /**
     * @var Generator
     */
    private $generator;
    /**
     * @var Promise
     */
    private $result;
    public function __construct(callable $generatorFn)
    {
        $this->generator = $generatorFn();
<<<<<<< HEAD
        $this->result = new \YoastSEO_Vendor\GuzzleHttp\Promise\Promise(function () {
=======
        $this->result = new \YoastSEO_Vendor\GuzzleHttp\Promise\Promise(function () : void {
>>>>>>> update
            while (isset($this->currentPromise)) {
                $this->currentPromise->wait();
            }
        });
        try {
            $this->nextCoroutine($this->generator->current());
<<<<<<< HEAD
        } catch (\Exception $exception) {
            $this->result->reject($exception);
=======
>>>>>>> update
        } catch (\Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }
    /**
     * Create a new coroutine.
<<<<<<< HEAD
     *
     * @return self
     */
    public static function of(callable $generatorFn)
    {
        return new self($generatorFn);
    }
    public function then(callable $onFulfilled = null, callable $onRejected = null)
    {
        return $this->result->then($onFulfilled, $onRejected);
    }
    public function otherwise(callable $onRejected)
    {
        return $this->result->otherwise($onRejected);
    }
    public function wait($unwrap = \true)
    {
        return $this->result->wait($unwrap);
    }
    public function getState()
    {
        return $this->result->getState();
    }
    public function resolve($value)
    {
        $this->result->resolve($value);
    }
    public function reject($reason)
    {
        $this->result->reject($reason);
    }
    public function cancel()
=======
     */
    public static function of(callable $generatorFn) : self
    {
        return new self($generatorFn);
    }
    public function then(callable $onFulfilled = null, callable $onRejected = null) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
    {
        return $this->result->then($onFulfilled, $onRejected);
    }
    public function otherwise(callable $onRejected) : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
    {
        return $this->result->otherwise($onRejected);
    }
    public function wait(bool $unwrap = \true)
    {
        return $this->result->wait($unwrap);
    }
    public function getState() : string
    {
        return $this->result->getState();
    }
    public function resolve($value) : void
    {
        $this->result->resolve($value);
    }
    public function reject($reason) : void
    {
        $this->result->reject($reason);
    }
    public function cancel() : void
>>>>>>> update
    {
        $this->currentPromise->cancel();
        $this->result->cancel();
    }
<<<<<<< HEAD
    private function nextCoroutine($yielded)
=======
    private function nextCoroutine($yielded) : void
>>>>>>> update
    {
        $this->currentPromise = \YoastSEO_Vendor\GuzzleHttp\Promise\Create::promiseFor($yielded)->then([$this, '_handleSuccess'], [$this, '_handleFailure']);
    }
    /**
     * @internal
     */
<<<<<<< HEAD
    public function _handleSuccess($value)
=======
    public function _handleSuccess($value) : void
>>>>>>> update
    {
        unset($this->currentPromise);
        try {
            $next = $this->generator->send($value);
            if ($this->generator->valid()) {
                $this->nextCoroutine($next);
            } else {
                $this->result->resolve($value);
            }
<<<<<<< HEAD
        } catch (\Exception $exception) {
            $this->result->reject($exception);
=======
>>>>>>> update
        } catch (\Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }
    /**
     * @internal
     */
<<<<<<< HEAD
    public function _handleFailure($reason)
=======
    public function _handleFailure($reason) : void
>>>>>>> update
    {
        unset($this->currentPromise);
        try {
            $nextYield = $this->generator->throw(\YoastSEO_Vendor\GuzzleHttp\Promise\Create::exceptionFor($reason));
            // The throw was caught, so keep iterating on the coroutine
            $this->nextCoroutine($nextYield);
<<<<<<< HEAD
        } catch (\Exception $exception) {
            $this->result->reject($exception);
=======
>>>>>>> update
        } catch (\Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }
}
