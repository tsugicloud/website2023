<?php
/**
 * These are some configuration variables that are not secure / sensitive
 *
 * This file is included at the end of tsugi/config.php
 */

// This is how the system will refer to itself.
$CFG->servicename = 'TsugiCloud';
$CFG->servicedesc = false;

$CFG->theme = array(
    "primary" => "#040404", //default color for nav background, splash background, buttons, text of tool menu
    "secondary" => "#EEEEEE", // Nav text and nav item border color, background of tool menu
    "text" => "#111111", // Standard copy color
    "text-light" => "#5E5E5E", // A lighter version of the standard text color for elements like "small"
    "font-url" => "https://fonts.googleapis.com/css?family=Roboto:400", // Optional custom font url for using Google fonts
    "font-family" => "'Roboto', Corbel, Avenir, 'Lucida Grande', 'Lucida Sans', sans-serif", // Font family
    "font-size" => "14px", // This is the base font size used for body copy. Headers,etc. are scaled off this value
);


// $CFG->context_title = "TsugiCloud.org";

// $CFG->lessons = $CFG->dirroot.'/../lessons.json';

// $CFG->giftquizzes = $CFG->dirroot.'/../dj4e-private/quiz';

// $CFG->youtube_url = $CFG->apphome . '/mod/youtube/';

// $CFG->tdiscus = $CFG->apphome . '/mod/tdiscus/';

// $CFG->launcherror = $CFG->apphome . "/launcherror";

$buildmenu = $CFG->dirroot."/../buildmenu.php";
if ( file_exists($buildmenu) ) {
    require_once $buildmenu;
    $CFG->defaultmenu = buildMenu();
}


