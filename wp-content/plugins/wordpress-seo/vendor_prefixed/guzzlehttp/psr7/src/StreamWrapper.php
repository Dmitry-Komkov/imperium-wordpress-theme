<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
/**
 * Converts Guzzle streams into PHP stream resources.
 *
<<<<<<< HEAD
 * @final
 */
class StreamWrapper
=======
 * @see https://www.php.net/streamwrapper
 */
final class StreamWrapper
>>>>>>> update
{
    /** @var resource */
    public $context;
    /** @var StreamInterface */
    private $stream;
    /** @var string r, r+, or w */
    private $mode;
    /**
     * Returns a resource representing the stream.
     *
     * @param StreamInterface $stream The stream to get a resource for
     *
     * @return resource
     *
     * @throws \InvalidArgumentException if stream is not readable or writable
     */
    public static function getResource(\YoastSEO_Vendor\Psr\Http\Message\StreamInterface $stream)
    {
        self::register();
        if ($stream->isReadable()) {
            $mode = $stream->isWritable() ? 'r+' : 'r';
        } elseif ($stream->isWritable()) {
            $mode = 'w';
        } else {
            throw new \InvalidArgumentException('The stream must be readable, ' . 'writable, or both.');
        }
<<<<<<< HEAD
        return \fopen('guzzle://stream', $mode, null, self::createStreamContext($stream));
=======
        return \fopen('guzzle://stream', $mode, \false, self::createStreamContext($stream));
>>>>>>> update
    }
    /**
     * Creates a stream context that can be used to open a stream as a php stream resource.
     *
<<<<<<< HEAD
     * @param StreamInterface $stream
     *
=======
>>>>>>> update
     * @return resource
     */
    public static function createStreamContext(\YoastSEO_Vendor\Psr\Http\Message\StreamInterface $stream)
    {
        return \stream_context_create(['guzzle' => ['stream' => $stream]]);
    }
    /**
     * Registers the stream wrapper if needed
     */
<<<<<<< HEAD
    public static function register()
=======
    public static function register() : void
>>>>>>> update
    {
        if (!\in_array('guzzle', \stream_get_wrappers())) {
            \stream_wrapper_register('guzzle', __CLASS__);
        }
    }
<<<<<<< HEAD
    public function stream_open($path, $mode, $options, &$opened_path)
=======
    public function stream_open(string $path, string $mode, int $options, string &$opened_path = null) : bool
>>>>>>> update
    {
        $options = \stream_context_get_options($this->context);
        if (!isset($options['guzzle']['stream'])) {
            return \false;
        }
        $this->mode = $mode;
        $this->stream = $options['guzzle']['stream'];
        return \true;
    }
<<<<<<< HEAD
    public function stream_read($count)
    {
        return $this->stream->read($count);
    }
    public function stream_write($data)
    {
        return (int) $this->stream->write($data);
    }
    public function stream_tell()
    {
        return $this->stream->tell();
    }
    public function stream_eof()
    {
        return $this->stream->eof();
    }
    public function stream_seek($offset, $whence)
=======
    public function stream_read(int $count) : string
    {
        return $this->stream->read($count);
    }
    public function stream_write(string $data) : int
    {
        return $this->stream->write($data);
    }
    public function stream_tell() : int
    {
        return $this->stream->tell();
    }
    public function stream_eof() : bool
    {
        return $this->stream->eof();
    }
    public function stream_seek(int $offset, int $whence) : bool
>>>>>>> update
    {
        $this->stream->seek($offset, $whence);
        return \true;
    }
<<<<<<< HEAD
    public function stream_cast($cast_as)
    {
        $stream = clone $this->stream;
        return $stream->detach();
    }
    public function stream_stat()
=======
    /**
     * @return resource|false
     */
    public function stream_cast(int $cast_as)
    {
        $stream = clone $this->stream;
        $resource = $stream->detach();
        return $resource ?? \false;
    }
    /**
     * @return array<int|string, int>
     */
    public function stream_stat() : array
>>>>>>> update
    {
        static $modeMap = ['r' => 33060, 'rb' => 33060, 'r+' => 33206, 'w' => 33188, 'wb' => 33188];
        return ['dev' => 0, 'ino' => 0, 'mode' => $modeMap[$this->mode], 'nlink' => 0, 'uid' => 0, 'gid' => 0, 'rdev' => 0, 'size' => $this->stream->getSize() ?: 0, 'atime' => 0, 'mtime' => 0, 'ctime' => 0, 'blksize' => 0, 'blocks' => 0];
    }
<<<<<<< HEAD
    public function url_stat($path, $flags)
=======
    /**
     * @return array<int|string, int>
     */
    public function url_stat(string $path, int $flags) : array
>>>>>>> update
    {
        return ['dev' => 0, 'ino' => 0, 'mode' => 0, 'nlink' => 0, 'uid' => 0, 'gid' => 0, 'rdev' => 0, 'size' => 0, 'atime' => 0, 'mtime' => 0, 'ctime' => 0, 'blksize' => 0, 'blocks' => 0];
    }
}
