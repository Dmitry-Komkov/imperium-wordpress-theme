<?php

// autoload.php @generated by Composer

if (PHP_VERSION_ID < 50600) {
<<<<<<< HEAD
    echo 'Composer 2.3.0 dropped support for autoloading on PHP <5.6 and you are running '.PHP_VERSION.', please upgrade PHP or use Composer 2.2 LTS via "composer self-update --2.2". Aborting.'.PHP_EOL;
    exit(1);
=======
    if (!headers_sent()) {
        header('HTTP/1.1 500 Internal Server Error');
    }
    $err = 'Composer 2.3.0 dropped support for autoloading on PHP <5.6 and you are running '.PHP_VERSION.', please upgrade PHP or use Composer 2.2 LTS via "composer self-update --2.2". Aborting.'.PHP_EOL;
    if (!ini_get('display_errors')) {
        if (PHP_SAPI === 'cli' || PHP_SAPI === 'phpdbg') {
            fwrite(STDERR, $err);
        } elseif (!headers_sent()) {
            echo $err;
        }
    }
    trigger_error(
        $err,
        E_USER_ERROR
    );
>>>>>>> update
}

require_once __DIR__ . '/composer/autoload_real.php';

<<<<<<< HEAD
return ComposerAutoloaderInit0714ade671e040cd271d9ffc07e5f3a4::getLoader();
=======
return ComposerAutoloaderInit9c026311b5ca4c5e55b1c6e8bf85d6c9::getLoader();
>>>>>>> update
