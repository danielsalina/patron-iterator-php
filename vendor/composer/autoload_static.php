<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit498f90107024c3cf8a85c81ec6768c8e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'I' => 
        array (
            'Iterators\\' => 10,
        ),
        'C' => 
        array (
            'Collections\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Iterators\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/iterators',
        ),
        'Collections\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/collections',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit498f90107024c3cf8a85c81ec6768c8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit498f90107024c3cf8a85c81ec6768c8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit498f90107024c3cf8a85c81ec6768c8e::$classMap;

        }, null, ClassLoader::class);
    }
}
