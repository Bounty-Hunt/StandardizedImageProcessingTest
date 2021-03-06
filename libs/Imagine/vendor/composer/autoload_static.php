<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0008eee98937990f9ca7e7cb7934d23
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imagine\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/imagine/imagine/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0008eee98937990f9ca7e7cb7934d23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0008eee98937990f9ca7e7cb7934d23::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
