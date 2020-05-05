<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d8f3e66c72d0a2bb16c1be7dac3ca4d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d8f3e66c72d0a2bb16c1be7dac3ca4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d8f3e66c72d0a2bb16c1be7dac3ca4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
