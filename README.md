## ucenter for Laravel 5

Laravel 5 / 5.1 ucenter.

[![Latest Stable Version](https://poser.pugx.org/goodspb/laravel5-ucenter/v/stable)](https://packagist.org/packages/goodspb/laravel5-ucenter) [![License](https://poser.pugx.org/goodspb/laravel5-ucenter/license)](https://packagist.org/packages/goodspb/laravel5-ucenter) [![Total Downloads](https://poser.pugx.org/goodspb/laravel5-ucenter/downloads)](https://packagist.org/packages/goodspb/laravel5-ucenter)

### 安装

只要在你的 `composer.json` 文件require中加入下面内容，就能获得最新版.

~~~
"goodspb/laravel5-ucenter": "dev-master"
~~~

然后需要运行 "composer update" 来更新你的项目

安装完后，在 `app/config/app.php` 文件中找到 `providers` 键，

~~~
Goodspb\Laravel5Ucenter\UcenterServiceProvider::class,
~~~

找到 `aliases` 键，

~~~
'Ucenter' => Goodspb\Laravel5Ucenter\Facades\Ucenter::class,
~~~

## 配置
将以下配置保存到 `根\config` 的 ucenter.php中,或者直接从该项目的src/config中拷贝过去

ucenter配置项
~~~
//ucenter.php
'url'       => env('ucenter_url','/api/ucapi'), // 网站UCenter接受数据地址 注意路由配置
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
~~~


路由配置
将该项目中的src/routes.php中的路由定义配置到对应自己项目中的routes.php文件中

## 使用
例如：获取用户名为admin的信息
###### 1、使用execute
~~~
$result = Ucenter::execute('uc_get_user',['admin']);
var_dump($result);
~~~
###### 2、直接使用方法名
~~~
$result = Ucenter::uc_get_user('admin');
var_dump($result);
~~~

## 感谢
fork自 https://github.com/wehnhew/laravel4-ucenter 更改以适应 laravel 5以上
