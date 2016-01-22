<?php 
/**
 * Index file where all magic happens
 * 
 * @author Artem Daniliants
 * @license http://www.gnu.org/licenses/gpl-3.0.en.html
 * @copyright 2016 LumoSpark OÜ All Rights Reserved
 */

// Autoload required libs
require_once('../vendor/autoload.php');

// Initialize F3
$app = \Base::instance();

// Load config file
$app->config('../config.ini');

//F3 autoloader of controllers etc
$app->set('AUTOLOAD', '../app/;../app/plugins/;../app/models/');

// Provide locales
$app->set('LOCALES','../app/dict/');

// Load Spark helper
$spark = new Spark($app);

// Make spark accessible anywhere
$app->set('spark', $spark);

// Set custom errors
$app->set('ONERROR',function($app){
    $app->status($app->get("ERROR.code"));
    echo \Template::instance()->render('error.html');
    $app->abort();
});

// Routes
$app->route('GET /','Controllers\Pages->index', $app->get('CACHE_TIMEOUT'));

// Run app
$app->run();