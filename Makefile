# include srcs/.env

all: up

up:
	sudo docker-compose -f srcs/docker-compose.yml up

build:
	sudo docker-compose -f srcs/docker-compose.yml build

fresh:
	-docker stop $$(docker ps -qa);
	-docker rm $$(docker ps -qa);
	-docker rmi -f $$(docker images -qa);
	-docker volume rm $$(docker volume ls -q);
	-docker network rm $$(docker network ls -q) 2>/dev/null;

reset: fresh
	sudo -k rm -rf srcs/home

# test:
# 	echo $(CERTS_)