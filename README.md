# php-filter
PHP敏感词过滤系统

php扩展trie_tree安装教程：
http://blog.41ms.com/post/39.html

过滤系统详细说明 ：
http://blog.41ms.com/post/41.html

无人值守，检测服务正常运行，遇故障则重启服务：
http://blog.41ms.com/post/42.html


在本地测试过程(需要安装swoole扩展)

在Mac 终端 php reload_dict.php  将敏感词的写到内存中

然后执行 php filter.php 

然后在浏览器中执行 http://127.0.0.1:9501/?content=王玉鹏的媳妇叫刘敏，王玉鹏的邮箱地址是wangyupeng@jiayuan.com，想不想知道他的QQ号呢？
