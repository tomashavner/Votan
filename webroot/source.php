<?php 
/**
 * This is a Votan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $votan variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Votan container.
$votan['title'] = "Hello World";

$votan['header'] = <<<EOD
<img class='sitelogo' src='img/votan.png' alt='Votan Logo'/>
<span class='sitetitle'>Votan webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

// Add style for csource
$votan['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Votan container.
$votan['title'] = "Visa källkod";
$votan['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

$votan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Votan.
include(VOTAN_THEME_PATH);
