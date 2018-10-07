# Neokukuku
A fork of : https://github.com/knarka/fikaba

http://kukuku.club is runing on this.

## 依赖：

**仅测试运行于php5.6，建议使用此版本。**

debian8:

    # sudo apt-get install mysql-server php5 php5-mysql apache2

## 配置：

各个版面独立为一个文件夹，可复制 示例版面 重命名后即可建立一个新的版面。

修改各版面文件夹下的config.php文件进行配置，各含义均有注释。

**必要的修改**：
    
    const TITLE = '示例版面';   //版面的标题
    
    const POSTTABLE = 'postsSLBM';  //串内容表（非数据库），各个版面建议增加不同的表，否则会导致不同版面出现同样的串。
    const SQLUSER = 'CHANGEME';   //Mysql用户名
    const SQLPASS = 'CHANGEME';    //mysql密码
    const SQLDB = 'CHANGEME';   //mysql数据库名

其他修改请参考文件中的注释。

**需要777权限，否则将导致无法发串**，使用apache时可以用：

    # chown -R www-data /var/www/$网站根目录 && chmod -R 777 /var/www/$网站根目录

## 安装：
放入网站根目录后在浏览器中打开。

**修改初始密码！！！**

点击 管理 输入初始密码： REPLACEME  ，进入账户管理中建立新的管理员账号，完成后请退出登录会自动删除初始账号。

## LICENSE:

同原（https://github.com/knarka/fikaba）为GPL V3
