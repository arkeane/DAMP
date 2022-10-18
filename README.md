Simple LAMP stack using Docker containers 

# How To:

## Install
1. Install **docker desktop** from https://www.docker.com/products/docker-desktop/
- Remember to enable Virtualization in BIOS if using Windows, wsl2 might be useful
2. Clone the repository and if wanted rename the folder.

## Run
1. Edit if needed the ```compose.yaml``` file (mantain tabs and spaces while editing)
   - Change MariaDB user, password, and database_name
2. With docker desktop running, open a terminal and navigate to the repo folder
3. Run the command ```docker-compose up -d``` or ```docker compose up -d```
4. - **Apache** with **PHP** support will be running on http://localhost:80/
   - **PHPMyAdmin** will be running on http://localhost:81/
   - **MariaDB** will be running on port 3306
- The resulting project structure will be something like:
```
project/
├── compose.yaml
├── db/
└── www/
```

5. Insert your own php files inside ```www/```
6. To stop the containers run ```docker-compose down" or "docker compose down``` data will not be lost.

To delete all database and php files just delete the ```www/``` and ```db/``` they will be recreated when running ```docker compose up -d```

## Adding PHP extensions

1. Edit ```Dockerfile``` to add other php extensions
   - Use ```RUN apt install "required programs"``` to prepare environment
   - Use ```RUN docker-php-ext-install extension``` to install extension
   - Use ```RUN docker-php-ext-enable extension``` to enable extension

2. Run ```docker-compose build``` or ```docker compose build```