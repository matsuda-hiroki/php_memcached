<?php
$key = $_GET['key'];

$cache = new Memcached();
$cache->addServer('localhost', 11211);
$res = $cache->get($key);

if(empty($res) ){
	echo "set cache failed";
}else{
	echo $res;
}

?>
