<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use InvalidArgumentException;
use YoastSEO_Vendor\Psr\Http\Message\StreamInterface;
use YoastSEO_Vendor\Psr\Http\Message\UploadedFileInterface;
use RuntimeException;
class UploadedFile implements \YoastSEO_Vendor\Psr\Http\Message\UploadedFileInterface
{
<<<<<<< HEAD
    /**
     * @var int[]
     */
    private static $errors = [\UPLOAD_ERR_OK, \UPLOAD_ERR_INI_SIZE, \UPLOAD_ERR_FORM_SIZE, \UPLOAD_ERR_PARTIAL, \UPLOAD_ERR_NO_FILE, \UPLOAD_ERR_NO_TMP_DIR, \UPLOAD_ERR_CANT_WRITE, \UPLOAD_ERR_EXTENSION];
    /**
     * @var string
     */
    private $clientFilename;
    /**
     * @var string
=======
    private const ERRORS = [\UPLOAD_ERR_OK, \UPLOAD_ERR_INI_SIZE, \UPLOAD_ERR_FORM_SIZE, \UPLOAD_ERR_PARTIAL, \UPLOAD_ERR_NO_FILE, \UPLOAD_ERR_NO_TMP_DIR, \UPLOAD_ERR_CANT_WRITE, \UPLOAD_ERR_EXTENSION];
    /**
     * @var string|null
     */
    private $clientFilename;
    /**
     * @var string|null
>>>>>>> update
     */
    private $clientMediaType;
    /**
     * @var int
     */
    private $error;
    /**
     * @var string|null
     */
    private $file;
    /**
     * @var bool
     */
    private $moved = \false;
    /**
<<<<<<< HEAD
     * @var int
=======
     * @var int|null
>>>>>>> update
     */
    private $size;
    /**
     * @var StreamInterface|null
     */
    private $stream;
    /**
     * @param StreamInterface|string|resource $streamOrFile
<<<<<<< HEAD
     * @param int                             $size
     * @param int                             $errorStatus
     * @param string|null                     $clientFilename
     * @param string|null                     $clientMediaType
     */
    public function __construct($streamOrFile, $size, $errorStatus, $clientFilename = null, $clientMediaType = null)
    {
        $this->setError($errorStatus);
        $this->setSize($size);
        $this->setClientFilename($clientFilename);
        $this->setClientMediaType($clientMediaType);
=======
     */
    public function __construct($streamOrFile, ?int $size, int $errorStatus, string $clientFilename = null, string $clientMediaType = null)
    {
        $this->setError($errorStatus);
        $this->size = $size;
        $this->clientFilename = $clientFilename;
        $this->clientMediaType = $clientMediaType;
>>>>>>> update
        if ($this->isOk()) {
            $this->setStreamOrFile($streamOrFile);
        }
    }
    /**
     * Depending on the value set file or stream variable
     *
<<<<<<< HEAD
     * @param mixed $streamOrFile
     *
     * @throws InvalidArgumentException
     */
    private function setStreamOrFile($streamOrFile)
=======
     * @param StreamInterface|string|resource $streamOrFile
     *
     * @throws InvalidArgumentException
     */
    private function setStreamOrFile($streamOrFile) : void
>>>>>>> update
    {
        if (\is_string($streamOrFile)) {
            $this->file = $streamOrFile;
        } elseif (\is_resource($streamOrFile)) {
            $this->stream = new \YoastSEO_Vendor\GuzzleHttp\Psr7\Stream($streamOrFile);
        } elseif ($streamOrFile instanceof \YoastSEO_Vendor\Psr\Http\Message\StreamInterface) {
            $this->stream = $streamOrFile;
        } else {
            throw new \InvalidArgumentException('Invalid stream or file provided for UploadedFile');
        }
    }
    /**
<<<<<<< HEAD
     * @param int $error
     *
     * @throws InvalidArgumentException
     */
    private function setError($error)
    {
        if (\false === \is_int($error)) {
            throw new \InvalidArgumentException('Upload file error status must be an integer');
        }
        if (\false === \in_array($error, \YoastSEO_Vendor\GuzzleHttp\Psr7\UploadedFile::$errors)) {
=======
     * @throws InvalidArgumentException
     */
    private function setError(int $error) : void
    {
        if (\false === \in_array($error, \YoastSEO_Vendor\GuzzleHttp\Psr7\UploadedFile::ERRORS, \true)) {
>>>>>>> update
            throw new \InvalidArgumentException('Invalid error status for UploadedFile');
        }
        $this->error = $error;
    }
<<<<<<< HEAD
    /**
     * @param int $size
     *
     * @throws InvalidArgumentException
     */
    private function setSize($size)
    {
        if (\false === \is_int($size)) {
            throw new \InvalidArgumentException('Upload file size must be an integer');
        }
        $this->size = $size;
    }
    /**
     * @param mixed $param
     *
     * @return bool
     */
    private function isStringOrNull($param)
    {
        return \in_array(\gettype($param), ['string', 'NULL']);
    }
    /**
     * @param mixed $param
     *
     * @return bool
     */
    private function isStringNotEmpty($param)
=======
    private function isStringNotEmpty($param) : bool
>>>>>>> update
    {
        return \is_string($param) && \false === empty($param);
    }
    /**
<<<<<<< HEAD
     * @param string|null $clientFilename
     *
     * @throws InvalidArgumentException
     */
    private function setClientFilename($clientFilename)
    {
        if (\false === $this->isStringOrNull($clientFilename)) {
            throw new \InvalidArgumentException('Upload file client filename must be a string or null');
        }
        $this->clientFilename = $clientFilename;
    }
    /**
     * @param string|null $clientMediaType
     *
     * @throws InvalidArgumentException
     */
    private function setClientMediaType($clientMediaType)
    {
        if (\false === $this->isStringOrNull($clientMediaType)) {
            throw new \InvalidArgumentException('Upload file client media type must be a string or null');
        }
        $this->clientMediaType = $clientMediaType;
    }
    /**
     * Return true if there is no upload error
     *
     * @return bool
     */
    private function isOk()
    {
        return $this->error === \UPLOAD_ERR_OK;
    }
    /**
     * @return bool
     */
    public function isMoved()
=======
     * Return true if there is no upload error
     */
    private function isOk() : bool
    {
        return $this->error === \UPLOAD_ERR_OK;
    }
    public function isMoved() : bool
>>>>>>> update
    {
        return $this->moved;
    }
    /**
     * @throws RuntimeException if is moved or not ok
     */
<<<<<<< HEAD
    private function validateActive()
=======
    private function validateActive() : void
>>>>>>> update
    {
        if (\false === $this->isOk()) {
            throw new \RuntimeException('Cannot retrieve stream due to upload error');
        }
        if ($this->isMoved()) {
            throw new \RuntimeException('Cannot retrieve stream after it has already been moved');
        }
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     *
     * @throws RuntimeException if the upload was not successful.
     */
    public function getStream()
=======
    public function getStream() : \YoastSEO_Vendor\Psr\Http\Message\StreamInterface
>>>>>>> update
    {
        $this->validateActive();
        if ($this->stream instanceof \YoastSEO_Vendor\Psr\Http\Message\StreamInterface) {
            return $this->stream;
        }
<<<<<<< HEAD
        return new \YoastSEO_Vendor\GuzzleHttp\Psr7\LazyOpenStream($this->file, 'r+');
    }
    /**
     * {@inheritdoc}
     *
     * @see http://php.net/is_uploaded_file
     * @see http://php.net/move_uploaded_file
     *
     * @param string $targetPath Path to which to move the uploaded file.
     *
     * @throws RuntimeException         if the upload was not successful.
     * @throws InvalidArgumentException if the $path specified is invalid.
     * @throws RuntimeException         on any error during the move operation, or on
     *                                  the second or subsequent call to the method.
     */
    public function moveTo($targetPath)
=======
        /** @var string $file */
        $file = $this->file;
        return new \YoastSEO_Vendor\GuzzleHttp\Psr7\LazyOpenStream($file, 'r+');
    }
    public function moveTo($targetPath) : void
>>>>>>> update
    {
        $this->validateActive();
        if (\false === $this->isStringNotEmpty($targetPath)) {
            throw new \InvalidArgumentException('Invalid path provided for move operation; must be a non-empty string');
        }
        if ($this->file) {
<<<<<<< HEAD
            $this->moved = \php_sapi_name() == 'cli' ? \rename($this->file, $targetPath) : \move_uploaded_file($this->file, $targetPath);
=======
            $this->moved = \PHP_SAPI === 'cli' ? \rename($this->file, $targetPath) : \move_uploaded_file($this->file, $targetPath);
>>>>>>> update
        } else {
            \YoastSEO_Vendor\GuzzleHttp\Psr7\Utils::copyToStream($this->getStream(), new \YoastSEO_Vendor\GuzzleHttp\Psr7\LazyOpenStream($targetPath, 'w'));
            $this->moved = \true;
        }
        if (\false === $this->moved) {
            throw new \RuntimeException(\sprintf('Uploaded file could not be moved to %s', $targetPath));
        }
    }
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     *
     * @return int|null The file size in bytes or null if unknown.
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * {@inheritdoc}
     *
     * @see http://php.net/manual/en/features.file-upload.errors.php
     *
     * @return int One of PHP's UPLOAD_ERR_XXX constants.
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * {@inheritdoc}
     *
     * @return string|null The filename sent by the client or null if none
     *                     was provided.
     */
    public function getClientFilename()
    {
        return $this->clientFilename;
    }
    /**
     * {@inheritdoc}
     */
    public function getClientMediaType()
=======
    public function getSize() : ?int
    {
        return $this->size;
    }
    public function getError() : int
    {
        return $this->error;
    }
    public function getClientFilename() : ?string
    {
        return $this->clientFilename;
    }
    public function getClientMediaType() : ?string
>>>>>>> update
    {
        return $this->clientMediaType;
    }
}
