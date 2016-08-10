<?php
ini_set('memory_limit', '512M');
$arrWord = file('dict.txt');

$resTrie = trie_filter_new();

foreach ($arrWord as $k => $v) {
	    trie_filter_store($resTrie, $v);
}
trie_filter_save($resTrie, __DIR__ . '/blackword.tree');
$resTrie = trie_filter_load(__DIR__ . '/blackword.tree');

$str = '王玉鹏的媳妇叫刘敏，王玉鹏的邮箱地址是wangyupeng@jiayuan.com，想不想知道他的QQ号呢？';
$arrRet = trie_filter_search_all($resTrie, $str);

print_all($str, $arrRet);

function print_all($str, $res) {//print_r($res);
    echo "$str\n";
	    foreach ($res as $k => $v) {
			        echo $k."=>{$v[0]}-{$v[1]}-".substr($str, $v[0], $v[1])."\n";
					    }
}
