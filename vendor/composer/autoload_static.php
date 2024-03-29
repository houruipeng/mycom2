<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13532eb330c71d30f1614f442745b762
{
    public static $files = array (
        '4076650c7f15f467d9d8bfbffab75ea5' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pf\\arr\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pf\\arr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/my',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13532eb330c71d30f1614f442745b762::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13532eb330c71d30f1614f442745b762::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
