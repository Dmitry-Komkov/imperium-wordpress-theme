<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

/**
 * Represents a promise that iterates over many promises and invokes
 * side-effect functions in the process.
<<<<<<< HEAD
=======
 *
 * @final
>>>>>>> update
 */
class EachPromise implements \YoastSEO_Vendor\GuzzleHttp\Promise\PromisorInterface
{
    private $pending = [];
    private $nextPendingIndex = 0;
    /** @var \Iterator|null */
    private $iterable;
    /** @var callable|int|null */
    private $concurrency;
    /** @var callable|null */
    private $onFulfilled;
    /** @var callable|null */
    private $onRejected;
    /** @var Promise|null */
    private $aggregate;
    /** @var bool|null */
    private $mutex;
    /**
     * Configuration hash can include the following key value pairs:
     *
     * - fulfilled: (callable) Invoked when a promise fulfills. The function
     *   is invoked with three arguments: the fulfillment value, the index
     *   position from the iterable list of the promise, and the aggregate
     *   promise that manages all of the promises. The aggregate promise may
     *   be resolved from within the callback to short-circuit the promise.
     * - rejected: (callable) Invoked when a promise is rejected. The
     *   function is invoked with three arguments: the rejection reason, the
     *   index position from the iterable list of the promise, and the
     *   aggregate promise that manages all of the promises. The aggregate
     *   promise may be resolved from within the callback to short-circuit
     *   the promise.
     * - concurrency: (integer) Pass this configuration option to limit the
     *   allowed number of outstanding concurrently executing promises,
     *   creating a capped pool of promises. There is no limit by default.
     *
     * @param mixed $iterable Promises or values to iterate.
     * @param array $config   Configuration options
     */
    public function __construct($iterable, array $config = [])
    {
        $this->iterable = \YoastSEO_Vendor\GuzzleHttp\Promise\Create::iterFor($iterable);
        if (isset($config['concurrency'])) {
            $this->concurrency = $config['concurrency'];
        }
        if (isset($config['fulfilled'])) {
            $this->onFulfilled = $config['fulfilled'];
        }
        if (isset($config['rejected'])) {
            $this->onRejected = $config['rejected'];
        }
    }
    /** @psalm-suppress InvalidNullableReturnType */
<<<<<<< HEAD
    public function promise()
=======
    public function promise() : \YoastSEO_Vendor\GuzzleHttp\Promise\PromiseInterface
>>>>>>> update
    {
        if ($this->aggregate) {
            return $this->aggregate;
        }
        try {
            $this->createPromise();
            /** @psalm-assert Promise $this->aggregate */
            $this->iterable->rewind();
            $this->refillPending();
        } catch (\Throwable $e) {
<<<<<<< HEAD
            /**
             * @psalm-suppress NullReference
             * @phpstan-ignore-next-line
             */
            $this->aggregate->reject($e);
        } catch (\Exception $e) {
            /**
             * @psalm-suppress NullReference
             * @phpstan-ignore-next-line
             */
=======
>>>>>>> update
            $this->aggregate->reject($e);
        }
        /**
         * @psalm-suppress NullableReturnStatement
<<<<<<< HEAD
         * @phpstan-ignore-next-line
         */
        return $this->aggregate;
    }
    private function createPromise()
    {
        $this->mutex = \false;
        $this->aggregate = new \YoastSEO_Vendor\GuzzleHttp\Promise\Promise(function () {
=======
         */
        return $this->aggregate;
    }
    private function createPromise() : void
    {
        $this->mutex = \false;
        $this->aggregate = new \YoastSEO_Vendor\GuzzleHttp\Promise\Promise(function () : void {
>>>>>>> update
            if ($this->checkIfFinished()) {
                return;
            }
            \reset($this->pending);
            // Consume a potentially fluctuating list of promises while
            // ensuring that indexes are maintained (precluding array_shift).
            while ($promise = \current($this->pending)) {
                \next($this->pending);
                $promise->wait();
                if (\YoastSEO_Vendor\GuzzleHttp\Promise\Is::settled($this->aggregate)) {
                    return;
                }
            }
        });
        // Clear the references when the promise is resolved.
<<<<<<< HEAD
        $clearFn = function () {
=======
        $clearFn = function () : void {
>>>>>>> update
            $this->iterable = $this->concurrency = $this->pending = null;
            $this->onFulfilled = $this->onRejected = null;
            $this->nextPendingIndex = 0;
        };
        $this->aggregate->then($clearFn, $clearFn);
    }
<<<<<<< HEAD
    private function refillPending()
=======
    private function refillPending() : void
>>>>>>> update
    {
        if (!$this->concurrency) {
            // Add all pending promises.
            while ($this->addPending() && $this->advanceIterator()) {
            }
            return;
        }
        // Add only up to N pending promises.
        $concurrency = \is_callable($this->concurrency) ? \call_user_func($this->concurrency, \count($this->pending)) : $this->concurrency;
        $concurrency = \max($concurrency - \count($this->pending), 0);
        // Concurrency may be set to 0 to disallow new promises.
        if (!$concurrency) {
            return;
        }
        // Add the first pending promise.
        $this->addPending();
        // Note this is special handling for concurrency=1 so that we do
        // not advance the iterator after adding the first promise. This
        // helps work around issues with generators that might not have the
        // next value to yield until promise callbacks are called.
        while (--$concurrency && $this->advanceIterator() && $this->addPending()) {
        }
    }
<<<<<<< HEAD
    private function addPending()
=======
    private function addPending() : bool
>>>>>>> update
    {
        if (!$this->iterable || !$this->iterable->valid()) {
            return \false;
        }
        $promise = \YoastSEO_Vendor\GuzzleHttp\Promise\Create::promiseFor($this->iterable->current());
        $key = $this->iterable->key();
        // Iterable keys may not be unique, so we use a counter to
        // guarantee uniqueness
        $idx = $this->nextPendingIndex++;
<<<<<<< HEAD
        $this->pending[$idx] = $promise->then(function ($value) use($idx, $key) {
=======
        $this->pending[$idx] = $promise->then(function ($value) use($idx, $key) : void {
>>>>>>> update
            if ($this->onFulfilled) {
                \call_user_func($this->onFulfilled, $value, $key, $this->aggregate);
            }
            $this->step($idx);
<<<<<<< HEAD
        }, function ($reason) use($idx, $key) {
=======
        }, function ($reason) use($idx, $key) : void {
>>>>>>> update
            if ($this->onRejected) {
                \call_user_func($this->onRejected, $reason, $key, $this->aggregate);
            }
            $this->step($idx);
        });
        return \true;
    }
<<<<<<< HEAD
    private function advanceIterator()
=======
    private function advanceIterator() : bool
>>>>>>> update
    {
        // Place a lock on the iterator so that we ensure to not recurse,
        // preventing fatal generator errors.
        if ($this->mutex) {
            return \false;
        }
        $this->mutex = \true;
        try {
            $this->iterable->next();
            $this->mutex = \false;
            return \true;
        } catch (\Throwable $e) {
            $this->aggregate->reject($e);
            $this->mutex = \false;
            return \false;
<<<<<<< HEAD
        } catch (\Exception $e) {
            $this->aggregate->reject($e);
            $this->mutex = \false;
            return \false;
        }
    }
    private function step($idx)
=======
        }
    }
    private function step(int $idx) : void
>>>>>>> update
    {
        // If the promise was already resolved, then ignore this step.
        if (\YoastSEO_Vendor\GuzzleHttp\Promise\Is::settled($this->aggregate)) {
            return;
        }
        unset($this->pending[$idx]);
        // Only refill pending promises if we are not locked, preventing the
        // EachPromise to recursively invoke the provided iterator, which
        // cause a fatal error: "Cannot resume an already running generator"
        if ($this->advanceIterator() && !$this->checkIfFinished()) {
            // Add more pending promises if possible.
            $this->refillPending();
        }
    }
<<<<<<< HEAD
    private function checkIfFinished()
=======
    private function checkIfFinished() : bool
>>>>>>> update
    {
        if (!$this->pending && !$this->iterable->valid()) {
            // Resolve the promise if there's nothing left to do.
            $this->aggregate->resolve(null);
            return \true;
        }
        return \false;
    }
}
