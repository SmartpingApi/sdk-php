PHP := 'docker compose exec php'

demo:
    {{PHP}} php src/demo.php

composer *args:
    {{PHP}} composer {{args}}

psalm:
    {{PHP}} ./vendor/bin/psalm

pest:
    {{PHP}} ./vendor/bin/pest

