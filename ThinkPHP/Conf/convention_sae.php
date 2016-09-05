<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2013 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: naomy <veroputput@qq.com>
// +----------------------------------------------------------------------

/**
 * SAE convention mode profile
  * Please do not modify the file if you want to override the value of routine configuration can be set and match practice in the application configuration file configuration items
  * Configure any case name, the system will be unified to lower case
  * All configuration parameters can be changed dynamically before the commencement
 */
defined('THINK_PATH') or exit();
$st = 	new SaeStorage();
return array(
	//Under SAE fixed configuration mysql
	'DB_TYPE'			=> 	'mysql',     // Database Type
	'DB_DEPLOY_TYPE'	=> 	1,
	'DB_RW_SEPARATE'	=>	true,
	'DB_HOST'			=> 	SAE_MYSQL_HOST_M.','.SAE_MYSQL_HOST_S, // server address
	'DB_NAME'			=> 	SAE_MYSQL_DB,        // Database name
	'DB_USER'			=> 	SAE_MYSQL_USER,    // username
	'DB_PWD'			=> 	SAE_MYSQL_PASS,         // password
	'DB_PORT'			=> 	SAE_MYSQL_PORT,        // port
	//Change template substitution variables, so that ordinary can be displayed on all platforms
	'TMPL_PARSE_STRING'	=>	array(
	  	// __PUBLIC__/upload  -->  /Public/upload -->http://appname-public.stor.sinaapp.com/upload
		'/Public/upload'	=>	$st->getUrl('public','upload')
	),
    'LOG_TYPE'			=>	'Sae',
	'DATA_CACHE_TYPE'	=>	'Memcachesae',
    'CHECK_APP_DIR'		=>	false
);
