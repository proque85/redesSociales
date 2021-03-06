<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda2cd5cac1df80a382c0ebb8d7595bab
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
            'FacebookAds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'FacebookAds\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-ads-sdk/src/FacebookAds',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda2cd5cac1df80a382c0ebb8d7595bab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda2cd5cac1df80a382c0ebb8d7595bab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda2cd5cac1df80a382c0ebb8d7595bab::$classMap;

        }, null, ClassLoader::class);
    }
}
