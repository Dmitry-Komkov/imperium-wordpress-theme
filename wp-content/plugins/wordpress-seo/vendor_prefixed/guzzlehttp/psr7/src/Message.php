<?php

<<<<<<< HEAD
=======
declare (strict_types=1);
>>>>>>> update
namespace YoastSEO_Vendor\GuzzleHttp\Psr7;

use YoastSEO_Vendor\Psr\Http\Message\MessageInterface;
use YoastSEO_Vendor\Psr\Http\Message\RequestInterface;
use YoastSEO_Vendor\Psr\Http\Message\ResponseInterface;
final class Message
{
    /**
     * Returns the string representation of an HTTP message.
     *
     * @param MessageInterface $message Message to convert to a string.
<<<<<<< HEAD
     *
     * @return string
     */
    public static function toString(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message)
=======
     */
    public static function toString(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message) : string
>>>>>>> update
    {
        if ($message instanceof \YoastSEO_Vendor\Psr\Http\Message\RequestInterface) {
            $msg = \trim($message->getMethod() . ' ' . $message->getRequestTarget()) . ' HTTP/' . $message->getProtocolVersion();
            if (!$message->hasHeader('host')) {
                $msg .= "\r\nHost: " . $message->getUri()->getHost();
            }
        } elseif ($message instanceof \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface) {
            $msg = 'HTTP/' . $message->getProtocolVersion() . ' ' . $message->getStatusCode() . ' ' . $message->getReasonPhrase();
        } else {
            throw new \InvalidArgumentException('Unknown message type');
        }
        foreach ($message->getHeaders() as $name => $values) {
<<<<<<< HEAD
            if (\strtolower($name) === 'set-cookie') {
=======
            if (\is_string($name) && \strtolower($name) === 'set-cookie') {
>>>>>>> update
                foreach ($values as $value) {
                    $msg .= "\r\n{$name}: " . $value;
                }
            } else {
                $msg .= "\r\n{$name}: " . \implode(', ', $values);
            }
        }
        return "{$msg}\r\n\r\n" . $message->getBody();
    }
    /**
     * Get a short summary of the message body.
     *
     * Will return `null` if the response is not printable.
     *
     * @param MessageInterface $message    The message to get the body summary
     * @param int              $truncateAt The maximum allowed size of the summary
<<<<<<< HEAD
     *
     * @return string|null
     */
    public static function bodySummary(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message, $truncateAt = 120)
=======
     */
    public static function bodySummary(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message, int $truncateAt = 120) : ?string
>>>>>>> update
    {
        $body = $message->getBody();
        if (!$body->isSeekable() || !$body->isReadable()) {
            return null;
        }
        $size = $body->getSize();
        if ($size === 0) {
            return null;
        }
<<<<<<< HEAD
=======
        $body->rewind();
>>>>>>> update
        $summary = $body->read($truncateAt);
        $body->rewind();
        if ($size > $truncateAt) {
            $summary .= ' (truncated...)';
        }
        // Matches any printable character, including unicode characters:
        // letters, marks, numbers, punctuation, spacing, and separators.
<<<<<<< HEAD
        if (\preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/u', $summary)) {
=======
        if (\preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/u', $summary) !== 0) {
>>>>>>> update
            return null;
        }
        return $summary;
    }
    /**
     * Attempts to rewind a message body and throws an exception on failure.
     *
     * The body of the message will only be rewound if a call to `tell()`
     * returns a value other than `0`.
     *
     * @param MessageInterface $message Message to rewind
     *
     * @throws \RuntimeException
     */
<<<<<<< HEAD
    public static function rewindBody(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message)
=======
    public static function rewindBody(\YoastSEO_Vendor\Psr\Http\Message\MessageInterface $message) : void
>>>>>>> update
    {
        $body = $message->getBody();
        if ($body->tell()) {
            $body->rewind();
        }
    }
    /**
     * Parses an HTTP message into an associative array.
     *
     * The array contains the "start-line" key containing the start line of
     * the message, "headers" key containing an associative array of header
     * array values, and a "body" key containing the body of the message.
     *
     * @param string $message HTTP request or response to parse.
<<<<<<< HEAD
     *
     * @return array
     */
    public static function parseMessage($message)
=======
     */
    public static function parseMessage(string $message) : array
>>>>>>> update
    {
        if (!$message) {
            throw new \InvalidArgumentException('Invalid message');
        }
        $message = \ltrim($message, "\r\n");
        $messageParts = \preg_split("/\r?\n\r?\n/", $message, 2);
        if ($messageParts === \false || \count($messageParts) !== 2) {
            throw new \InvalidArgumentException('Invalid message: Missing header delimiter');
        }
<<<<<<< HEAD
        list($rawHeaders, $body) = $messageParts;
=======
        [$rawHeaders, $body] = $messageParts;
>>>>>>> update
        $rawHeaders .= "\r\n";
        // Put back the delimiter we split previously
        $headerParts = \preg_split("/\r?\n/", $rawHeaders, 2);
        if ($headerParts === \false || \count($headerParts) !== 2) {
            throw new \InvalidArgumentException('Invalid message: Missing status line');
        }
<<<<<<< HEAD
        list($startLine, $rawHeaders) = $headerParts;
=======
        [$startLine, $rawHeaders] = $headerParts;
>>>>>>> update
        if (\preg_match("/(?:^HTTP\\/|^[A-Z]+ \\S+ HTTP\\/)(\\d+(?:\\.\\d+)?)/i", $startLine, $matches) && $matches[1] === '1.0') {
            // Header folding is deprecated for HTTP/1.1, but allowed in HTTP/1.0
            $rawHeaders = \preg_replace(\YoastSEO_Vendor\GuzzleHttp\Psr7\Rfc7230::HEADER_FOLD_REGEX, ' ', $rawHeaders);
        }
        /** @var array[] $headerLines */
        $count = \preg_match_all(\YoastSEO_Vendor\GuzzleHttp\Psr7\Rfc7230::HEADER_REGEX, $rawHeaders, $headerLines, \PREG_SET_ORDER);
        // If these aren't the same, then one line didn't match and there's an invalid header.
        if ($count !== \substr_count($rawHeaders, "\n")) {
            // Folding is deprecated, see https://tools.ietf.org/html/rfc7230#section-3.2.4
            if (\preg_match(\YoastSEO_Vendor\GuzzleHttp\Psr7\Rfc7230::HEADER_FOLD_REGEX, $rawHeaders)) {
                throw new \InvalidArgumentException('Invalid header syntax: Obsolete line folding');
            }
            throw new \InvalidArgumentException('Invalid header syntax');
        }
        $headers = [];
        foreach ($headerLines as $headerLine) {
            $headers[$headerLine[1]][] = $headerLine[2];
        }
        return ['start-line' => $startLine, 'headers' => $headers, 'body' => $body];
    }
    /**
     * Constructs a URI for an HTTP request message.
     *
     * @param string $path    Path from the start-line
     * @param array  $headers Array of headers (each value an array).
<<<<<<< HEAD
     *
     * @return string
     */
    public static function parseRequestUri($path, array $headers)
    {
        $hostKey = \array_filter(\array_keys($headers), function ($k) {
=======
     */
    public static function parseRequestUri(string $path, array $headers) : string
    {
        $hostKey = \array_filter(\array_keys($headers), function ($k) {
            // Numeric array keys are converted to int by PHP.
            $k = (string) $k;
>>>>>>> update
            return \strtolower($k) === 'host';
        });
        // If no host is found, then a full URI cannot be constructed.
        if (!$hostKey) {
            return $path;
        }
        $host = $headers[\reset($hostKey)][0];
        $scheme = \substr($host, -4) === ':443' ? 'https' : 'http';
        return $scheme . '://' . $host . '/' . \ltrim($path, '/');
    }
    /**
     * Parses a request message string into a request object.
     *
     * @param string $message Request message string.
<<<<<<< HEAD
     *
     * @return Request
     */
    public static function parseRequest($message)
=======
     */
    public static function parseRequest(string $message) : \YoastSEO_Vendor\Psr\Http\Message\RequestInterface
>>>>>>> update
    {
        $data = self::parseMessage($message);
        $matches = [];
        if (!\preg_match('/^[\\S]+\\s+([a-zA-Z]+:\\/\\/|\\/).*/', $data['start-line'], $matches)) {
            throw new \InvalidArgumentException('Invalid request string');
        }
        $parts = \explode(' ', $data['start-line'], 3);
        $version = isset($parts[2]) ? \explode('/', $parts[2])[1] : '1.1';
        $request = new \YoastSEO_Vendor\GuzzleHttp\Psr7\Request($parts[0], $matches[1] === '/' ? self::parseRequestUri($parts[1], $data['headers']) : $parts[1], $data['headers'], $data['body'], $version);
        return $matches[1] === '/' ? $request : $request->withRequestTarget($parts[1]);
    }
    /**
     * Parses a response message string into a response object.
     *
     * @param string $message Response message string.
<<<<<<< HEAD
     *
     * @return Response
     */
    public static function parseResponse($message)
=======
     */
    public static function parseResponse(string $message) : \YoastSEO_Vendor\Psr\Http\Message\ResponseInterface
>>>>>>> update
    {
        $data = self::parseMessage($message);
        // According to https://tools.ietf.org/html/rfc7230#section-3.1.2 the space
        // between status-code and reason-phrase is required. But browsers accept
        // responses without space and reason as well.
        if (!\preg_match('/^HTTP\\/.* [0-9]{3}( .*|$)/', $data['start-line'])) {
            throw new \InvalidArgumentException('Invalid response string: ' . $data['start-line']);
        }
        $parts = \explode(' ', $data['start-line'], 3);
<<<<<<< HEAD
        return new \YoastSEO_Vendor\GuzzleHttp\Psr7\Response((int) $parts[1], $data['headers'], $data['body'], \explode('/', $parts[0])[1], isset($parts[2]) ? $parts[2] : null);
=======
        return new \YoastSEO_Vendor\GuzzleHttp\Psr7\Response((int) $parts[1], $data['headers'], $data['body'], \explode('/', $parts[0])[1], $parts[2] ?? null);
>>>>>>> update
    }
}
