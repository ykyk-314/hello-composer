<?php

namespace Yokoyan\HalloComposer\Action;

class Hello
{
    public static function Call(): string
    {
        return 'Hello Composer!' . "\n";
    }

    public static function Say(?string $text): string
    {
        return ($text ?? 'Hoooo') . "\n";
    }
}
