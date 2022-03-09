#start mysql
/etc/init.d/mysql start

#create users and grand privelleges
mysql -Bse "CREATE USER '$MYSQL_ADMIN'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';"
mysql -Bse "CREATE USER '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD';"
mysql -Bse "GRANT ALL PRIVILEGES ON * . * TO '$MYSQL_ADMIN'@'localhost';"
mysql -Bse "GRANT SELECT ON * . * TO '$MYSQL_USER'@'localhost';"
mysql -Bse "SELECT user from mysql.user"

#run sql on foreground
mysqld_safe