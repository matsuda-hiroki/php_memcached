<?php
$key = $_GET['key'];
$value = $_GET['value'];
$time = $_GET['time'];

$cache = new Memcached();
$cache->addServer('localhost', 11211);
$res = $cache->set($key, $value, $time);

if(empty($res) ){
	echo "set cache failed";
}else{
	echo "set cache successed";
	echo "$key,$value,$time";
}
?>
