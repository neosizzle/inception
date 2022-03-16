all:
	docker-compose --project-directory ./srcs up --build

clean :
	docker-compose --project-directory ./srcs down

fclean : clean
	sudo rm -rf ./srcs/static/wordpress
	sudo rm -rf ~/data-incep:/docker_mysqldata
	sudo rm -rf  ~/data-incep-bonus

re : fclean all

linux_hostadd :
	sudo echo "127.0.0.1 jng.42.fr" >> /etc/hosts

.PHONY : clean re fclean all linux_hostadd