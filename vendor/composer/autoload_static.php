<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb701f5c0622b14765885afb2f2e96c4c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb701f5c0622b14765885afb2f2e96c4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb701f5c0622b14765885afb2f2e96c4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb701f5c0622b14765885afb2f2e96c4c::$classMap;

        }, null, ClassLoader::class);
    }
}
