# copy to custom data directory (init) and grant all permissions if directory not exist
cp -n -r /var/lib/mysql/* /docker_mysqldata # -n is no overwrite, -r is recursive
chmod -R 777 /docker_mysqldata

# start mysql
/etc/init.d/mysql start

#create users and grant privelleges
echo "CREATE USER IF NOT EXISTS  '$MYSQL_ADMIN'@'%' IDENTIFIED BY '$MYSQL_ADMIN_PASSWORD';" | mysql
echo "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql
echo "GRANT ALL PRIVILEGES ON * . * TO '$MYSQL_ADMIN'@'%';" | mysql
echo "GRANT SELECT ON * . * TO '$MYSQL_USER'@'%';" | mysql
echo "CREATE DATABASE IF NOT EXISTS $WORDPRESS_DATABASE;" | mysql
echo "USE $WORDPRESS_DATABASE;CREATE TABLE IF NOT EXISTS data (value VARCHAR(20));" | mysql
echo "SELECT user from mysql.user;" | mysql

# stop mysql
/etc/init.d/mysql stop

#run sql on foreground
mysqld_safe --skip-syslog --log-error=logs.log
