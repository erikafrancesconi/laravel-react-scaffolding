Tutorial per usare Sail: https://laravel.com/docs/8.x/sail

Dopo aver clonato il repository lanciare il seguente comando per installare le dipendenze necessarie:
```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```
# Comandi utili:
`./vendor/bin/sail up` per lanciare l'ambiente con Docker

Si può anche configurare un alias: `alias sail='./vendor/bin/sail'`
e poi lanciare `sail up`

Usando sail, per lanciare tutti i comandi, invece di `php artisan` migrate bisogna lanciare `./vendor/bin/sail artisan migrate`

`sail php --version`

`sail composer require laravel/sanctum`

`sail node --version`
`sail npm run prod`

# Mailhog
http://localhost:8025/