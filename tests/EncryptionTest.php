<?php

declare(strict_types=1);

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $data = '开源技术小栈';
        $key = '53vYPpTJIR1aYFiFh0PppZzF';

        /** 加密*/
        $encrypt = Rain\TestComposer\Util\Encryption::encrypt($data, $key);
        self::assertIsString($encrypt);

        /** 解密*/
        $decrypt = Rain\TestComposer\Util\Encryption::decrypt($encrypt, $key);
        
        // 判断解密明文是否和预期的相等
        self::assertEquals($decrypt, $data);
    }
}
