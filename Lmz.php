<?php
/**
 * 这是一个测试项目
 */

namespace Vlmz\Lmz;

/**
 * 测试类
 * Class lmz
 * @package Vlmz
 */
class Lmz
{
    /**
     * test
     * @param string $str
     * @return string
     */
    public function test($str = '')
    {
        return 'is a test' . $str;
    }

    /**
     * test
     * @param string $str
     * @return string
     */
    public static function isTest($str = '')
    {
        return 'is a test' . $str;
    }
}