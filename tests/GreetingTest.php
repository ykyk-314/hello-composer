<?php

namespace Yokoyan\HalloComposer\Tests;

use PHPUnit\Framework\TestCase;
use Yokoyan\HalloComposer\Action\Greeting;

class GreetingTest extends TestCase
{
    public function test_random(): void
    {
        $greeting = new Greeting();
        $this->assertContains($greeting->random(), ['morning', 'lunch', 'evening', 'night', 'hello', 'bye', 'welcome']);
    }

    public function test_morning(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Good Morning!', $greeting->morning());
    }

    public function test_lunch(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Good Afternoon!', $greeting->lunch());
    }

    public function test_evening(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Good Evening!', $greeting->evening());
    }

    public function test_night(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Good Night!', $greeting->night());
    }

    public function test_hello(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Hello!', $greeting->hello());
    }

    public function test_bye(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Bye!', $greeting->bye());
    }

    public function test_welcome(): void
    {
        $greeting = new Greeting();
        $this->assertEquals('Welcome!', $greeting->welcome());
    }
}
