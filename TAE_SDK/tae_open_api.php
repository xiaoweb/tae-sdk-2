<?php
/**
 * 这个只是tae这边开放的基础服务的一个列表，这个目前只能是开发者编写代码的时候做一个指导，
 * 提升开发者的效率，不能再代码里直接include。
 * 如果是SDK开发者，则还可以调用SDK市场开放的接口
 * 如果是TOP开发者，则还可以 调用自己申请的top接口
 */

/**
 * FileStore
 */
class FileStoreService
{


    /**
     * 判断文件是否存在
     * @param string  $file_path   文件路径
     * @return true 存在, false 不存在
     */
    function isFileExist($file_path){
        return true;
    }

    /**
     * 创建文件夹
     * @param string $dir_path   文件夹路径
     * @return int 0代表成功，其他失败
     */
    function createDir($dir_path)
    {
        return 0;
    }

    /**
     * 获取文本文件的内容
     * @param string $file_path 文件路径
     * @return string file text     文件内容
     */
    function getFileText($file_path)
    {
        return "";
    }

    /**
     * 保存文本文件的内容
     * @param string $content  文件内容
     * @param  string $file_path      文件路径
     * @return true 成功，false 失败
     */
    function saveTextFile($content, $file_path)
    {
        return true;
    }

    /**
     * 保存二进制文件内容
     * @param array$content  文件内容字节数组
     * @param string $file_path    文件路径
     * @return true 成功，false 失败
     */
    function saveBinaryFile($content, $file_path)
    {
        return true;
    }

    /**
     * 获取二进制文件的内容
     * @param $file_path    文件路径
     * @return array            字节数组
     */
    function getBinaryFile($file_path)
    {
        return array();
    }

    /**
     * 删除文件
     * @param $file_path  文件路径
     * @return int 0代表成功，其他失败
     */
    function deleteFile($file_path)
    {
        return 0;
    }


}

/**
 * 淘宝分布式Cache
 */
class CacheService
{
    /**
     * 从cache中获取key对应的值
     * @param $key 缓存key
     * @return string  缓存值
     */
    function get($key)
    {
        return "";
    }
	
	/**
     * 从cache中获取多个key对应的值集合
     * @param $keys 多个Key值
     * @return string  缓存值
     */
    function mget($keys)
    {
        return array();
    }

    /**
     * 从缓存中删除eky
     * @param string $key  缓存key
     * @return true 成功，false 失败
     */
    function delete($key)
    {
             return true;
    }

    /**
     * 向缓存中添加值
     * @param string $key 缓存key
     * @param string $text  缓存值
     * @param int $expired   过期时间，单位为秒
     * @return true 成功，false 失败
     */
    function set($key, $text, $expired)
    {
            return true;
    }
}

/**
 * http fetch
 */
class FetchService{
         /**
     * 发送get请求，并获取返回内容
     * @param string $url 请求的url
     * @return string 请求的内容
     */
    function fetchByGet($url){

             return "" ;
    }

      /**
     * 发送post请求，并获取返回内容
     * @param string $url 请求的url
       * @param array $parameters 请求的参数
     * @return string 请求的内容
     */
    function post($url, $parameters){
            return "" ;

    }


}


/**
 * taobao distributed cache
 */
$cacheService = new CacheService();

/**
 * FileStore service
 */
$fileStoreService = new FileStoreService();

/**
 *  fetchurl  service
 */
$fetchService = new  FetchService();



/**
 *  cron  service
 *  开发者后台增加console操作  ,暂不提供具体接口
 */

/**
 *  mysql  service
 *  原生pdo方式访问方式，稍微有些改动，详见开发者指南
 */

class User{

    public  $userId;
    public  $nick;

}
/**
 * 请求上下文
 */
class Context{
    /**
     * 获取当前登录用户信息
     * @return User
     */
    function getBrowser(){
          return new User();

    }

    /**
     * 获取当前的掌柜信息
     * @return User
     */
    function getSiteOwner(){
                 return new User();
    }


}
/**
 * 全局变量
 */
$_cdnServer="http://www.tbcdn.com";
$_taeServer ="http://www.tbcdn.com";
$appLog;   //日志服务，跟log4j的接口类似， 比如使用$appLog->info("infolog") ; $appLog->warn("warnlog")
//设置页面标题
$_page->setTitle("页面标题名称");
$context = new Context();   //请求的上下文，
?>