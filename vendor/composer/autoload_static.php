<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbee484fbcb98ba45566f17e8eb69e9b
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
        'App\\Calculadora' => __DIR__ . '/../..' . '/src/Calculadora.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbee484fbcb98ba45566f17e8eb69e9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbee484fbcb98ba45566f17e8eb69e9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbee484fbcb98ba45566f17e8eb69e9b::$classMap;

        }, null, ClassLoader::class);
    }
}
