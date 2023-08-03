# TYPO3 custom extension task
```
The actual task is described in the file typo3-task_CustomExtension_v5.pdf

```

## Prerequisite
```
Docker Desktop (download from https://ddev.readthedocs.io/en/latest/users/install/)
Docker ddev installed
Composer (download from https://getcomposer.org/download/)
```

## Install

```bash
1. Create a folder in your local system and open it.
2. $ git clone https://github.com/publicisbulgaria/typo3start.git
```

## Using docker-compose

```bash
$ docker compose up -d --build
```

## Update the hosts file 
``` 
127.0.0.1 typo3.docker
```

## Download TYPO3 code base
``` 
docker exec -it typo3_app composer install
```

## Import database
``` 
1. Go to http://localhost:8085. phpMyAdmin should open.
2. Fill the fields as follows:

Server: typo3_mysql
Username: admin
Password: 1

3. Import the file typo3_database.sql (located in the root) in the database typo3_database.
``` 

## Open the TYPO3 Backend/Frontend
``` 
Backend view
1. Go to http://127.0.0.1/typo3/. TYPO3 Backend login should open.
2. Enter the credentials:

User: admin
Password: admin123

Frontend view
1. Go to http://127.0.0.1. The frontend start page should open.

```
## Task
``` 
1. Open the file typo3-task_CustomExtension_v5.pdf located in the root of the downloaded project (in Bulgarian).

In case of any questions, please write us via Teams or by email.

```# typo3start
