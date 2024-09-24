<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee1329c1bd566e6a1337034420aa36af
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alcohol\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alcohol\\' => 
        array (
            0 => __DIR__ . '/..' . '/alcohol/iso4217',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee1329c1bd566e6a1337034420aa36af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee1329c1bd566e6a1337034420aa36af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee1329c1bd566e6a1337034420aa36af::$classMap;

        }, null, ClassLoader::class);
    }
}
