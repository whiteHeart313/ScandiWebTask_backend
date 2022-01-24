<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cd46e3e0f0d8a900ba7387c40905657
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cd46e3e0f0d8a900ba7387c40905657::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cd46e3e0f0d8a900ba7387c40905657::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7cd46e3e0f0d8a900ba7387c40905657::$classMap;

        }, null, ClassLoader::class);
    }
}