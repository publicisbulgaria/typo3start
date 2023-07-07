# TYPO3 custom extension task

## Rrerequisite
```
Docker ddev installed
Composer
```

## Install

```bash
$ git clone git@github.com:vasildakov/typo3-custom-extension.git
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

3. Import the file typo3_database.sql (located in the root)
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
1. Open the file typo3-task_CustomExtension_v1.pdf located in the root of the downloaded project (in Bulgarian).

In case of any questions, please write us via Teams or by email.

```# typo3start
