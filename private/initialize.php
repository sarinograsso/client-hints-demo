<?php

// Define main project paths
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));

// Define all the private paths
const HELPERS_PATH = PRIVATE_PATH . '/helpers';
const VIEWS_PATH = PRIVATE_PATH . '/views';

// Define the root URL
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/');
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

// Require all helper functions
foreach (scandir(HELPERS_PATH) as $helper_file) {
    if ($helper_file !== '.' && $helper_file !== '..') {
        require_once HELPERS_PATH . '/' . $helper_file;
    }
}
