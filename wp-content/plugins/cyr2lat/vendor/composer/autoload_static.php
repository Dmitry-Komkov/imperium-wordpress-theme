<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< HEAD
class ComposerStaticInit0714ade671e040cd271d9ffc07e5f3a4
{
    public static $files = array (
        '344a0f93a05b8ca362c22e39586db500' => __DIR__ . '/../..' . '/lib/polyfill-mbstring/bootstrap.php',
=======
class ComposerStaticInit9c026311b5ca4c5e55b1c6e8bf85d6c9
{
    public static $files = array (
        '08eca214f4d3690babeee667e1bd7ede' => __DIR__ . '/../..' . '/src/php/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CyrToLat\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CyrToLat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/php',
        ),
>>>>>>> update
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
<<<<<<< HEAD
        'Cyr_To_Lat\\ACF' => __DIR__ . '/../..' . '/src/php/class-acf.php',
        'Cyr_To_Lat\\Admin_Notices' => __DIR__ . '/../..' . '/src/php/class-admin-notices.php',
        'Cyr_To_Lat\\Conversion_Process' => __DIR__ . '/../..' . '/src/php/background-processes/class-conversion-process.php',
        'Cyr_To_Lat\\Conversion_Tables' => __DIR__ . '/../..' . '/src/php/class-conversion-tables.php',
        'Cyr_To_Lat\\Converter' => __DIR__ . '/../..' . '/src/php/class-converter.php',
        'Cyr_To_Lat\\KAGG\\WP_Background_Processing\\WP_Async_Request' => __DIR__ . '/../..' . '/lib/wp-background-processing/class-wp-async-request.php',
        'Cyr_To_Lat\\KAGG\\WP_Background_Processing\\WP_Background_Process' => __DIR__ . '/../..' . '/lib/wp-background-processing/class-wp-background-process.php',
        'Cyr_To_Lat\\Main' => __DIR__ . '/../..' . '/src/php/class-main.php',
        'Cyr_To_Lat\\Post_Conversion_Process' => __DIR__ . '/../..' . '/src/php/background-processes/class-post-conversion-process.php',
        'Cyr_To_Lat\\Request' => __DIR__ . '/../..' . '/src/php/class-request.php',
        'Cyr_To_Lat\\Requirements' => __DIR__ . '/../..' . '/src/php/class-requirements.php',
        'Cyr_To_Lat\\Settings\\Abstracts\\SettingsBase' => __DIR__ . '/../..' . '/src/php/Settings/Abstracts/SettingsBase.php',
        'Cyr_To_Lat\\Settings\\Abstracts\\SettingsInterface' => __DIR__ . '/../..' . '/src/php/Settings/Abstracts/SettingsInterface.php',
        'Cyr_To_Lat\\Settings\\Converter' => __DIR__ . '/../..' . '/src/php/Settings/Converter.php',
        'Cyr_To_Lat\\Settings\\PluginSettingsBase' => __DIR__ . '/../..' . '/src/php/Settings/PluginSettingsBase.php',
        'Cyr_To_Lat\\Settings\\Settings' => __DIR__ . '/../..' . '/src/php/Settings/Settings.php',
        'Cyr_To_Lat\\Settings\\Tables' => __DIR__ . '/../..' . '/src/php/Settings/Tables.php',
        'Cyr_To_Lat\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/../..' . '/lib/polyfill-mbstring/Mbstring.php',
        'Cyr_To_Lat\\Term_Conversion_Process' => __DIR__ . '/../..' . '/src/php/background-processes/class-term-conversion-process.php',
        'Cyr_To_Lat\\WP_CLI' => __DIR__ . '/../..' . '/src/php/class-wp-cli.php',
=======
        'CyrToLat\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/../..' . '/libs/polyfill-mbstring/Mbstring.php',
        'CyrToLat\\WP_Background_Processing\\WP_Async_Request' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-async-request.php',
        'CyrToLat\\WP_Background_Processing\\WP_Background_Process' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-background-process.php',
>>>>>>> update
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< HEAD
            $loader->classMap = ComposerStaticInit0714ade671e040cd271d9ffc07e5f3a4::$classMap;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c026311b5ca4c5e55b1c6e8bf85d6c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c026311b5ca4c5e55b1c6e8bf85d6c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c026311b5ca4c5e55b1c6e8bf85d6c9::$classMap;
>>>>>>> update

        }, null, ClassLoader::class);
    }
}
