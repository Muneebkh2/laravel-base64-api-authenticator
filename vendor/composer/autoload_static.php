<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9419a5193bd33b7de294781ef82f14cd
{
    public static $prefixLengthsPsr4 = array (
        'M' =>
        array (
            'Muneebkh2\\Base64ApiAuthenticator\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Muneebkh2\\Base64ApiAuthenticator\\' =>
        array (
            0 => __DIR__ . '/../srca',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9419a5193bd33b7de294781ef82f14cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9419a5193bd33b7de294781ef82f14cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9419a5193bd33b7de294781ef82f14cd::$classMap;

        }, null, ClassLoader::class);
    }
}