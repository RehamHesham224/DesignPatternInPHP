<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1033199e2c7c6d1e65962ba6e02cc7ca
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TokenAuth\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TokenAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/TokenAuth',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1033199e2c7c6d1e65962ba6e02cc7ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1033199e2c7c6d1e65962ba6e02cc7ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1033199e2c7c6d1e65962ba6e02cc7ca::$classMap;

        }, null, ClassLoader::class);
    }
}
