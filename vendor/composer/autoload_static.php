<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit092bc371419eb8c41235ca441835d052
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zsgogo\\Test\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zsgogo\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit092bc371419eb8c41235ca441835d052::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit092bc371419eb8c41235ca441835d052::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit092bc371419eb8c41235ca441835d052::$classMap;

        }, null, ClassLoader::class);
    }
}
