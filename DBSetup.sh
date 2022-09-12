#!/bin/sh
docker exec -it project-db-1 mysql -uroot -proot -e "CREATE DATABASE db;"
docker exec -it project-db-1 mysql -uroot -proot -e "USE db;"
docker exec -it project-db-1 mysql -uroot -proot db < ./db/formdata.sql
