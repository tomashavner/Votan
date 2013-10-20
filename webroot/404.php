<?php 
/**
 * This is a Votan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $votan variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Votan container.
$votan['title'] = "404";
$votan['header'] = "";
$votan['main'] = "This is a Votan 404. Document is not here.";
$votan['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Votan.
include(VOTAN_THEME_PATH);
