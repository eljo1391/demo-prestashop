<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd795849c57a4ef00c1feb42e8958b3a9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd795849c57a4ef00c1feb42e8958b3a9', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd795849c57a4ef00c1feb42e8958b3a9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd795849c57a4ef00c1feb42e8958b3a9::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd795849c57a4ef00c1feb42e8958b3a9::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired795849c57a4ef00c1feb42e8958b3a9($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired795849c57a4ef00c1feb42e8958b3a9($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}