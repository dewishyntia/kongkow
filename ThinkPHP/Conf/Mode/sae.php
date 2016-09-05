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
 * ThinkPHP SAE application file schema definition 
 */
return array(
    // 配置文件
    'config'    =>  array(
        THINK_PATH.'Conf/convention.php',   // system configuration practices
        CONF_PATH.'config.php',      // apply common configuration
        THINK_PATH.'Conf/convention_sae.php',//[sae] sae practice configuration
    ),

    // Alias ​​definitions
    'alias'     =>  array(
        'Think\Log'               => CORE_PATH . 'Log'.EXT,
        'Think\Log\Driver\File'   => CORE_PATH . 'Log/Driver/File'.EXT,
        'Think\Exception'         => CORE_PATH . 'Exception'.EXT,
        'Think\Model'             => CORE_PATH . 'Model'.EXT,
        'Think\Db'                => CORE_PATH . 'Db'.EXT,
        'Think\Template'          => CORE_PATH . 'Template'.EXT,
        'Think\Cache'             => CORE_PATH . 'Cache'.EXT,
        'Think\Cache\Driver\File' => CORE_PATH . 'Cache/Driver/File'.EXT,
        'Think\Storage'           => CORE_PATH . 'Storage'.EXT,
    ),

     // Function and class files
    'core'      =>  array(
        THINK_PATH.'Common/functions.php',
        COMMON_PATH.'Common/function.php',
        CORE_PATH . 'Hook'.EXT,
        CORE_PATH . 'App'.EXT,
        CORE_PATH . 'Dispatcher'.EXT,
        //CORE_PATH . 'Log'.EXT,
        CORE_PATH . 'Route'.EXT,
        CORE_PATH . 'Controller'.EXT,
        CORE_PATH . 'View'.EXT,
        CORE_PATH . 'Behavior'.EXT,		
        BEHAVIOR_PATH . 'ReadHtmlCacheBehavior'.EXT,
        BEHAVIOR_PATH . 'ShowPageTraceBehavior'.EXT,
        BEHAVIOR_PATH . 'ParseTemplateBehavior'.EXT,
        BEHAVIOR_PATH . 'ContentReplaceBehavior'.EXT,
        BEHAVIOR_PATH . 'WriteHtmlCacheBehavior'.EXT,
    ),
    // Define the behavior extension
    'tags'  =>  array(
        'app_init'      =>  array(
        ),
        'app_begin'     =>  array(
            'Behavior\ReadHtmlCache', // read static cache
        ),
        'app_end'       =>  array(
            'Behavior\ShowPageTrace', // display the page Trace
        ),
        'path_info'     =>  array(),
        'action_begin'  =>  array(),
        'action_end'    =>  array(),
        'view_begin'    =>  array(),
        'view_parse'    =>  array(
            'Behavior\ParseTemplate', // template parsing support for PHP, built-in and third-party template engine template engine
        ),
        'template_filter'=> array(
            'Behavior\ContentReplace', // replace the template output
        ),
        'view_filter'   =>  array(
            'Behavior\WriteHtmlCache', // write static cache
        ),
        'view_end'      =>  array(),
    ),
);
