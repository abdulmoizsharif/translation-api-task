# Translation Management Service

## Setup

```bash
git clone ...
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan jwt:secret
php artisan serve


Features
JWT Auth

Create/Update/Export Translations

Filter by key/content/tag

High-performance JSON export

Dockerized

Swagger UI at /api/documentation

Design Decisions
Flat schema for performance

Pivot table for scalable tagging