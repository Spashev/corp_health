.DEFAULT_GOAL := help

# Executables (local)
DOCKER_COMP = docker-compose

# Executables
DOCKER_EXEC = $(DOCKER_COMP) exec

# Executables docker containers
APP = $(DOCKER_EXEC) health_main

help: ## Help message
	@echo "Please choose a task:"
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

PROJECT_DIR=$(shell dirname $(realpath $(MAKEFILE_LIST)))

ifeq (manage,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif

install: build start composer migrate ## Spin-up the project with minimal data

build: ## Build docker containers
	$(DOCKER_COMP) build
	@echo ">>> Base build done!"

composer: ## Run bash inside app_blca container
	${APP} composer install
	@echo ">>> Composer install done!"

migrate: ## Run bash inside app_blca container
	${APP} php artisan migrate
	@echo ">>> Migrations done!"

shell: ## Run bash inside app_blca container
	${APP} bash

rebuild: ## Build docker containers without cache
	$(DOCKER_COMP) build --no-cache
	@echo ">>> Rebuild done!"

start: ## Start all services
	${DOCKER_COMP} up -d
	@echo ">>> Containers started!"

stop: ## Stop all services
	${DOCKER_COMP} stop
	@echo ">>> Containers stopped!"

destroy: ## Stop and remove all containers, networks, images, and volumes
	${DOCKER_COMP} down --volumes --remove-orphans
	@echo ">>> Containers destroyed!"

mysql: ## Run bash inside app_mysql container
	docker exec -it mysql_blca bash

route: ## Show all routes
	${APP} php artisan route:list

test: ## Run all tests
	${APP} ./vendor/bin/pest

swagger: ## Generate swagger
	${APP} php artisan l5-swagger:generate
