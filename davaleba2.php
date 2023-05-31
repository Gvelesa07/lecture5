<?php
class Foo
{
    static string $name = 'Hello ';
    static function intro(): string
    {
        return 'World';
    }
}
echo Foo::$name;
echo Foo::intro();