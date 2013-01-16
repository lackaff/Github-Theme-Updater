<?php
/*
Plugin Name: Theme Updater - Revised
Plugin URI: https://github.com/afragen/Github-Theme-Updater
Description: A theme updater for GitHub hosted Wordpress themes.  This Wordpress plugin automatically checks GitHub for theme updates and enables automatic install.  For more information read <a href="https://github.com/UCF/Theme-Updater/blob/master/readme.markdown">plugin documentation</a>. Sadly this plugin doesn't look like it's actively supported.
Author: Andy Fragen
Original Author: Douglas Beck
Original Author: UCF Web Communications
Original Vers: 1.3.7
Version: 1.5.7.4

This is dummy to load original files and use for automatic updating.
*/

//Load base class
require_once( 'updater.php' );

//Load GithubUpdater
if ( is_admin() ) {
	$repo = 'afragen/Github-Theme-Updater';
	global $wp_version;
	include_once( dirname(__FILE__).'/updater/updater.php' );
		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => basename($repo),
			'api_url' => 'https://api.github.com/repos/'.$repo,
			'raw_url' => 'https://raw.github.com/'.$repo.'/master',
			'github_url' => 'https://github.com/'.$repo,
			'zip_url' => 'https://github.com/'.$repo.'/zipball/master',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'readme.txt',
			'access_token' => '',
		);
	new WP_GitHub_Updater($config);
}
