web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:restart && php artisan queue:work mail --tries=3