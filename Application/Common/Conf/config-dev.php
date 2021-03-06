<?php
//开发环境配置
return array(
    //'配置项'=>'配置值'
    'MODULE_ALLOW_LIST'    =>    array('Web','Admin'),
//    'MULTI_MODULE'          =>  true,
    'DEFAULT_MODULE'       =>    'Web',

    'URL_MODEL'            =>    2,  //rewrite模式

    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写

    'SHOW_PAGE_TRACE' => true,

    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'vvs', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'vv_', // 数据库表前缀

    //盐值加密字符串
    'SALT'  =>  'VIVISAYYES',

    //微信第三方登录用
    'THINK_SDK_WEIXIN' => array(
        'APP_KEY'       => 'wxbafc2bfa05330aef', //测试公众号
        'APP_SECRET'    => 'd47bd7c5052454a2be47fe3bc9e8913f', ////测试公众号
        'CALLBACK'      => 'http://www.vivisay.com/index/callback?type=weixin',
    ),

    //微信配置(测试号)
    'weixin'    => array(
        'token'         =>  'ceshitoken', //填写你设定的key
        'appid'         =>  'wxbafc2bfa05330aef', //填写高级调用功能的app id,
        'appsecret'     =>  'd47bd7c5052454a2be47fe3bc9e8913f', //密钥
        'mchid'         =>  '*****************', //商户编号
        'key'           =>  '*****************', //微信支付密钥
    ),

    //七牛配置(测试)
    'QINIU'     => array(
        'APPKEY'            =>  'RzYvCfc2uWRmKmEcO1EMxnB_AfXMbHO702Yw3OKK',
        'SECRETKEY'         =>  'epuMXbZjMUvE7cJsUy4VDo2SsHM-0tmPzybWxJCG',
        'BUCKET'            =>  'vivisay',
        'STATIC'            =>  'http://o8g3j83l6.bkt.clouddn.com'
    ),

);