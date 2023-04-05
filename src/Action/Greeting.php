<?php

namespace Yokoyan\HalloComposer\Action;

class Greeting
{
    public function __construct()
    {
    }

    public function random()
    {
        return $this->getRandomGreeting();
    }

    private function getRandomGreeting()
    {
        $greeting = get_class_methods($this);
        $greeting = array_diff($greeting, ['__construct', 'getRandomGreeting', 'random']);
        $greeting = array_values($greeting);
        $greeting = $greeting[array_rand($greeting)];

        return $greeting;
    }

    public function morning(): string
    {
        return 'Good Morning!';
    }

    public function lunch(): string
    {
        return 'Good Afternoon!';
    }

    public function evening(): string
    {
        return 'Good Evening!';
    }

    public function night(): string
    {
        return 'Good Night!';
    }

    public function hello(): string
    {
        return 'Hello!';
    }

    public function bye(): string
    {
        return 'Bye!';
    }

    public function welcome(): string
    {
        return 'Welcome!';
    }
}
