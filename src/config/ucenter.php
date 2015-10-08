<?php
return [
	'url'       => env('ucenter_url','/api/ucapi'), // 网站UCenter接受数据地址
	'api'       => env('ucenter_api','http://localhost/ucenter'), // UCenter 的 URL 地址, 在调用头像时依赖此常量
	'connect'   => env('ucenter_connect','mysql'), // 连接 UCenter 的方式: mysql/NULL, 默认为空时为 fscoketopen()
	'dbhost'    => env('ucenter_dbhost','localhost'), // UCenter 数据库主机
	'dbuser'    => env('ucenter_dbuser','root'), // UCenter 数据库用户名
	'dbpw'      => env('ucenter_dbpw','root'), // UCenter 数据库密码
	'dbname'    => env('ucenter_dbname','ucenter'), // UCenter 数据库名称
	'dbcharset' => env('ucenter_dbcharset','utf8'),// UCenter 数据库字符集
	'dbtablepre'=> env('ucenter_dbtablepre','uc_'), // UCenter 数据库表前缀
	'key'       => env('ucenter_key','6bc3bbKaoWnVrb26juVvk4uq4c2a5SNQvzv70Zs'), // 与 UCenter 的通信密钥, 要与 UCenter 保持一致
	'charset'   => env('ucenter_charset','utf-8'), // UCenter 的字符集
	'ip'        => env('ucenter_ip','127.0.0.1'), // UCenter 的 IP, 当 UC_CONNECT 为非 mysql 方式时, 并且当前应用服务器解析域名有问题时, 请设置此值
	'appid'     => env('ucenter_appid',5), //当前应用的 ID
	'ppp'       => env('ucenter_ppp',20), //当前应用的每页数量
];
?>
