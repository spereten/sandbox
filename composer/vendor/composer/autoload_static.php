<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d67754c8d7073d5d2b43c742073a762
{
    public static $files = array (
        '51da4bff79c9f8c2fc5d5d481fdb9cfc' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spereten\\String\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spereten\\String\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d67754c8d7073d5d2b43c742073a762::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d67754c8d7073d5d2b43c742073a762::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d67754c8d7073d5d2b43c742073a762::$classMap;

        }, null, ClassLoader::class);
    }
}
