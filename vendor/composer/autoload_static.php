<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e0e749fff607ad539c4b9d634aa41a4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Podlove\\Webvtt' => 
            array (
                0 => __DIR__ . '/..' . '/podlove/webvtt-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e0e749fff607ad539c4b9d634aa41a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e0e749fff607ad539c4b9d634aa41a4::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit5e0e749fff607ad539c4b9d634aa41a4::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5e0e749fff607ad539c4b9d634aa41a4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
