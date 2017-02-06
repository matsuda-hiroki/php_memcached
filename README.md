# php_memcached

# install
sudo yum -y install memcached

# check version 
memcached -h | grep memcached

# show configure
cat /etc/sysconfig/memcached

# startup setting enable
chkconfig memcached on

# Link reference
http://blog.nomadscafe.jp/2013/12/memcached-2.html

# Using memcached with php
Look set.php and get.php
