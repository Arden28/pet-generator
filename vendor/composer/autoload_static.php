<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56385d26854227a085511480c5f1358d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arden28\\PetGenerator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arden28\\PetGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit56385d26854227a085511480c5f1358d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56385d26854227a085511480c5f1358d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56385d26854227a085511480c5f1358d::$classMap;

        }, null, ClassLoader::class);
    }
}
