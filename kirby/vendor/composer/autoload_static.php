<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited0de8c7798f30df0a52cfa409a2a04d
{
    public static $files = array (
        'c594688b3441835d5575f3085da4a242' => __DIR__ . '/..' . '/webonyx/graphql-php/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/getkirby/filesystem/src',
            2 => __DIR__ . '/..' . '/getkirby/toolkit/src',
            3 => __DIR__ . '/..' . '/getkirby/data/src',
            4 => __DIR__ . '/..' . '/getkirby/http/src',
            5 => __DIR__ . '/..' . '/getkirby/cms/src',
        ),
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited0de8c7798f30df0a52cfa409a2a04d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited0de8c7798f30df0a52cfa409a2a04d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}