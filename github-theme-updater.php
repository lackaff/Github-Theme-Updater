<?php
/*
Plugin Name: Theme Updater
Plugin URI: https://github.com/UCF/Theme-Updater
Description: A theme updater for GitHub hosted Wordpress themes.  This Wordpress plugin automatically checks GitHub for theme updates and enables automatic install.  For more information read <a href="https://github.com/UCF/Theme-Updater/blob/master/readme.markdown">plugin documentation</a>.
Author: Douglas Beck
Author: UCF Web Communications
Version: 1.3.7

This is dummy to load original files and use for automatic updating.
*/

// We'll use PHP 5.2 syntax to get the plugin directory
define('GTU_DIR', dirname(__FILE__));
define('GTU_CLASSES', GTU_DIR.'/classes');
define('GTU_INCLUDES', GTU_DIR.'/includes');
//define('GTU_VIEWS', GTU_DIR.'/views');
//define('GTU_RESOURCES', plugin_dir_url(__FILE__).'resources');
define('GTU_INC', GTU_DIR.'/inc');
define('GTU_GIT', 'Github-Theme-Updater' );

//Load base class
require_once( GTU_INC.'/gtu-updater.php' );

// GithubUpdater
if ( is_admin() ) {
	global $wp_version;
	include_once( GTU_INCLUDES.'/updater.php' );
	$config = array(		
		'slug' => plugin_basename(__FILE__),
		'proper_folder_name' => dirname( plugin_basename(__FILE__) ),
		'api_url' => 'https://api.github.com/repos/afragen/'.GTU_GIT,
		'raw_url' => 'https://raw.github.com/afragen/'.GTU_GIT.'/master',
		'github_url' => 'https://github.com/afragen/'.GTU_GIT,
		'zip_url' => 'https://github.com/afragen/'.GTU_GIT.'/zipball/master',
		'sslverify' => true,
		'requires' => $wp_version,
		'tested' => $wp_version,
		'readme' => 'readme.txt'

	);
	new WPGitHubUpdater($config);
}
