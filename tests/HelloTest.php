<?php

namespace Yokoyan\HalloComposer\Tests;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function test_call(): void
    {
        $this->assertEquals('Hello Composer!', \Yokoyan\HalloComposer\Action\Hello::Call());
    }

    public function test_say(): void
    {
        $string = 'Say Message.';
        $this->assertEquals($string, \Yokoyan\HalloComposer\Action\Hello::Say($string));
    }
}
