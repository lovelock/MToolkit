<?php
/**
 * User: qingchun3
 * Date: 2018/10/9
 */

namespace MToolkit\Unicode;

/**
 * Class Decoder
 * Decode unicode characters
 *
 * @package     MToolkit\Unicode
 * @author      lovelock <frostwong@gmail.com>
 * @date        Oct 09, 2018
 */
class Decoder
{
    /**
     * Decode utf8 unicode string
     *
     * @param string $string
     * @return string
     */
    public static function decodeUtf8(string $string): string
    {
        return preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
            if ($match) {
                return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
            }
        }, $string);
    }

    /**
     * Decode utf16 unicode string
     *
     * @param string $string
     * @return string
     */
    public static function decodeUtf16(string $string): string
    {
        return preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
            if ($match) {
                return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UTF-16BE');
            }
        }, $string);
    }
}