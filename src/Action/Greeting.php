<?php

namespace Yokoyan\HalloComposer\Action;

class Greeting
{
    public function __construct()
    {
    }

    public function random(): int
    {
        return $this->getRandomGreeting();
    }

    private function getRandomGreeting() : string
    {
        $greetings = get_class_methods($this);
        $greetings = array_diff($greetings, ['__construct', 'getRandomGreeting', 'random']);
        $greetings = array_values($greetings);

        $greeting = $greetings[array_rand($greetings)];

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
