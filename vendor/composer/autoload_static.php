<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4109e40f3ad74ce1a91f975cec11f20a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Styletools\\Styles\\' => 18,
            'Styletools\\Models\\' => 18,
            'Styletools\\Libs\\Router\\' => 23,
            'Styletools\\Libs\\Controller\\' => 27,
            'Styletools\\Libs\\Console\\' => 24,
            'Styletools\\Libs\\Components\\' => 27,
            'Styletools\\Libs\\' => 16,
            'Styletools\\Forms\\' => 17,
            'Styletools\\Controllers\\' => 23,
            'Styletools\\' => 11,
        ),
        'P' => 
        array (
            'Plasticbrain\\FlashMessages\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Styletools\\Styles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/styles',
        ),
        'Styletools\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/models',
        ),
        'Styletools\\Libs\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/styletools/router',
        ),
        'Styletools\\Libs\\Controller\\' => 
        array (
            0 => __DIR__ . '/..' . '/styletools/controller',
        ),
        'Styletools\\Libs\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/styletools/console',
        ),
        'Styletools\\Libs\\Components\\' => 
        array (
            0 => __DIR__ . '/..' . '/styletools/components',
        ),
        'Styletools\\Libs\\' => 
        array (
            0 => __DIR__ . '/..' . '/styletools/libs',
        ),
        'Styletools\\Forms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/forms',
        ),
        'Styletools\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/controllers',
        ),
        'Styletools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Plasticbrain\\FlashMessages\\' => 
        array (
            0 => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4109e40f3ad74ce1a91f975cec11f20a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4109e40f3ad74ce1a91f975cec11f20a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4109e40f3ad74ce1a91f975cec11f20a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
