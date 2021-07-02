## Arquivo .env
APP_NAME=enkode_erp
APP_ENV=local
APP_KEY=base64:m0Ssyp21h3lwAA/sfP9Pt6/CtlWAXgCUmBm+I6iYKMg=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=erp_lav
DB_USERNAME=postgres
DB_PASSWORD=

## Migrations

Crie um Database e execute os seguintes comandos:

php artisan migrate
php artisan db:seed

## Laravel

composer update

