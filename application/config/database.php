<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',

	// ======DWVWLOPMENT SETTINGS====
	'username' => 'root',
	'password' => '',
	'database' => 'bsmart_forums',

// ===PRODUCTION SETTINGS=======
	// 'username' => 'bsmartbrands_job',
    // 'password' => 'bsmartbrands_job',
	// 'database' => 'bsmartbrands_job',

	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
