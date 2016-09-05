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
 * ThinkPHP Directory creation and initialization
 */
defined('THINK_PATH') or exit();

// Check the application directory structure is created automatically if it does not exist
if(!is_dir(COMMON_PATH)) {
    // Create a directory structure
    build_app_dir();
}elseif(!is_dir(LOG_PATH)){
    // Check the cache directory
    check_runtime();
}

// Check the cache directory(Runtime) If it does not exist automatically creates
function check_runtime() {
    if(!is_dir(RUNTIME_PATH)) {
        mkdir(RUNTIME_PATH);
    }elseif(!is_writeable(RUNTIME_PATH)) {
        header('Content-Type:text/html; charset=utf-8');
        exit('table of Contents [ '.RUNTIME_PATH.' ] not write!');
    }
    mkdir(CACHE_PATH);  // Template cache directory
    if(!is_dir(LOG_PATH))   mkdir(LOG_PATH);    // Log directory
    if(!is_dir(TEMP_PATH))  mkdir(TEMP_PATH);   // data cache directory
    if(!is_dir(DATA_PATH))  mkdir(DATA_PATH);   //  data file directory
    return true;
}

// Create the application directory structure
function build_app_dir() {
    // if not created automatically created
    if(!is_dir(APP_PATH)) mkdir(APP_PATH,0755,true);
    if(is_writeable(APP_PATH)) {
        $dirs  = array(
            COMMON_PATH,
            COMMON_PATH.'Common/',
            CONF_PATH,
            APP_PATH.C('DEFAULT_MODULE').'/',
            APP_PATH.C('DEFAULT_MODULE').'/Common/',
            APP_PATH.C('DEFAULT_MODULE').'/Controller/',
            APP_PATH.C('DEFAULT_MODULE').'/Model/',
            APP_PATH.C('DEFAULT_MODULE').'/Conf/',
            APP_PATH.C('DEFAULT_MODULE').'/View/',
            RUNTIME_PATH,
            CACHE_PATH,
            LOG_PATH,
            TEMP_PATH,
            DATA_PATH,
            );
        foreach ($dirs as $dir){
            if(!is_dir($dir))  mkdir($dir,0755,true);
        }
        // Write directory security document
        build_dir_secure($dirs);
        // Write the initial configuration file
        if(!is_file(CONF_PATH.'config.php'))
            file_put_contents(CONF_PATH.'config.php',"<?php\nreturn array(\n\t//'ConfigurationItem'=>'Configurationvalues'\n);");
        // Write test Action
        build_first_action();
    }else{
        header('Content-Type:text/html; charset=utf-8');
        exit('Application Directory['.APP_PATH.']Not writable, the directory can not be generated automatically! <BR> Manually build the project directory ~');
    }
}

// Create Test Action
function build_first_action() {
    $file   =   APP_PATH.C('DEFAULT_MODULE').'/Controller/IndexController'.EXT;
    if(!is_file($file)){
        $content = file_get_contents(THINK_PATH.'Tpl/default_index.tpl');
        file_put_contents($file,$content);
    }
}

// Build directory security document
function build_dir_secure($dirs=array()) {
    // Directory Security written (enabled by default)
    defined('BUILD_DIR_SECURE')  or define('BUILD_DIR_SECURE',    true);
    if(BUILD_DIR_SECURE) {
        defined('DIR_SECURE_FILENAME')  or define('DIR_SECURE_FILENAME',    'userList.html');
        defined('DIR_SECURE_CONTENT')   or define('DIR_SECURE_CONTENT',     ' ');
        // Directory Security automatically written document
        $content = DIR_SECURE_CONTENT;
        $files = explode(',', DIR_SECURE_FILENAME);
        foreach ($files as $filename){
            foreach ($dirs as $dir)
                file_put_contents($dir.$filename,$content);
        }
    }
}
