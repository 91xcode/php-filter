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

然后在浏览器中执行 http://127.0.0.1:9501/?content=%E7%8E%8B%E7%8E%89%E9%B9%8F%E7%9A%84%E5%AA%B3%E5%A6%87%E5%8F%AB%E5%88%98%E6%95%8F%EF%BC%8C%E7%8E%8B%E7%8E%89%E9%B9%8F%E7%9A%84%E9%82%AE%E7%AE%B1%E5%9C%B0%E5%9D%80%E6%98%AFwangyupeng@jiayuan.com%EF%BC%8C%E6%83%B3%E4%B8%8D%E6%83%B3%E7%9F%A5%E9%81%93%E4%BB%96%E7%9A%84QQ%E5%8F%B7%E5%91%A2%EF%BC%9F
