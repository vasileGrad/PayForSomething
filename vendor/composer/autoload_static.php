<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd848efe9ae3b6252dd1e27539403e4fd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd848efe9ae3b6252dd1e27539403e4fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd848efe9ae3b6252dd1e27539403e4fd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd848efe9ae3b6252dd1e27539403e4fd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
