<?php
/**
 * Config-file for Votan. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Votan paths.
 *
 */
define('VOTAN_INSTALL_PATH', __DIR__ . '/..');
define('VOTAN_THEME_PATH', VOTAN_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(VOTAN_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();


/**
 * Create the Votan variable.
 *
 */
$votan = array();


/**
 * Site wide settings.
 *
 */
$votan['lang']         = 'sv';
$votan['title_append'] = ' | Votan en webbtemplate';

$votan['header'] = <<<EOD
<img class='sitelogo' src='img/votan.png' alt='Votan Logo'/>
<span class='sitetitle'>Votan webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$votan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/tomashavner/Votan'>Votan på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$votan['stylesheet'] = 'css/style.css';
$votan['stylesheets'] = array('css/style.css');
$votan['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$votan['modernizr'] = 'js/modernizr.js';
$votan['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$votan['jquery'] = null; // To disable jQuery
$votan['javascript_include'] = array();
//$votan['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$votan['google_analytics'] = null; // Set to null to disable google analytics
