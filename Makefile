all:
	cd srcs && docker-compose -p inception up --build

clean :
	cd srcs && docker-compose down  --remove-orphans  

fclean : clean
	# sudo rm -rf /home/jng/test

re : fclean all

linux_hostadd :
	sudo echo "127.0.0.1 jng.42.fr" >> /etc/hosts
	@echo "jng.42.fr > localhost"

prune : fclean
	docker system prune
	#docker volume rm $(docker volume ls -q)

.PHONY : clean re fclean all linux_hostadd prune