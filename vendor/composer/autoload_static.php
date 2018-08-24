<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit718b9465c5a1e3fe9b751dd4749a6ddd
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'C' => 
        array (
            'ChangelogServer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit',
        ),
        'ChangelogServer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ChangelogServer\\Exceptions\\InvalidVersion' => __DIR__ . '/../..' . '/src/Exceptions/InvalidVersion.php',
        'ChangelogServer\\Request' => __DIR__ . '/../..' . '/src/Request.php',
        'ChangelogServer\\Response' => __DIR__ . '/../..' . '/src/Response.php',
        'Tests\\RequestTest' => __DIR__ . '/../..' . '/tests/unit/RequestTest.php',
        'Tests\\ResponseTest' => __DIR__ . '/../..' . '/tests/unit/ResponseTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit718b9465c5a1e3fe9b751dd4749a6ddd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit718b9465c5a1e3fe9b751dd4749a6ddd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit718b9465c5a1e3fe9b751dd4749a6ddd::$classMap;

        }, null, ClassLoader::class);
    }
}
