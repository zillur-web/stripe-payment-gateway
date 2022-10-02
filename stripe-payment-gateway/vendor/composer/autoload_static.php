<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38896d57b6fa0ebb8ce7cd121fa97b80
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38896d57b6fa0ebb8ce7cd121fa97b80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38896d57b6fa0ebb8ce7cd121fa97b80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38896d57b6fa0ebb8ce7cd121fa97b80::$classMap;

        }, null, ClassLoader::class);
    }
}