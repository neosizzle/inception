all:
	cd srcs && docker-compose up --build -p inception

clean :
	cd srcs && docker-compose down

fclean : clean
	sudo rm -rf ./srcs/static/wordpress
	sudo rm -rf ~/data-incep:/docker_mysqldata
	sudo rm -rf  ~/data-incep-bonus

re : fclean all

linux_hostadd :
	sudo echo "127.0.0.1 jng.42.fr" >> /etc/hosts

.PHONY : clean re fclean all linux_hostadd