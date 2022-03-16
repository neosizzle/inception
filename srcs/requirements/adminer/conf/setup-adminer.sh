#get adminer
git clone https://github.com/vrana/adminer.git adminer

#copy adminer files to apache static serve directory
cp -r adminer/* /var/www/html

#run apache in forground (needed by adminer)
echo "===============STARTING ADMINER SERVICE================"
apachectl -D FOREGROUND