.PHONY: up down shell migrate seed

up:
	docker-compose up -d --build

down:
	docker-compose down

shell:
	docker-compose exec app bash

migrate:
	docker-compose exec app php artisan migrate

seed:
	docker-compose exec app php artisan db:seed
