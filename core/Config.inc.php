<?php
/**
 * @file Config.inc.php
 * @author wanghe (hihu@qq.com)
 **/

//最低配置，几乎不修改
define('PI_CORE',PI_ROOT.'core'.DOT);
define('PI_UTIl',PI_ROOT.'util'.DOT);
define('PI_PIPE',PI_ROOT.'pipe'.DOT);
define('PIPE_HELPER',PI_PIPE.'helper'.DOT);

//配置文件加载位置和项目加载位置
if(!defined('COM_ROOT')) die('you must define COM_ROOT first~');
if(defined('COM_ROOT') && !defined('COM_CONF_PATH')){
	define('COM_CONF_PATH',COM_ROOT.'com'.DOT);
}
if(defined('PI_APP_ROOT') && !defined('APP_CONF_PATH')){
	define('APP_CONF_PATH',PI_APP_ROOT.'conf'.DOT);
}

define('EXPORT_ROOT',COM_ROOT.'export'.DOT);

//rpc内部调用或者网络错误的返回err_code标识
if(!defined('INNER_ERR')) define('INNER_ERR','_pi_inner_err_code');
if(!defined('INNER_RES_PACK')) define('INNER_RES_PACK','_pi_inner_err_code');

//inner api sign
Pi::set('global.innerapi_sign','kjsdgiu3kiusdf982o3sdfo034s');
Pi::set('global.innerapi_sign_name','_pi_inner_nm');

//db and cache and log
Pi::set('DbLib',PI_UTIL.'db'.DOT.'db.php');
Pi::set('MemcacheLib',PI_UTIL.'cache'.DOT.'Memcache.php');
Pi::set('RedisLib',PI_UTIL.'cache'.DOT.'Redis.php');
Pi::set('LogLib',PI_UTIL.'log'.DOT.'Log.php');

//其他配置
