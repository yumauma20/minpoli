# つかいかた

```bash
git clone https://github.com/MasanaIto/minpoli.git
docker-compose build
docker-compose up -d
docker-compose exec php-fpm composer create-project --prefer-dist "laravel/laravel=6.5.2 .

docker-compose exec php-fpm php artisan migrate
docker-compose exec php-fpm npm run dev

docker-compose stop
```

localhost:8080 ... ホーム
localhost:8888 ... phpMyAdmin

# バージョン
- nginx 1.17 
- PHP 7.4.6
- MySQL 8.0.18
- Laravel 6.18.19
- npm 6.14.5