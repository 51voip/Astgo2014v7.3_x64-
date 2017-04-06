### 版本特色：

1. 全自动安装
1. 安装过程中不用频繁输入yes或回车
1. 自带完整号码归属地数据库
1. 自带触屏版WAP

![输入图片说明](http://git.oschina.net/uploads/images/2017/0404/103852_d7b9f916_1295458.jpeg "在这里输入图片标题")

![输入图片说明](http://git.oschina.net/uploads/images/2017/0404/110310_9dc99850_1295458.jpeg "在这里输入图片标题")

### ·首先确定你需要使用astgo 2014 7.0还是7.3：




- astgo 2014 v 7.0 用centos 5.10 32位系统，优点：稳定，无BUG，缺点，不支持语音验证码，如果是破解官方的APP，就必须用7.3，如果自己开发或找人常规开发（不是破解别人或官方的忽悠人的），就用7.0

- astgo 2014 v7.3用centos 5.10 64位系统，优点：支持语音验证码，可以直接破解官方的APP对决，缺点：回拨的时候被叫没接通会扣主叫话费，如果你确定你是破解带语音验证码的APP或要语音验证码，必须使用7.3版本




- 7.0的安装教程和资源下载页面：[https://git.oschina.net/voipcenter/Install_Astgo2014v7.0x86](https://git.oschina.net/voipcenter/Install_Astgo2014v7.0x86)

- 7.3的安装教程和资源下载页面：[https://git.oschina.net/voipcenter/Install_Astgo2014v7.3x64](https://git.oschina.net/voipcenter/Install_Astgo2014v7.3x64)



### Astgo 2014 v7.3安装说明
### ·服务器配置建议：

```
1.操作系统要求：Centos 5.x 64位系统（建议阿里云 centos 5.11 32位）
2.网络要求：注意必须为独立IP接入公网，阿里云需要选择经典网络类型！
3.CPU：2-4核最佳，1核也可跑，看你以学习测试为主还是运营为主。
4.内存：2-4G即可
5.硬盘：30-40G即可，不要追求大硬盘，没任何用处
6.机房建议选择:广州深圳、北京这些国家为了核心区域，不要图便宜选青岛杭州这种地方的机房，付阿里云的机房区域对照表：
```


### ·安装步骤：



1. 下载Astgo 2014 v7.3 64位安装包：[http://www.51voip.org/post/4.html](http://www.51voip.org/post/4.html)
1. 使用SSHSecureShell、WinSCP或其他SSH工具连接服务器（下载地址：[http://www.51voip.org/post/12.html](http://www.51voip.org/post/12.html)）
1. 上传压缩包astgo2014_73_x64.tar.gz到root目录
1. 在命令界面复制粘贴执行下面命令：


```
yum makecache
cd /root
tar -zxvf astgo2014_73_x64.tar.gz
cd /root/astgo2014
sh install_ol.sh
mysqladmin -u root password "astgo@127.0.0.1"
mysql -h localhost -u root -pastgo@127.0.0.1;
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('astgo@127.0.0.1');
show variables like'%char%';
set character_set_client = utf8;
set character_set_server = utf8;
set character_set_connection = utf8;
set character_set_database = utf8;
set character_set_results = utf8;
set collation_connection = utf8_general_ci;
set collation_database = utf8_general_ci;
set collation_server = utf8_general_ci;
Create DATABASE IF NOT EXISTS astgodb DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use astgodb;
alter database astgodb character set utf8;
source /root/astgo2014/astgodb.sql
quit
echo "----------install success-----------"
```

### ·配置64位Zend到PHP（仅限64位的ASTGO，32位不需要）：

编辑/etc/php.ini
 在末尾加入
```
[Zend]
zend_extension="/usr/lib/ZendOptimizer.so"
```
安装完成，重启服务器
```
reboot
```

### ·安装完成后的初始化参数：

安装后默认端口为80，可修改 /etc/httpd/conf/httpd.conf里面的Listen 80为别的端口例如
Listen 1733

1. 后台网址：http://IP/astgo2011/  
1. WAP:  http://IP/
1. 用户查费：http://IP/user/
1. API接口目录：http://IP/api/   接口文档请访问 http://www.51voip.org/link/jc/
1.   :beer: **后台总管理账户 admin 密码admin 财务密码admincw** 

登录后台后进入系统设置，配置 回拨二次拨号使用外部IVR 为 关闭状态，然后 在 系统IP地址设置 一栏 进行配置

 **SIP 本地IP地址** ， **SIP1本地IP地址** ， **H323本地IP地址**  三个栏目的IP地址均填当前服务器的公网IP地址，端口号从上往下依次为 5060 5080 1720，然后加载配置保存即可生效，如下图示例：![输入图片说明](http://git.oschina.net/uploads/images/2017/0404/205718_682b128b_1295458.jpeg "在这里输入图片标题")

### ·激活授权：

到这来就安装完成了，但是没激活哦，没激活除无法通话外别的功能全部正常
如果需要激活，请继续执行下面命令，然后复制出来服务器信息后联系我们激活,激活请访问：http://www.51voip.org/link/jihuo/
```
cd /root/astgo2014
./reg_64
echo "----------------show success----------"
```


激活后可删除没用的安装包，执行下面命令
```
cd /root
rm -rf /root/astgo2014/
rm -rf /root/astgo2014_73_x64.tar.gz
```

示例  激活信息复制下面这部分即可：
```
-------------------------- COPY START  -------------------------
-BROAD_START:        Serial Number: 4a93a503-9cdc-4978-b144-10d66af67c9f:BROAD_END--HD_START::HD_END--IP_START:10.25.160.251:IP_END--MAC_START:00163e0602cc:MAC_END-
---------------------------- COPY END --------------------------
```


### ·使用帮助

请访问我们的教学中心：[http://www.51voip.org/link/jc/](http://www.51voip.org/link/jc/)

联系QQ：1184089912  

联系淘宝：ax小星星  [https://shop149208464.taobao.com](https://shop149208464.taobao.com)