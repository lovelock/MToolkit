<?php
/**
 * User: qingchun3
 * Date: 2018/10/9
 */

namespace Tests\MToolkit\Unicode;

use MToolkit\Unicode\Decoder;
use PHPUnit\Framework\TestCase;

class DecoderTest extends TestCase
{

    public function testDecodeUtf16()
    {

    }

    public function testDecodeUtf8()
    {
        $str = 'test\u6570\u636e\u5e93\u5b57\u6bb5';
        $expected = 'test数据库字段';

        $this->assertEquals($expected, Decoder::decodeUtf8($str));
    }
}
