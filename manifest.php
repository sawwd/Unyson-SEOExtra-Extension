<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'SEO Extra', 'fw' );
$manifest['description'] = __(
	'This extension will enable you to have a fully optimized WordPress website'
	.' by adding optimized meta titles, keywords and descriptions.'
	.' It extends the default SEO Extension',
	'fw'
);
$manifest['github_repo'] = 'https://github.com/sawwd/Unyson-SEO-Extra-Extension';
$manifest['author'] = 'Sawwd';
$manifest['author_uri'] = 'http://sawwd.com/';
$manifest['version'] = '1.0.0';
$manifest['display'] = true;
$manifest['standalone'] = true;

$manifest['github_update'] = 'sawwd/Unyson-SEO-Extra-Extension';
