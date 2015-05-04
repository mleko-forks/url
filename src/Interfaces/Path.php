<?php
/**
* This file is part of the League.url library
*
* @license http://opensource.org/licenses/MIT
* @link https://github.com/thephpleague/url/
* @version 4.0.0
* @package League.url
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace League\Url\Interfaces;

/**
 * An interface for URL Path component
 *
 * @package  League.url
 * @since  4.0.0
 */
interface Path extends SegmentComponent
{
    /**
     * Return a new Path interface normalized
     * by removing do SegmentComponent
     *
     * @return static
     */
    public function normalize();

    /**
     * Tells wether the current path is absolute or relative
     *
     * @return bool
     */
    public function isAbsolute();

    /**
     * Return a Path SegmentComponent
     *
     * @param string $offset     the parameter name
     * @param mixed  $default if no key is found the default value to return
     *
     * @return mixed
     */
    public function getSegment($offset, $default = null);

    /**
     * Gets the basename of the path
     *
     * @return string
     */
    public function getBasename();

    /**
     * Gets the path extension of the basename
     *
     * @return string
     */
    public function getExtension();

    /**
     * Return a new Path object with a modified extension
     * for the basename
     *
     * @param string $ext the new extension
     *                     can preceeded with or without the dot (.) character
     *
     * @throws \LogicException If the basename is empty
     *
     * @return static
     */
    public function withExtension($ext);
}