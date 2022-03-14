#make redis listen on all hosts
sed -i "s|bind 127.0.0.1|#bind 127.0.0.1|g" /etc/redis/redis.conf

#start redis where everyhost can connect and print out verbose logs
redis-server --protected-mode no --loglevel verbose