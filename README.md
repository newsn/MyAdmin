# MyAdmin
MyAdmin是一款基于Laravel 5.4开发的后台管理系统，系统采用模块式开发、安装，并内置MyBuilder构建器，快开发人员能把更多时间放在业务方面。进一步提升了开发质量和时间。

* 移植 - MyAdmin 支持其他后台管理系统的完美移植到本系统上。
* 安装 - 依赖Laravel内置功能，安装简易
* 模块 - 模块化开发，可随时卸载安装，代码解耦合
* 构建 - MyAdmin内置了强大的构建器，几行代码既完成一个管理业务
* 版本 - MyAdmin向下兼容至PHP7.0，低于PHP7.0无法使用

# 安装

### 数据库
数据库配置文件 /.env

```
DB_CONNECTION=mysql  //数据库引擎
DB_HOST=127.0.0.1    //数据库地址
DB_PORT=3306         //数据库端口
DB_DATABASE=myadmin  //库名称
DB_USERNAME=root     //用户名（生产环境中避免使用root用户）
DB_PASSWORD=zjk1221  //密码
```

数据库详细配置见：https://docs.golaravel.com/docs/5.4/database/#configuration


### 目录
```
code ...
```
# 模块
### 创建模块
使用命令 artisan 创建：
```shell
php artisan create:module <moduleName>
```
命令执行后回在YourApp\app\Module\目录下创建一个与 <moduleName>名称相同的目录
### 模块目录
```
code ...
```
### 使用方式
* 路由设定 : routes/module.php
* 数据表规范 : myadmin_<模块名称>_物理名称
* 链接其他库 : config/database.php 添加库
* 所有文件命名空间 : ```namespace App\Module\<模块名称>;```


# MyBuilder PHP 构建器
使用手册：https://www.kancloud.cn/crazy/mybuilder/319170

### 在MyAdmin内使用
```
code ...
```


# 关于

CrazyCodes : 一位屌丝程序员的开源路

邮箱 : 919342864@qq.com

博客 : http://blog.fastrun.cn