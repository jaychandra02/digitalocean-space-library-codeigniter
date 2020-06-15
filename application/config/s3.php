<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Use SSL
|--------------------------------------------------------------------------
|
| Run this over HTTP or HTTPS. HTTPS (SSL) is more secure but can cause problems
| on incorrectly configured servers.
|
*/

$config['use_ssl'] = FALSE;

/*
|--------------------------------------------------------------------------
| Verify Peer
|--------------------------------------------------------------------------
|
| Enable verification of the HTTPS (SSL) certificate against the local CA
| certificate store.
|
*/

$config['verify_peer'] = FALSE;

/*
|--------------------------------------------------------------------------
| Access Key
|--------------------------------------------------------------------------
|
| Your Digital Ocean Space S3 access key.
|
*/

$config['access_key'] = '';

/*
|--------------------------------------------------------------------------
| Secret Key
|--------------------------------------------------------------------------
|
| Your Digital Ocean Space S3 Secret Key.
|
*/

$config['secret_key'] = '';

/*
|--------------------------------------------------------------------------
| Bucket Name
|--------------------------------------------------------------------------
|
| Your Digital Ocean Space Bucket Name.
|
*/

$config['bucket_name'] = '';

/*
|--------------------------------------------------------------------------
| Bucket Folder Name
|--------------------------------------------------------------------------
|
| Your Digital Ocean Space Bucket Folder Name.
|
*/

$config['folder_name'] = '';

/*
|--------------------------------------------------------------------------
| Space Endpoint
|--------------------------------------------------------------------------
|
| Your Digital Ocean Space endpoin i.e sgp1.digitaloceanspaces.com
|
*/

$config['s3_url'] = 'sgp1.digitaloceanspaces.com';

/*
|--------------------------------------------------------------------------
| Use Enviroment?
|--------------------------------------------------------------------------
|
| Get Settings from enviroment instead of this file? 
| Used as best-practice on Heroku
|
*/

$config['get_from_enviroment'] = FALSE;

/*
|--------------------------------------------------------------------------
| Access Key Name
|--------------------------------------------------------------------------
|
| Name for access key in enviroment
|
*/
$config['access_key_envname'] = '';

/*
|--------------------------------------------------------------------------
| Access Key Name
|--------------------------------------------------------------------------
|
| Name for access key in enviroment
|
*/
$config['secret_key_envname'] = '';

/*
|--------------------------------------------------------------------------
| If get from enviroment, do so and overwrite fixed vars above
|--------------------------------------------------------------------------
|
*/

if ($config['get_from_enviroment']){
	$config['access_key'] = getenv($config['access_key_envname']);
	$config['secret_key'] = getenv($config['secret_key_envname']);

}