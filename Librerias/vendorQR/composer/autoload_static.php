<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42842e0a0f5a22b104e47d62664bd4dd
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'nguyenary\\QRCodeMonkey\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'nguyenary\\QRCodeMonkey\\' => 
        array (
            0 => __DIR__ . '/..' . '/nguyenary/qr-code-monkey/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42842e0a0f5a22b104e47d62664bd4dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42842e0a0f5a22b104e47d62664bd4dd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit42842e0a0f5a22b104e47d62664bd4dd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit42842e0a0f5a22b104e47d62664bd4dd::$classMap;

        }, null, ClassLoader::class);
    }
}
