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
* ThinkPHP practice profile
 * Please do not modify the file if you want to override the value of routine configuration can be set and match practice in the application configuration file configuration items
 * Configure any case name, the system will be unified to lower case
 * All configuration parameters can be changed dynamically before the commencement
 */
defined('THINK_PATH') or exit();
return  array(
    /* 应用设定 */
    'APP_FILE_CASE'         =>  false,   // check whether the case file to the Windows platform effectively
    'APP_USE_NAMESPACE'     =>  true,    // whether to use the application Library namespace
    'APP_SUB_DOMAIN_DEPLOY' =>  false,   // whether to open the sub-domain deployment
    'APP_SUB_DOMAIN_RULES'  =>  array(), // subdomain deploy rules
    'APP_DOMAIN_SUFFIX'     =>  '', // if the domain name suffix is ​​com .net like the suffix must be set    
    'ACTION_SUFFIX'         =>  '', // Operation suffix
    'MULTI_MODULE'          =>  true, // whether to allow multi-module must be set to false if DEFAULT_MODULE
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'),
    'CONTROLLER_LEVEL'      =>  1,
    'APP_AUTOLOAD_LAYER'    =>  'Controller,Model', //  libraries loaded automatically effective after closing APP_USE_NAMESPACE
    'APP_AUTOLOAD_PATH'     =>  '', // path is automatically loaded after closing APP_USE_NAMESPACE effective

    /* Cookie设置 */
    'COOKIE_EXPIRE'         =>  0,    // Cookies valid
    'COOKIE_DOMAIN'         =>  '',      // Cookie valid domain name
    'COOKIE_PATH'           =>  '/',     // Cookie path
    'COOKIE_PREFIX'         =>  '',      // Cookie prefix to avoid conflicts
    'COOKIE_HTTPONLY'       =>  '',      // Cookie httponly settings

  / * Default setting * /
    'DEFAULT_M_LAYER'       => 'Model', // default model layer name
    'DEFAULT_C_LAYER'       => 'Controller', // default controller layer name
    'DEFAULT_V_LAYER'       => 'View', // the default view layer name
    'DEFAULT_LANG'          => 'zh-cn', // default language
    'DEFAULT_THEME'         => '', // default template theme name
    'DEFAULT_MODULE'        => 'Home', // default module
    'DEFAULT_CONTROLLER'    => 'Index', // default controller name
    'DEFAULT_ACTION'        => 'index', // default action name
    'DEFAULT_CHARSET'       => 'utf-8', // default output encoding
    'DEFAULT_TIMEZONE'      => 'PRC', // default time zone
    'DEFAULT_AJAX_RETURN'   => 'JSON', // default AJAX return data format, optional JSON XML ...
    'DEFAULT_JSONP_HANDLER' => 'jsonpReturn', // default processing method JSONP format returned
    'DEFAULT_FILTER'        => 'htmlspecialchars', // default parameter filtering method I used to function ...

    /* Set the database */
    'DB_TYPE'               => 'mysqli', // database type
    'DB_HOST'               => '', // server address
    'DB_NAME'               => '', // database name
    'DB_USER'               => '', // username
    'DB_PWD'                => '', // password
    'DB_PORT'               => '', // port
    'DB_PREFIX'             => '', // database table prefix
    'DB_FIELDTYPE_CHECK'    => false, // check whether the field type
    'DB_FIELDS_CACHE'       => true, // cache enable field
    'DB_CHARSET'            => 'utf8', // database encoding default to utf8
    'DB_DEPLOY_TYPE'        => 0, // database deployment: 0 centralized (single server), a distributed (master and slave servers)
    'DB_RW_SEPARATE'        => false, // whether to separate the database to read and write effective master-slave
    'DB_MASTER_NUM'         => 1, // separate read and write after the number of the primary server
    'DB_SLAVE_NO'           => '', // specify the number from the server
    'DB_SQL_BUILD_CACHE'    => false, // create SQL database query cache
    'DB_SQL_BUILD_QUEUE'    => 'file', // SQL cache buffer queue to support file xcache and apc
    'DB_SQL_BUILD_LENGTH'   => 20, // SQL cache queue length
    'DB_SQL_LOG'            => false, // SQL execution logging
    'DB_BIND_PARAM'         => false, // database automatically writes data parameter binding

    /* Data cache settings */
    'DATA_CACHE_TIME'       => 0, // 0 indicates permanently valid data buffer cache
    'DATA_CACHE_COMPRESS'   => false, // whether to compress the data buffer cache
    'DATA_CACHE_CHECK'      => false, // check whether data buffer cache
    'DATA_CACHE_PREFIX'     => '', // prefix cache
    'DATA_CACHE_TYPE'       => 'File', // cache data types supported: File | Db | Apc | Memcache | Shmop | Sqlite | Xcache | Apachenote | Eaccelerator
    'DATA_CACHE_PATH'       => TEMP_PATH, // cache path settings (File only effective manner cache)
    'DATA_CACHE_SUBDIR'     => false, // use cache subdirectory (subdirectories are created automatically based on the hash cache identifier)
    'DATA_PATH_LEVEL'       => 1, // cache subdirectory level

    /* Error  Setting*/
    'ERROR_MESSAGE'         => 'Page error! Please try again later ~ '// error message is displayed, non-debug mode is enabled
    'ERROR_PAGE'            => '', // wrong page orientation
    'SHOW_ERROR_MSG'        => true, // display an error message
    'TRACE_EXCEPTION'       => true, // TRACE throw an exception if an error message for the trace method
    'TRACE_MAX_RECORD'      => 100, // each level error messages maximum number of records


    /* Log Settings */
    'LOG_RECORD'            => false, // default no logging
    'LOG_TYPE'              => 'File', // default file type of logging mode
    'LOG_LEVEL'             => 'EMERG, ALERT, CRIT, ERR', // allow recording of the log level
    'LOG_FILE_SIZE'         => 2097152, // log file size limit
    'LOG_EXCEPTION_RECORD'  => false, // whether to record logs exception information

    /* SESSION  Setting */
    'SESSION_AUTO_START'    => true, // whether to automatically open the Session
    'SESSION_OPTIONS'       => array (), // session configuration array support type name id path expire domain parameters
    'SESSION_TYPE'          => '', // session hander type without default settings unless extended session hander drive
    'SESSION_PREFIX'        => '', // session prefix
    // 'VAR_SESSION_ID' => 'session_id', // sessionID variable submission

    /*Set the template engine */
    'TMPL_CONTENT_TYPE'     => 'text / html', // default template output types
    'TMPL_ACTION_ERROR'     => THINK_PATH.'Tpl / dispatch_jump.tpl ', // default error jump corresponding template file
    'TMPL_ACTION_SUCCESS'   => THINK_PATH.'Tpl / dispatch_jump.tpl ', // default template file corresponding jump success
    'TMPL_EXCEPTION_FILE'   => THINK_PATH.'Tpl / think_exception.tpl ', // exception page template file
    'TMPL_DETECT_THEME'     => false, // automatically detect template theme
    'TMPL_TEMPLATE_SUFFIX'  => '.html', // default template file suffixes
    'TMPL_FILE_DEPR'        => '/', // template file and ACTION_NAME between CONTROLLER_NAME

	// Set layout
    'TMPL_ENGINE_TYPE'      => 'Think', // default template engine, using the following settings are only valid Think template engine
    'TMPL_CACHFILE_SUFFIX'  => '.php', // default template cache suffix
    'TMPL_DENY_FUNC_LIST'   => 'echo, exit', // disable the function template engine
    'TMPL_DENY_PHP'         => false, // whether to disable the default template engine PHP native code
    'TMPL_L_DELIM'          => '{', // generic label template engine start tag
    'TMPL_R_DELIM'          => '}', // end tag tag common template engine
    'TMPL_VAR_IDENTIFY'     => 'array', // template variables identified. Blank automatically determine the parameters for the 'obj' means that the object
    'TMPL_STRIP_SPACE'      => true, // whether to remove the template file inside html spaces and line breaks
    'TMPL_CACHE_ON'         => true, // whether to open the template compilation cache, set to false then recompile every time
    'TMPL_CACHE_PREFIX'     => '', // prefix to identify the template cache can be dynamically changed
    'TMPL_CACHE_TIME'       => 0, // template cache is valid 0 permanent, (a digital value, unit: s)
    'TMPL_LAYOUT_ITEM'      => '{__CONTENT__}', // content layout template logo replacement
    'LAYOUT_ON'             => false, // whether to enable layout
    'LAYOUT_NAME'           => 'layout', // name defaults to the current layout layout


    // Think template engine tag library related settings
    'TAGLIB_BEGIN'          => '<', // start tag tag tag library
    'TAGLIB_END'            => '>', // tag library tag end tag
    'TAGLIB_LOAD'           => true, // whether to use other built-in tag library tag outside of the library, the default automatic detection
    'TAGLIB_BUILD_IN'       => 'cx', // built-in tag library name (label use necessary to specify the tag library name), separated by commas note resolution order
    'TAGLIB_PRE_LOAD'       => '', // need to load additional tag library (to be specified tag library name), multiple comma-separated
    
    / * URL settings * /
    'URL_CASE_INSENSITIVE'  => true, // default false indicates that the URL is case sensitive true indicates case-insensitive
    'URL_MODEL'             => 1, // URL access, optional parameters 0,1,2,3, representatives of the following four modes:
                                    // 0 (normal mode); 1 (PATHINFO mode); 2 (REWRITE mode); 3 (compatibility mode) is the default mode PATHINFO
    'URL_PATHINFO_DEPR'     => '/', under // PATHINFO mode, segmentation symbols among the parameters
    'URL_PATHINFO_FETCH'    => 'ORIG_PATH_INFO, REDIRECT_PATH_INFO, REDIRECT_URL', // for compatibility judgment PATH_INFO SERVER parameter substitution variables list
    'URL_REQUEST_URI'       => 'REQUEST_URI', // Get the current system variable page address defaults to REQUEST_URI
    'URL_HTML_SUFFIX'       => 'html', // pseudo-static URL suffix settings
    'URL_DENY_SUFFIX'       => 'ico | png | gif | jpg', // URL suffix prohibit access settings
    'URL_PARAMS_BIND'       => true, // URL variable is bound to a method parameter Action
    'URL_PARAMS_BIND_TYPE'  => 0, // URL variable binding type 1 0 by the variable name is bound to variable bindings order
    'URL_PARAMS_FILTER'     => false, // URL variable binding filter
    'URL_PARAMS_FILTER_TYPE' => '', // URL filtering method variable binding if it is empty call DEFAULT_FILTER
    'URL_ROUTER_ON'         => false, // whether to open the URL routing
    'URL_ROUTE_RULES'       => array (), // default routing rules for module
    'URL_MAP_RULES'         => array (), // URL mapping definition rules


    / * Set the system variable name * /
    'VAR_MODULE'            => 'm', // default module acquisition variable
    'VAR_ADDON'             => 'addon', // default namespace variable plug controller
    'VAR_CONTROLLER'        => 'c', // get the variable default controller
    'VAR_ACTION'            => 'a', // Get the default action variables
    'VAR_AJAX_SUBMIT'       => 'ajax', // default AJAX submit variable
    'VAR_JSONP_HANDLER'     => 'callback',
    'VAR_PATHINFO'          => 's', // variables such compatibility mode PATHINFO get? S = / module / action / id / 1 back parameter depends URL_PATHINFO_DEPR
    'VAR_TEMPLATE'          => 't', // default template switching variable

    'HTTP_CACHE_CONTROL'    => 'private', // web cache control
    'CHECK_APP_DIR'         => true, // check whether the application directory is created
    'FILE_UPLOAD_TYPE'      => 'Local', // file uploads
    'DATA_CRYPT_TYPE'       => 'Think', // data encryption

);
