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

# Time:
1500 Create initial project