<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd7ba4331b5dd6de7541f989c5dbcdbb
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\PdfFiles\\' => 14,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\PdfFiles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd7ba4331b5dd6de7541f989c5dbcdbb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd7ba4331b5dd6de7541f989c5dbcdbb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd7ba4331b5dd6de7541f989c5dbcdbb::$classMap;

        }, null, ClassLoader::class);
    }
}
