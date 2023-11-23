<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
<<<<<<< HEAD
 *
 * @final
 */
class LazyOpenStream implements \YoastSEO_Vendor\Psr\Http\Message\StreamInterface
{
    use StreamDecoratorTrait;
    /** @var string File to open */
=======
 */
final class LazyOpenStream implements \YoastSEO_Vendor\Psr\Http\Message\StreamInterface
{
    use StreamDecoratorTrait;
    /** @var string */
>>>>>>> update
    private $filename;
    /** @var string */
    private $mode;
    /**
<<<<<<< HEAD
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
    }
    /**
     * Creates the underlying stream lazily when required.
     *
     * @return StreamInterface
     */
    protected function createStream()
=======
     * @var StreamInterface
     */
    private $stream;
    /**
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct(string $filename, string $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
        // unsetting the property forces the first access to go through
        // __get().
        unset($this->stream);
    }
    /**
     * Creates the underlying stream lazily when required.
     */
    protected function createStream() : \YoastSEO_Vendor\Psr\Http\Message\StreamInterface
>>>>>>> update
    {
        return \YoastSEO_Vendor\GuzzleHttp\Psr7\Utils::streamFor(\YoastSEO_Vendor\GuzzleHttp\Psr7\Utils::tryFopen($this->filename, $this->mode));
    }
}
