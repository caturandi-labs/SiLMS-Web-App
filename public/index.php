<?php

/**
 * SiLMS v0.1
 * SiLemes Aseloleeeeeee.................
 * @author andi
 * @link https://github.com/caturandi-labs/silemes
 * 
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// ambil dan terapkan config
require APP . 'config/config.php';

//gunakan helpers 
require APP . 'libs/helper.php';

// kelas inti nya ::::
require APP . 'core/application.php';
require APP . 'core/controller.php';

# instan aplikasi inti
$app = new Application();
