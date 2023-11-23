<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

interface TaskQueueInterface
{
    /**
     * Returns true if the queue is empty.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isEmpty();
=======
     */
    public function isEmpty() : bool;
>>>>>>> update
    /**
     * Adds a task to the queue that will be executed the next time run is
     * called.
     */
<<<<<<< HEAD
    public function add(callable $task);
    /**
     * Execute all of the pending task in the queue.
     */
    public function run();
=======
    public function add(callable $task) : void;
    /**
     * Execute all of the pending task in the queue.
     */
    public function run() : void;
>>>>>>> update
}
