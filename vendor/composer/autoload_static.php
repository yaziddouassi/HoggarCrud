<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit822b23568f41a30f2bd2543e28bb0e67
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hoggar\\Hoggar\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hoggar\\Hoggar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit822b23568f41a30f2bd2543e28bb0e67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit822b23568f41a30f2bd2543e28bb0e67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit822b23568f41a30f2bd2543e28bb0e67::$classMap;

        }, null, ClassLoader::class);
    }
}
