# To start up:
```bash
cd support_ticket
vendor/bin/sail up
```

# To apply migrations:
* Go into the web container using
    `docker exec -it support_ticket_laravel.test_1 bash`
* Run
    `php artisan migrate`

# Install tailwind
* Go into the web container using
    `docker exec -it support_ticket_laravel.test_1 bash`
* Run
    `npm install && npm install -D tailwindcss@latest postcss@latest autoprefixer@latest`

# Install LiveWire
* Installed via composer
