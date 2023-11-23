<?php

namespace YoastSEO_Vendor\GuzzleHttp\Cookie;

/**
 * Set-Cookie object
 */
class SetCookie
{
<<<<<<< HEAD
    /** @var array */
    private static $defaults = ['Name' => null, 'Value' => null, 'Domain' => null, 'Path' => '/', 'Max-Age' => null, 'Expires' => null, 'Secure' => \false, 'Discard' => \false, 'HttpOnly' => \false];
    /** @var array Cookie data */
    private $data;
    /**
     * Create a new SetCookie object from a string
     *
     * @param string $cookie Set-Cookie header string
     *
     * @return self
     */
    public static function fromString($cookie)
=======
    /**
     * @var array
     */
    private static $defaults = ['Name' => null, 'Value' => null, 'Domain' => null, 'Path' => '/', 'Max-Age' => null, 'Expires' => null, 'Secure' => \false, 'Discard' => \false, 'HttpOnly' => \false];
    /**
     * @var array Cookie data
     */
    private $data;
    /**
     * Create a new SetCookie object from a string.
     *
     * @param string $cookie Set-Cookie header string
     */
    public static function fromString(string $cookie) : self
>>>>>>> update
    {
        // Create the default return array
        $data = self::$defaults;
        // Explode the cookie string using a series of semicolons
        $pieces = \array_filter(\array_map('trim', \explode(';', $cookie)));
        // The name of the cookie (first kvp) must exist and include an equal sign.
<<<<<<< HEAD
        if (empty($pieces[0]) || !\strpos($pieces[0], '=')) {
=======
        if (!isset($pieces[0]) || \strpos($pieces[0], '=') === \false) {
>>>>>>> update
            return new self($data);
        }
        // Add the cookie pieces into the parsed data array
        foreach ($pieces as $part) {
            $cookieParts = \explode('=', $part, 2);
            $key = \trim($cookieParts[0]);
<<<<<<< HEAD
            $value = isset($cookieParts[1]) ? \trim($cookieParts[1], " \n\r\t\0\v") : \true;
            // Only check for non-cookies when cookies have been found
            if (empty($data['Name'])) {
=======
            $value = isset($cookieParts[1]) ? \trim($cookieParts[1], " \n\r\t\x00\v") : \true;
            // Only check for non-cookies when cookies have been found
            if (!isset($data['Name'])) {
>>>>>>> update
                $data['Name'] = $key;
                $data['Value'] = $value;
            } else {
                foreach (\array_keys(self::$defaults) as $search) {
                    if (!\strcasecmp($search, $key)) {
<<<<<<< HEAD
                        $data[$search] = $value;
=======
                        if ($search === 'Max-Age') {
                            if (\is_numeric($value)) {
                                $data[$search] = (int) $value;
                            }
                        } else {
                            $data[$search] = $value;
                        }
>>>>>>> update
                        continue 2;
                    }
                }
                $data[$key] = $value;
            }
        }
        return new self($data);
    }
    /**
     * @param array $data Array of cookie data provided by a Cookie parser
     */
    public function __construct(array $data = [])
    {
<<<<<<< HEAD
        $this->data = \array_replace(self::$defaults, $data);
=======
        $this->data = self::$defaults;
        if (isset($data['Name'])) {
            $this->setName($data['Name']);
        }
        if (isset($data['Value'])) {
            $this->setValue($data['Value']);
        }
        if (isset($data['Domain'])) {
            $this->setDomain($data['Domain']);
        }
        if (isset($data['Path'])) {
            $this->setPath($data['Path']);
        }
        if (isset($data['Max-Age'])) {
            $this->setMaxAge($data['Max-Age']);
        }
        if (isset($data['Expires'])) {
            $this->setExpires($data['Expires']);
        }
        if (isset($data['Secure'])) {
            $this->setSecure($data['Secure']);
        }
        if (isset($data['Discard'])) {
            $this->setDiscard($data['Discard']);
        }
        if (isset($data['HttpOnly'])) {
            $this->setHttpOnly($data['HttpOnly']);
        }
        // Set the remaining values that don't have extra validation logic
        foreach (\array_diff(\array_keys($data), \array_keys(self::$defaults)) as $key) {
            $this->data[$key] = $data[$key];
        }
>>>>>>> update
        // Extract the Expires value and turn it into a UNIX timestamp if needed
        if (!$this->getExpires() && $this->getMaxAge()) {
            // Calculate the Expires date
            $this->setExpires(\time() + $this->getMaxAge());
<<<<<<< HEAD
        } elseif ($this->getExpires() && !\is_numeric($this->getExpires())) {
            $this->setExpires($this->getExpires());
=======
        } elseif (null !== ($expires = $this->getExpires()) && !\is_numeric($expires)) {
            $this->setExpires($expires);
>>>>>>> update
        }
    }
    public function __toString()
    {
<<<<<<< HEAD
        $str = $this->data['Name'] . '=' . $this->data['Value'] . '; ';
=======
        $str = $this->data['Name'] . '=' . ($this->data['Value'] ?? '') . '; ';
>>>>>>> update
        foreach ($this->data as $k => $v) {
            if ($k !== 'Name' && $k !== 'Value' && $v !== null && $v !== \false) {
                if ($k === 'Expires') {
                    $str .= 'Expires=' . \gmdate('D, d M Y H:i:s \\G\\M\\T', $v) . '; ';
                } else {
                    $str .= ($v === \true ? $k : "{$k}={$v}") . '; ';
                }
            }
        }
        return \rtrim($str, '; ');
    }
<<<<<<< HEAD
    public function toArray()
=======
    public function toArray() : array
>>>>>>> update
    {
        return $this->data;
    }
    /**
<<<<<<< HEAD
     * Get the cookie name
=======
     * Get the cookie name.
>>>>>>> update
     *
     * @return string
     */
    public function getName()
    {
        return $this->data['Name'];
    }
    /**
<<<<<<< HEAD
     * Set the cookie name
     *
     * @param string $name Cookie name
     */
    public function setName($name)
    {
        $this->data['Name'] = $name;
    }
    /**
     * Get the cookie value
     *
     * @return string
=======
     * Set the cookie name.
     *
     * @param string $name Cookie name
     */
    public function setName($name) : void
    {
        if (!\is_string($name)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a string to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Name'] = (string) $name;
    }
    /**
     * Get the cookie value.
     *
     * @return string|null
>>>>>>> update
     */
    public function getValue()
    {
        return $this->data['Value'];
    }
    /**
<<<<<<< HEAD
     * Set the cookie value
     *
     * @param string $value Cookie value
     */
    public function setValue($value)
    {
        $this->data['Value'] = $value;
    }
    /**
     * Get the domain
=======
     * Set the cookie value.
     *
     * @param string $value Cookie value
     */
    public function setValue($value) : void
    {
        if (!\is_string($value)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a string to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Value'] = (string) $value;
    }
    /**
     * Get the domain.
>>>>>>> update
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->data['Domain'];
    }
    /**
<<<<<<< HEAD
     * Set the domain of the cookie
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->data['Domain'] = $domain;
    }
    /**
     * Get the path
=======
     * Set the domain of the cookie.
     *
     * @param string|null $domain
     */
    public function setDomain($domain) : void
    {
        if (!\is_string($domain) && null !== $domain) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a string or null to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Domain'] = null === $domain ? null : (string) $domain;
    }
    /**
     * Get the path.
>>>>>>> update
     *
     * @return string
     */
    public function getPath()
    {
        return $this->data['Path'];
    }
    /**
<<<<<<< HEAD
     * Set the path of the cookie
     *
     * @param string $path Path of the cookie
     */
    public function setPath($path)
    {
        $this->data['Path'] = $path;
    }
    /**
     * Maximum lifetime of the cookie in seconds
=======
     * Set the path of the cookie.
     *
     * @param string $path Path of the cookie
     */
    public function setPath($path) : void
    {
        if (!\is_string($path)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a string to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Path'] = (string) $path;
    }
    /**
     * Maximum lifetime of the cookie in seconds.
>>>>>>> update
     *
     * @return int|null
     */
    public function getMaxAge()
    {
<<<<<<< HEAD
        return $this->data['Max-Age'];
    }
    /**
     * Set the max-age of the cookie
     *
     * @param int $maxAge Max age of the cookie in seconds
     */
    public function setMaxAge($maxAge)
    {
        $this->data['Max-Age'] = $maxAge;
    }
    /**
     * The UNIX timestamp when the cookie Expires
     *
     * @return mixed
=======
        return null === $this->data['Max-Age'] ? null : (int) $this->data['Max-Age'];
    }
    /**
     * Set the max-age of the cookie.
     *
     * @param int|null $maxAge Max age of the cookie in seconds
     */
    public function setMaxAge($maxAge) : void
    {
        if (!\is_int($maxAge) && null !== $maxAge) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing an int or null to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Max-Age'] = $maxAge === null ? null : (int) $maxAge;
    }
    /**
     * The UNIX timestamp when the cookie Expires.
     *
     * @return string|int|null
>>>>>>> update
     */
    public function getExpires()
    {
        return $this->data['Expires'];
    }
    /**
<<<<<<< HEAD
     * Set the unix timestamp for which the cookie will expire
     *
     * @param int $timestamp Unix timestamp
     */
    public function setExpires($timestamp)
    {
        $this->data['Expires'] = \is_numeric($timestamp) ? (int) $timestamp : \strtotime($timestamp);
    }
    /**
     * Get whether or not this is a secure cookie
     *
     * @return bool|null
=======
     * Set the unix timestamp for which the cookie will expire.
     *
     * @param int|string|null $timestamp Unix timestamp or any English textual datetime description.
     */
    public function setExpires($timestamp) : void
    {
        if (!\is_int($timestamp) && !\is_string($timestamp) && null !== $timestamp) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing an int, string or null to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Expires'] = null === $timestamp ? null : (\is_numeric($timestamp) ? (int) $timestamp : \strtotime((string) $timestamp));
    }
    /**
     * Get whether or not this is a secure cookie.
     *
     * @return bool
>>>>>>> update
     */
    public function getSecure()
    {
        return $this->data['Secure'];
    }
    /**
<<<<<<< HEAD
     * Set whether or not the cookie is secure
     *
     * @param bool $secure Set to true or false if secure
     */
    public function setSecure($secure)
    {
        $this->data['Secure'] = $secure;
    }
    /**
     * Get whether or not this is a session cookie
=======
     * Set whether or not the cookie is secure.
     *
     * @param bool $secure Set to true or false if secure
     */
    public function setSecure($secure) : void
    {
        if (!\is_bool($secure)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a bool to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Secure'] = (bool) $secure;
    }
    /**
     * Get whether or not this is a session cookie.
>>>>>>> update
     *
     * @return bool|null
     */
    public function getDiscard()
    {
        return $this->data['Discard'];
    }
    /**
<<<<<<< HEAD
     * Set whether or not this is a session cookie
     *
     * @param bool $discard Set to true or false if this is a session cookie
     */
    public function setDiscard($discard)
    {
        $this->data['Discard'] = $discard;
    }
    /**
     * Get whether or not this is an HTTP only cookie
=======
     * Set whether or not this is a session cookie.
     *
     * @param bool $discard Set to true or false if this is a session cookie
     */
    public function setDiscard($discard) : void
    {
        if (!\is_bool($discard)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a bool to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['Discard'] = (bool) $discard;
    }
    /**
     * Get whether or not this is an HTTP only cookie.
>>>>>>> update
     *
     * @return bool
     */
    public function getHttpOnly()
    {
        return $this->data['HttpOnly'];
    }
    /**
<<<<<<< HEAD
     * Set whether or not this is an HTTP only cookie
     *
     * @param bool $httpOnly Set to true or false if this is HTTP only
     */
    public function setHttpOnly($httpOnly)
    {
        $this->data['HttpOnly'] = $httpOnly;
=======
     * Set whether or not this is an HTTP only cookie.
     *
     * @param bool $httpOnly Set to true or false if this is HTTP only
     */
    public function setHttpOnly($httpOnly) : void
    {
        if (!\is_bool($httpOnly)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing a bool to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }
        $this->data['HttpOnly'] = (bool) $httpOnly;
>>>>>>> update
    }
    /**
     * Check if the cookie matches a path value.
     *
     * A request-path path-matches a given cookie-path if at least one of
     * the following conditions holds:
     *
     * - The cookie-path and the request-path are identical.
     * - The cookie-path is a prefix of the request-path, and the last
     *   character of the cookie-path is %x2F ("/").
     * - The cookie-path is a prefix of the request-path, and the first
     *   character of the request-path that is not included in the cookie-
     *   path is a %x2F ("/") character.
     *
     * @param string $requestPath Path to check against
<<<<<<< HEAD
     *
     * @return bool
     */
    public function matchesPath($requestPath)
=======
     */
    public function matchesPath(string $requestPath) : bool
>>>>>>> update
    {
        $cookiePath = $this->getPath();
        // Match on exact matches or when path is the default empty "/"
        if ($cookiePath === '/' || $cookiePath == $requestPath) {
            return \true;
        }
        // Ensure that the cookie-path is a prefix of the request path.
        if (0 !== \strpos($requestPath, $cookiePath)) {
            return \false;
        }
        // Match if the last character of the cookie-path is "/"
        if (\substr($cookiePath, -1, 1) === '/') {
            return \true;
        }
        // Match if the first character not included in cookie path is "/"
        return \substr($requestPath, \strlen($cookiePath), 1) === '/';
    }
    /**
<<<<<<< HEAD
     * Check if the cookie matches a domain value
     *
     * @param string $domain Domain to check against
     *
     * @return bool
     */
    public function matchesDomain($domain)
=======
     * Check if the cookie matches a domain value.
     *
     * @param string $domain Domain to check against
     */
    public function matchesDomain(string $domain) : bool
>>>>>>> update
    {
        $cookieDomain = $this->getDomain();
        if (null === $cookieDomain) {
            return \true;
        }
        // Remove the leading '.' as per spec in RFC 6265.
<<<<<<< HEAD
        // http://tools.ietf.org/html/rfc6265#section-5.2.3
=======
        // https://tools.ietf.org/html/rfc6265#section-5.2.3
>>>>>>> update
        $cookieDomain = \ltrim(\strtolower($cookieDomain), '.');
        $domain = \strtolower($domain);
        // Domain not set or exact match.
        if ('' === $cookieDomain || $domain === $cookieDomain) {
            return \true;
        }
        // Matching the subdomain according to RFC 6265.
<<<<<<< HEAD
        // http://tools.ietf.org/html/rfc6265#section-5.1.3
=======
        // https://tools.ietf.org/html/rfc6265#section-5.1.3
>>>>>>> update
        if (\filter_var($domain, \FILTER_VALIDATE_IP)) {
            return \false;
        }
        return (bool) \preg_match('/\\.' . \preg_quote($cookieDomain, '/') . '$/', $domain);
    }
    /**
<<<<<<< HEAD
     * Check if the cookie is expired
     *
     * @return bool
     */
    public function isExpired()
=======
     * Check if the cookie is expired.
     */
    public function isExpired() : bool
>>>>>>> update
    {
        return $this->getExpires() !== null && \time() > $this->getExpires();
    }
    /**
<<<<<<< HEAD
     * Check if the cookie is valid according to RFC 6265
=======
     * Check if the cookie is valid according to RFC 6265.
>>>>>>> update
     *
     * @return bool|string Returns true if valid or an error message if invalid
     */
    public function validate()
    {
<<<<<<< HEAD
        // Names must not be empty, but can be 0
        $name = $this->getName();
        if (empty($name) && !\is_numeric($name)) {
=======
        $name = $this->getName();
        if ($name === '') {
>>>>>>> update
            return 'The cookie name must not be empty';
        }
        // Check if any of the invalid characters are present in the cookie name
        if (\preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) {
            return 'Cookie name must not contain invalid characters: ASCII ' . 'Control characters (0-31;127), space, tab and the ' . 'following characters: ()<>@,;:\\"/?={}';
        }
<<<<<<< HEAD
        // Value must not be empty, but can be 0
        $value = $this->getValue();
        if (empty($value) && !\is_numeric($value)) {
            return 'The cookie value must not be empty';
        }
        // Domains must not be empty, but can be 0
        // A "0" is not a valid internet domain, but may be used as server name
        // in a private network.
        $domain = $this->getDomain();
        if (empty($domain) && !\is_numeric($domain)) {
=======
        // Value must not be null. 0 and empty string are valid. Empty strings
        // are technically against RFC 6265, but known to happen in the wild.
        $value = $this->getValue();
        if ($value === null) {
            return 'The cookie value must not be empty';
        }
        // Domains must not be empty, but can be 0. "0" is not a valid internet
        // domain, but may be used as server name in a private network.
        $domain = $this->getDomain();
        if ($domain === null || $domain === '') {
>>>>>>> update
            return 'The cookie domain must not be empty';
        }
        return \true;
    }
}
