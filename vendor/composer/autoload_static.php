<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9820b6f9a9bb0b7662c368b33feb8f76
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Farm\\Services\\' => 14,
            'Farm\\Reporters\\' => 15,
            'Farm\\Interfaces\\' => 16,
            'Farm\\Animals\\' => 13,
            'Farm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Farm\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Services',
        ),
        'Farm\\Reporters\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Reporters',
        ),
        'Farm\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Interfaces',
        ),
        'Farm\\Animals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Animals',
        ),
        'Farm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9820b6f9a9bb0b7662c368b33feb8f76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9820b6f9a9bb0b7662c368b33feb8f76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9820b6f9a9bb0b7662c368b33feb8f76::$classMap;

        }, null, ClassLoader::class);
    }
}
