# How To: (Windows and Mac)

## Install
1. Install **docker desktop** from https://www.docker.com/products/docker-desktop/
2. Clone the repository and if wanted rename the folder.
3. Edit if needed the ```compose.yaml``` file (mantain tabs and spaces while editing)

## Run
4. With docker desktop running, open a terminal and navigate to the repo folder
5. Run the command ```docker-compose up -d``` or ```docker compose up -d```
6. - **Apache** with **PHP** support will be running on http://localhost:80/
   - **PHPMyAdmin** will be running on http://localhost:81/
   - **MariaDB** will be running on port 3306
- The resulting project structure will be something like:
```
project/
├── compose.yaml
├── db/
└── www/
```

8. Insert your own php files inside ```www/```
7. To stop the containers run ```docker-compose down" or "docker compose down``` data will not be lost.

To delete all database and php files just delete the ```www/``` and ```db/``` they will be recreated when running ```docker compose up -d```
