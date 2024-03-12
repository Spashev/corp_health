## Deploy docker-compose

Need download docker-compose and make bash

site: http://localhost:8000/

## Start project
```bash
make install
make start
make migrate
```
## Show all routes
```bash
make route
```

## Delete project
```bash
make destroy
```

## Run test
```bash
make test
```

## OR using docker-compose
```bash 
docker-compose up -d --build
docker-compose exec main php artisan migrate --seed
docker-compose exec main php artisan route:list
docker-compose exec main ./vendor/bin/pest
```
