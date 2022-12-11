<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8da566be6313286cb4fcb3ab243a0b6e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Otus\\Task06\\App\\' => 16,
            'Otus\\Task06\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Otus\\Task06\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Otus\\Task06\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8da566be6313286cb4fcb3ab243a0b6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8da566be6313286cb4fcb3ab243a0b6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8da566be6313286cb4fcb3ab243a0b6e::$classMap;

        }, null, ClassLoader::class);
    }
}
