<?php
// you may need to setup autoloading or include path if you're not using composer autoloading
// set_include_path($path . PATH_SEPARATOR . get_include_path());

// older apps may depend on server variables being set
// $_SERVER['HTTP_HOST'] = 'localhost';
// $_SERVER['SERVER_PORT'] = 80;
// $_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'];
// $_SERVER['SERVER_ADDR'] = '127.0.0.1';
// $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
// $_SERVER['REQUEST_URI'] = '/';
// $_SERVER['QUERY_STRING'] = '';

// set memory limit as neccessary
// ini_set('memory_limit', '256M');

// test root is useful when you need to refer to certain files in tests directory
define('TESTS_ROOT', __DIR__);

// add whatever you need to have set up before tests are run
// (db connection, session initialization, etc.)
