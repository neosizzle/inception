while ! mysql -h nszl-mariadb -u $MYSQL_ADMIN -p$MYSQL_ADMIN_PASSWORD $WORDPRESS_DATABASE &>/dev/null; do
    sleep 3
done

if [ ! -d "/usr/local/bin/wp" ]; then
  	#get wordpress cli 
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

	#install wp cli binary
	chmod +x wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wp

	wp core download  --allow-root
	wp config create --dbhost=nszl-mariadb --dbname=$WORDPRESS_DATABASE --dbuser=$MYSQL_ADMIN --dbpass="$MYSQL_ADMIN_PASSWORD" --allow-root
	chmod 644 wp-config.php
	wp core install --url=localhost --title="Your Blog Title" --admin_name=$MYSQL_ADMIN --admin_password=$MYSQL_ADMIN_PASSWORD --admin_email=you@example.com --allow-root
fi

echo "Starting wordpress server.."
wp server --port=9000 --host=0.0.0.0 --allow-root