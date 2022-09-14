# MCAProject
# WebServer Deployment with Docker

This is a project on Apache Web Server Deployment with Php and MySQL for Student Registration System.


Steps to Deploy a Php Apache Web server with Mysql Connectivity:
1. Make a Directory for Project and enter into it. 
2. Pull this Repository 
    ```sh
    git pull https://github.com/geekosapiens/MCAProject.git
    ```
3. Run `DockerComposeInstall.sh` script 
  This will install Docker-Compose extension
    ```
    bash DockerComposeInstall.sh
    ```
4. Build the Project.
    ```
    docker-compose build
    ```
5. Start Container Services.
    ```
    docker-compose up -d
    ```
    Remember to run it in detached mode (-d)
6. Get the name of container in which database is running
    ```
    docker ps
    ```
7. Run `DBSetup.sh` script and when prompt *enter the container id*
    ```
    bash DBSetup.sh
    ```
8. Voila the WebServer is succesfully setup
