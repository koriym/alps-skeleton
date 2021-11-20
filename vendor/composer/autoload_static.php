<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ac815bfd6e046d43079adaf552dae4d
{
    public static $files = array (
        'f94e61bace66fd80544d5a94b3c03e76' => __DIR__ . '/..' . '/koriym/app-state-diagram/vendor-xml2json/xml2json.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\JsonLint\\' => 14,
        ),
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'K' => 
        array (
            'Koriym\\XmlLoader\\' => 17,
            'Koriym\\DataFile\\' => 16,
            'Koriym\\AppStateDiagram\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'Koriym\\XmlLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/koriym/app-state-diagram/src-xml',
        ),
        'Koriym\\DataFile\\' => 
        array (
            0 => __DIR__ . '/..' . '/koriym/data-file/src',
        ),
        'Koriym\\AppStateDiagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/koriym/app-state-diagram/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ac815bfd6e046d43079adaf552dae4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ac815bfd6e046d43079adaf552dae4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ac815bfd6e046d43079adaf552dae4d::$classMap;

        }, null, ClassLoader::class);
    }
}
