<?php

// GithubUpdater
if ( is_admin() ) {
	$repo = 'afragen/Github-Theme-Updater';
	global $wp_version;
	include_once( 'updater.php' );
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
			'readme' => 'README.md',
			'access_token' => '',
		);
	new WP_GitHub_Updater($config);
}
