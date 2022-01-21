<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03e340062dbf401610b047da4d8c6984
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03e340062dbf401610b047da4d8c6984::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03e340062dbf401610b047da4d8c6984::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03e340062dbf401610b047da4d8c6984::$classMap;

        }, null, ClassLoader::class);
    }
}
