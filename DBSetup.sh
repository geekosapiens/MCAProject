#!/bin/sh
read -p "Enter database Container name:  " NAME

docker exec -it $NAME mysql -uroot -proot -e "CREATE DATABASE db;"
docker exec -it $NAME mysql -uroot -proot -e "USE db;"
docker exec -i $NAME mysql -uroot -proot db < ./db/formdata.sql

