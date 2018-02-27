# Office Search v0.1.1

The office search api as part of the developer test for Hachet.

## Automatic Setup
Run `./setup.sh`

## Manual Setup
- Download dependencies: `composer install`
- Create new .env file: `cp .env.example .env`
- Generate app key: `php artisan key:generate`
- Configure .env for sqlite
    - `DB_CONNECTION=sqlite`
    - Delete other DB_* lines
- Create new database file: `touch database/database.sqlite`
- Migrate: `php artisan migrate`
- Seed: `php artisan db:seed`
