# Migrations

### Create class of migration
docker-compose exec app php artisan make:migration create_tickets_table --create=tickets

### Create table
docker-compose exec app php artisan migrate

