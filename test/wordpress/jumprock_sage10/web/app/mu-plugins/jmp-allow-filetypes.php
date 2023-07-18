<?php
/**
* Plugin Name: Allow MIME types
* Description: Allow additional MIME types to be uploaded to the media library.
* Version: 1.0.0
* Author: Fabio Politi
*/

add_filter( 'upload_mimes', function ( $types ) { 
	// aggiungere di seguito le estensioni dei file che si vogliono consentire
	
	return $types;
});