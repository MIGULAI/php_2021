<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bb7fe5cefbae9f7e30dbbb20d7b8f6e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Windwalker\\Crypt\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Windwalker\\Crypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/windwalker/crypt',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bb7fe5cefbae9f7e30dbbb20d7b8f6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bb7fe5cefbae9f7e30dbbb20d7b8f6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bb7fe5cefbae9f7e30dbbb20d7b8f6e::$classMap;

        }, null, ClassLoader::class);
    }
}
