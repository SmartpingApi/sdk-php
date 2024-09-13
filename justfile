PHP := `docker compose exec php`

composer *args:
    {{PHP}} composer {{args}}

psalm:
    {{PHP}} ./vendor/bin/psalm

pest:
    {{PHP}} ./vendor/bin/pest

