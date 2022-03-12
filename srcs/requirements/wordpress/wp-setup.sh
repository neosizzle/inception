while ! mariadb -h nszl-mariadb &>/dev/null; do
    sleep 3
done

#get wordpress cli 
wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

#install wp cli binary
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

tail -f