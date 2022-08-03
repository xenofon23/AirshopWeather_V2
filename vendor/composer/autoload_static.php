<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbf2211cb7a03c741cd5ccd631702aab
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'J' => 
        array (
            'Jean85\\' => 7,
        ),
        'C' => 
        array (
            'Controls\\Router\\' => 16,
            'Controls\\Pages\\' => 15,
            'Controls\\Headers\\' => 17,
            'Controls\\Functions\\' => 19,
            'Controls\\Error\\' => 15,
            'Controls\\Database\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Jean85\\' => 
        array (
            0 => __DIR__ . '/..' . '/jean85/pretty-package-versions/src',
        ),
        'Controls\\Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Router',
        ),
        'Controls\\Pages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Pages',
        ),
        'Controls\\Headers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Headers',
        ),
        'Controls\\Functions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Functions',
        ),
        'Controls\\Error\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Error',
        ),
        'Controls\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controls/Database',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbf2211cb7a03c741cd5ccd631702aab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbf2211cb7a03c741cd5ccd631702aab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbf2211cb7a03c741cd5ccd631702aab::$classMap;

        }, null, ClassLoader::class);
    }
}
