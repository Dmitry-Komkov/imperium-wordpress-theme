<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Promise;

/**
 * Exception thrown when too many errors occur in the some() or any() methods.
 */
class AggregateException extends \YoastSEO_Vendor\GuzzleHttp\Promise\RejectionException
{
<<<<<<< HEAD
    public function __construct($msg, array $reasons)
=======
    public function __construct(string $msg, array $reasons)
>>>>>>> update
    {
        parent::__construct($reasons, \sprintf('%s; %d rejected promises', $msg, \count($reasons)));
    }
}
