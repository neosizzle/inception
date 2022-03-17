# copy to custom data directory (init) and grant all permissions if directory not exist
cp -n -r /var/lib/mysql/* /docker_mysqldata # -n is no overwrite, -r is recursive
chmod -R 777 /docker_mysqldata

# # start mysql
# /etc/init.d/mysql start

# #create users and grant privelleges
# echo "CREATE USER IF NOT EXISTS  '$MYSQL_ADMIN'@'%' IDENTIFIED BY '$MYSQL_ADMIN_PASSWORD';" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "GRANT ALL PRIVILEGES ON * . * TO '$MYSQL_ADMIN'@'%';" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "GRANT SELECT ON * . * TO '$MYSQL_USER'@'%';" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "CREATE DATABASE IF NOT EXISTS $WORDPRESS_DATABASE;" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "USE $WORDPRESS_DATABASE;CREATE TABLE IF NOT EXISTS data (value VARCHAR(20));" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "SELECT user from mysql.user;" | mysql -u root -p$MYSQL_ROOT_PASSWORD
# echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';" | mysql -u root -p$MYSQL_ROOT_PASSWORD

# # stop mysql
# /etc/init.d/mysql stop

#run sql on foreground
echo "===============STARTING MARIADB SERVICE================"

# mysqld_safe --skip-syslog --log-error=logs.log
tail -f