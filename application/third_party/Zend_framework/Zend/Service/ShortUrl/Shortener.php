<<<<<<< HEAD
<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Service_ShortUrl
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: $
 */

/**
 * @category   Zend
 * @package    Zend_Service_ShortUrl
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface Zend_Service_ShortUrl_Shortener
{
    /**
     * This function shortens long url
     *
     * @param  string $url URL to Shorten
     * @return string Shortened Url
     */
    public function shorten($url);

    /**
     * Reveals target for short URL
     *
     * @param  string $shortenedUrl URL to reveal target of
     * @return string Unshortened Url
     */
    public function unshorten($shortenedUrl);
}
=======
<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Service_ShortUrl
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: $
 */

/**
 * @category   Zend
 * @package    Zend_Service_ShortUrl
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface Zend_Service_ShortUrl_Shortener
{
    /**
     * This function shortens long url
     *
     * @param  string $url URL to Shorten
     * @return string Shortened Url
     */
    public function shorten($url);

    /**
     * Reveals target for short URL
     *
     * @param  string $shortenedUrl URL to reveal target of
     * @return string Unshortened Url
     */
    public function unshorten($shortenedUrl);
}
>>>>>>> 126491c5b956413b4ebc35a0628acbc4d375a4e7
