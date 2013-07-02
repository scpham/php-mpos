<?php

// Make sure we are called from index.php
if (!defined('SECURITY'))
    die('Hacking attempt');

$debug->append('Loading Smarty libraries', 2);
define('SMARTY_DIR', INCLUDE_DIR . '/smarty/libs/');

// Include the actual smarty class file
include(SMARTY_DIR . 'Smarty.class.php');

// We initialize smarty here
$debug->append('Instantiating Smarty Object', 3);
$smarty = new Smarty;

// Assign our local paths
$debug->append('Define Smarty Paths', 3);
$smarty->template_dir = BASEPATH . 'templates/' . THEME . '/';
$smarty->compile_dir = BASEPATH . 'templates/compile/';

// Optional smarty caching, check Smarty documentation for details
$smarty->caching = $config['smarty']['cache'];
$smarty->cache_lifetime = $config['smarty']['cache_lifetime'];
$smarty->cache_dir = BASEPATH . "templates/cache";
?>
