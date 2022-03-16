all:
	docker-compose -f srcs/docker-compose.yml up --build

clean :
	docker-compose -f srcs/docker-compose.yml down

fclean : clean
	sudo rm -rf ./srcs/static/wordpress
	sudo rm -rf ~/data-incep:/docker_mysqldata
	sudo rm -rf  ~/data-incep-bonus

re : fclean all

.PHONY : clean re fclean all