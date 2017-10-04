<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb7c9a69656a9ec5d40c1c1063df39a8
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZwartsFormDataCleaner\\' => 22,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZwartsFormDataCleaner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb7c9a69656a9ec5d40c1c1063df39a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb7c9a69656a9ec5d40c1c1063df39a8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
