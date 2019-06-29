up: docker-up

docker-up:
	docker-compose up --build -d

docker-down:
	docker-compose down

php:
	docker-compose exec php bash

nginx:
	docker-compose exec nginx bash
