<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3335e93c3ffde9af4a83997c0bdd41e9
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3335e93c3ffde9af4a83997c0bdd41e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3335e93c3ffde9af4a83997c0bdd41e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3335e93c3ffde9af4a83997c0bdd41e9::$classMap;

        }, null, ClassLoader::class);
    }
}
