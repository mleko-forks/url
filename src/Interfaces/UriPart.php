<?php
/**
 * League.Url (http://url.thephpleague.com)
 *
 * @link      https://github.com/thephpleague/url/
 * @copyright Copyright (c) 2013-2015 Ignace Nyamagana Butera
 * @license   https://github.com/thephpleague/url/blob/master/LICENSE (MIT License)
 * @version   4.0.0
 * @package   League.url
 */
namespace League\Uri\Interfaces;

/**
 * Value object representing simple URL part.
 *
 * Instances of this interface are considered immutable; all methods that
 * might change state MUST be implemented such that they retain the internal
 * state of the current instance and return an instance that contains the
 * changed state.
 *
 * @package League.url
 * @since   4.0.0
 */
interface UriPart
{
    /**
     * Returns the instance string representation
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns the instance string representation
     * with its optional URL delimiters
     *
     * @return string
     */
    public function getUriComponent();

    /**
     * Returns true if the instance is considered empty
     *
     * @return bool
     */
    public function isEmpty();

    /**
     * Returns whether two UriPart objects represent the same value
     * The comparison is based on the getUriComponent method
     *
     * @param UriPart $component
     *
     * @return bool
     */
    public function sameValueAs(UriPart $component);
}
