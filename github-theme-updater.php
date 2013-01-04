<?php
/*
Plugin Name: Theme Updater - Revised
Plugin URI: https://github.com/afragen/Github-Theme-Updater
Description: A theme updater for GitHub hosted Wordpress themes.  This Wordpress plugin automatically checks GitHub for theme updates and enables automatic install.  For more information read <a href="https://github.com/UCF/Theme-Updater/blob/master/readme.markdown">plugin documentation</a>. Sadly this plugin doesn't look like it's actively supported.
Author: Andy Fragen
Original Author: Douglas Beck
Original Author: UCF Web Communications
Original Vers: 1.3.7
Version: 1.5.7.1

This is dummy to load original files and use for automatic updating.
*/

//Load base class
require_once( 'updater.php' );

//Load GithubUpdater
require_once( dirname(__FILE__).'/updater/updater-settings.php');
