<?php

function buildMenu() {
    global $CFG;
    $R = $CFG->apphome . '/';
    $T = $CFG->wwwroot . '/';
    $adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
    $set = new \Tsugi\UI\MenuSet();
    $set->setHome('<img src="'.$CFG->apphome.'/logo.png" style="height: 1em;" alt="Tsugu Cloud"/>', $CFG->apphome);

    $set->addLeft('App Store', $T.'store');

    if ( isset($_SESSION['id']) ) {
        $submenu = new \Tsugi\UI\Menu();
        $submenu->addLink('Profile', $R.'profile');
        if ( $CFG->providekeys ) {
            $submenu->addLink('LMS Integration', $T . 'settings');
        }
        if ( isset($CFG->google_classroom_secret) ) {
            $submenu->addLink('Google Classroom', $T.'gclass/login');
        }

        $submenu->addLink('Privacy', $R.'about/policies/privacy');
        $submenu->addLink('Data Retention', $R.'about/policies/data-retention');
        $submenu->addLink('Service Level Agreement', $R.'about/policies/service-level-agreement');
        if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
            $submenu->addLink('Administer', $T . 'admin/');
        }
        $submenu->addLink('Logout', $R.'logout');
        if ( isset($_SESSION['avatar']) ) {
            $set->addRight('<img src="'.$_SESSION['avatar'].'" title="'.htmlentities(__('User Profile Menu - Includes logout')).'" style="height: 2em;"/>', $submenu);
            // htmlentities($_SESSION['displayname']), $submenu);
        } else {
            $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
        }
    } else {
        $set->addRight('Login', $T.'login.php');
    }

    return $set;
}

