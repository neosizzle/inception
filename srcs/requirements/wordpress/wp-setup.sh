#wait for mariadb to up
while ! mysql -h nszl-mariadb -u $MYSQL_ADMIN -p$MYSQL_ADMIN_PASSWORD $WORDPRESS_DATABASE &>/dev/null; do
    sleep 3
done

if [ ! -d "/wp_site/wordpress" ];
	then
  	#get wordpress cli 
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

	#install wp cli binary
	chmod +x wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wp

	#download wp core files
	wp core download --path=./wp_site/wordpress --allow-root

	#configure wp and install
	cd ./wp_site/wordpress
	wp config create --dbhost=nszl-mariadb --dbname=$WORDPRESS_DATABASE --dbuser=$MYSQL_ADMIN --dbpass="$MYSQL_ADMIN_PASSWORD" --allow-root
	chmod 644 wp-config.php

	#additional wp config
	head -n 85 ./wp-config.php > tempcfg.php
	#set site url and root dir
	echo "define('WP_SITEURL', 'https://localhost/wordpress');" >> tempcfg.php
	echo "define('WP_HOME', 'https://localhost/wordpress');" >> tempcfg.php

	#set redis variables
	echo "define( 'WP_REDIS_HOST', 'nszl-redis' );" >> tempcfg.php
	echo "define( 'WP_REDIS_PORT', 6379 );" >> tempcfg.php
	echo "define( 'WP_REDIS_TIMEOUT', 1 );" >> tempcfg.php
	echo "define( 'WP_REDIS_READ_TIMEOUT', 1 );" >> tempcfg.php
	echo "define( 'WP_REDIS_DATABASE', 0 );" >> tempcfg.php
	tail -n +87 ./wp-config.php >> tempcfg.php

	mv tempcfg.php wp-config.php
	wp core install --url=localhost --title="Your Blog Title" --admin_name=$MYSQL_ADMIN --admin_password=$MYSQL_ADMIN_PASSWORD --admin_email=you@example.com --allow-root

	#install redis plugin
	wp plugin install redis-cache --allow-root
	wp plugin update --all --allow-root
	wp plugin activate redis-cache --allow-root
	
	#enable redis
	wp redis enable --allow-root
	else
	echo "Wordpress is already installed.."
fi

#make directory to contain php fpm socket
mkdir -p /run/php/
echo "===============STARTING WP SERVICE================"
/usr/sbin/php-fpm7.3 -F -R #F for forground, -R for root