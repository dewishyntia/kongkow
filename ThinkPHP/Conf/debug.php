<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: naomy <veroputput@qq.com>
// +----------------------------------------------------------------------

/**
 * ThinkPHP The default debug mode profile
 */
defined('THINK_PATH') or exit();
// Debug mode The following default settings can be redefined debug.php covered in the application configuration directory
return  array(
    'LOG_RECORD'            =>  true,  // Logging
    'LOG_EXCEPTION_RECORD'  =>  true,    // Whether to record logs exception information
    'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',  // Allow log record leve
    'DB_FIELDS_CACHE'       =>  false, // Field cache information
    'DB_SQL_LOG'            =>  true, // SQL record information
    'TMPL_CACHE_ON'         =>  false,        // Whether to open template compilation cache, set to false then recompile every time
    'TMPL_STRIP_SPACE'      =>  false,       // Whether inside the html template file to remove the spaces and line breaks
    'SHOW_ERROR_MSG'        =>  true,    // Error message
    'URL_CASE_INSENSITIVE'  =>  true,  // URL is case sensitive
  //  'APP_FILE_CASE'         =>  true, // Is the case, check the file on the Windows platform effectively
);
