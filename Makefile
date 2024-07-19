APP=cef-report-dashboard.local.dotgroup.com.br

bash:
	docker compose exec $(APP) sh

up:
	docker compose -f ../docker-compose.yml up -d

down:
	docker compose down

php:
	docker compose exec $(APP) php $(filter-out $@, $(MAKECMDGOALS))
