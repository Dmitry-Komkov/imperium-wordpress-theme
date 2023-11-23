<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
/**
 * Stream decorator trait
 *
<<<<<<< HEAD
 * @property StreamInterface stream
=======
 * @property StreamInterface $stream
>>>>>>> update
 */
trait StreamDecoratorTrait
{
    /**
     * @param StreamInterface $stream Stream to decorate
     */
    public function __construct(\YoastSEO_Vendor\Psr\Http\Message\StreamInterface $stream)
    {
        $this->stream = $stream;
    }
    /**
     * Magic method used to create a new stream if streams are not added in
     * the constructor of a decorator (e.g., LazyOpenStream).
     *
<<<<<<< HEAD
     * @param string $name Name of the property (allows "stream" only).
     *
     * @return StreamInterface
     */
    public function __get($name)
    {
        if ($name == 'stream') {
=======
     * @return StreamInterface
     */
    public function __get(string $name)
    {
        if ($name === 'stream') {
>>>>>>> update
            $this->stream = $this->createStream();
            return $this->stream;
        }
        throw new \UnexpectedValueException("{$name} not found on class");
    }
<<<<<<< HEAD
    public function __toString()
=======
    public function __toString() : string
>>>>>>> update
    {
        try {
            if ($this->isSeekable()) {
                $this->seek(0);
            }
            return $this->getContents();
<<<<<<< HEAD
        } catch (\Exception $e) {
            // Really, PHP? https://bugs.php.net/bug.php?id=53648
            \trigger_error('StreamDecorator::__toString exception: ' . (string) $e, \E_USER_ERROR);
            return '';
        }
    }
    public function getContents()
=======
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            \trigger_error(\sprintf('%s::__toString exception: %s', self::class, (string) $e), \E_USER_ERROR);
            return '';
        }
    }
    public function getContents() : string
>>>>>>> update
    {
        return \YoastSEO_Vendor\GuzzleHttp\Psr7\Utils::copyToString($this);
    }
    /**
     * Allow decorators to implement custom methods
     *
<<<<<<< HEAD
     * @param string $method Missing method name
     * @param array  $args   Method arguments
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        $result = \call_user_func_array([$this->stream, $method], $args);
        // Always return the wrapped object if the result is a return $this
        return $result === $this->stream ? $this : $result;
    }
    public function close()
    {
        $this->stream->close();
    }
=======
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        /** @var callable $callable */
        $callable = [$this->stream, $method];
        $result = \call_user_func_array($callable, $args);
        // Always return the wrapped object if the result is a return $this
        return $result === $this->stream ? $this : $result;
    }
    public function close() : void
    {
        $this->stream->close();
    }
    /**
     * @return mixed
     */
>>>>>>> update
    public function getMetadata($key = null)
    {
        return $this->stream->getMetadata($key);
    }
    public function detach()
    {
        return $this->stream->detach();
    }
<<<<<<< HEAD
    public function getSize()
    {
        return $this->stream->getSize();
    }
    public function eof()
    {
        return $this->stream->eof();
    }
    public function tell()
    {
        return $this->stream->tell();
    }
    public function isReadable()
    {
        return $this->stream->isReadable();
    }
    public function isWritable()
    {
        return $this->stream->isWritable();
    }
    public function isSeekable()
    {
        return $this->stream->isSeekable();
    }
    public function rewind()
    {
        $this->seek(0);
    }
    public function seek($offset, $whence = \SEEK_SET)
    {
        $this->stream->seek($offset, $whence);
    }
    public function read($length)
    {
        return $this->stream->read($length);
    }
    public function write($string)
=======
    public function getSize() : ?int
    {
        return $this->stream->getSize();
    }
    public function eof() : bool
    {
        return $this->stream->eof();
    }
    public function tell() : int
    {
        return $this->stream->tell();
    }
    public function isReadable() : bool
    {
        return $this->stream->isReadable();
    }
    public function isWritable() : bool
    {
        return $this->stream->isWritable();
    }
    public function isSeekable() : bool
    {
        return $this->stream->isSeekable();
    }
    public function rewind() : void
    {
        $this->seek(0);
    }
    public function seek($offset, $whence = \SEEK_SET) : void
    {
        $this->stream->seek($offset, $whence);
    }
    public function read($length) : string
    {
        return $this->stream->read($length);
    }
    public function write($string) : int
>>>>>>> update
    {
        return $this->stream->write($string);
    }
    /**
     * Implement in subclasses to dynamically create streams when requested.
     *
<<<<<<< HEAD
     * @return StreamInterface
     *
     * @throws \BadMethodCallException
     */
    protected function createStream()
=======
     * @throws \BadMethodCallException
     */
    protected function createStream() : \YoastSEO_Vendor\Psr\Http\Message\StreamInterface
>>>>>>> update
    {
        throw new \BadMethodCallException('Not implemented');
    }
}
