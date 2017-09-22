# zentao-pms
使用docker快速创建禅道项目管理系统

包含的组件：

* [nginx](http://nginx.org/)
* [php-fpm](https://php-fpm.org/)
* [zentao-pms](http://www.zentao.net/)

## 目录
* [禅道(zentao)](#禅道_zentao_)
    * [修改邮件组件](#修改邮件组件)
* [php](#php)
    * [php配置](#php配置)
* [nginx](#nginx)
    * [root配置](#root配置)
* [启动](#启动)
        
## 禅道(zentao)
在[禅道官网](http://www.zentao.net/)下载最新源码包，解压得到`zentaopms`目录

### 修改邮件组件
禅道使用了[PHPMailer](https://github.com/PHPMailer/PHPMailer)来发送通知邮件，
但有些邮箱服务提供商将`X-Mailer`为`PHPMailer {version} (phpmailer.sourceforge.net)`的邮件给过滤掉，
如果在配置禅道发信的时候始终无法通过SMTP发出，或无法收到，可以尝试修改此Head

PHPMailer组件在`zentaopms/lib/phpmailer/phpmailer.class.php`，在文件中搜索`X-Mailer`修改即可，例如修改为
```php
$result .= $this->HeaderLine('X-Mailer', 'Zentao 9.5');
```

## php
在`php`目录中有：

* `extension/` php扩展存放目录，除了自带的扩展禅道还需要`pdo_mysql.so`，需要其他扩展可以添加到此目录，
 并配置`php.ini`
* `session/` session存放目录，此目录必须拥有读写权限
* `php.ini` php的配置文件

### php配置
通过修改`php.ini`可以添加扩展、改变目录、限制请求大小等

在这里我们只有两个配置项：
```yaml
session.save_path = /usr/local/etc/php/session

extension = /usr/local/etc/php/extension/pdo_mysql.so
```

在docker启动时，我们会将`./php`目录挂载至php-fpm容器的`/usr/local/etc/php/`目录，
所以我们使用绝对路径来定位扩展和session的存放位置

## nginx
`nginx`是作为web服务器的，可以替换为其他相同类型的组件

### root配置
修改`./nginx/conf.d/default.conf`文件，其中需要注意的是`root`配置

`root`我们配置的是`/data/zentao/zentaopms/www`，在docker启动时会将主机`./zentaopms`目录分别挂载至
`php`容器和`nginx`容器的`/data/zentao/zentaopms`目录。
nginx收到请求后，在转发给php,
`fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;`这一行用来配置脚本的位置。

举个例子访问`index.php`，nginx会在root下(`/data/zentao/zentaopms/www`)寻找这个脚本，
然后告诉php，这个脚本的路径是：`$document_root$fastcgi_script_name`，
也就是root+index.php：`/data/zentao/zentaopms/www/index.php`。
php-fpm收到这样一个路径后会去寻找这个脚本来解析处理，当php-fpm和nginx部署在同一台机器上的时候，
都可能正常访问`/data/zentao/zentaopms/www`这个目录，但是分别在不同的docker容器中是找不到的，
所以我们将主机的`zentaopms`分别挂载到php与nginx的容器中，并指定相同的路径，这样才能正常访问php脚本文件。

## 启动
调整`docker-compose.yml`配置后就可以使用`docker-compose up`启动了。

启动完成后，访问`http://localhost:8080`进入禅道安装程序，接下来一步步执行就行了。

:imp:在安装过程中会提示输入数据库的地址，那里我们使用主机名`mysql`来访问，而不是`localhost`或者`127.0.0.1`，
管理员密码通过环境变量配置在`docker-compose.yml`中：
```yaml
    mysql:
        image: mysql
        volumes:
          - ./mysql:/var/lib/mysql
        environment:
          MYSQL_ROOT_PASSWORD: zentao@mysql
```

:imp:如果安装过程中提示`公司名字为空`之类的，可以将`zentaopms/config/my.php`删除，并重新执行安装过程即可
这个似乎是禅道安装程序的一些问题