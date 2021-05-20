<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcab57e02248c7b8e1bd63f4860bf7ea7
{
    public static $files = array (
        'ec4f5a506a757679b66d8d76d24a68e0' => __DIR__ . '/..' . '/db/db.php',
        '327f93748353932c73c4101aa6e19dd6' => __DIR__ . '/..' . '/global/compact.php',
        'f1e705792e0857bea0c4303afecd11ba' => __DIR__ . '/..' . '/Models/Model.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcab57e02248c7b8e1bd63f4860bf7ea7::$classMap;

        }, null, ClassLoader::class);
    }
}
