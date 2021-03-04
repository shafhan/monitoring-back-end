<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4283669f9076711d919250eeda4b425d
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Operation\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Operation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4283669f9076711d919250eeda4b425d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4283669f9076711d919250eeda4b425d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4283669f9076711d919250eeda4b425d::$classMap;

        }, null, ClassLoader::class);
    }
}
