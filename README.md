# WMS Inventory (Laravel)

Inventory management CRUD built on Laravel with products tracked by SKU, name, stock, and optional description.

## Requirements
- PHP 8.2 with SQLite (pdo_sqlite + sqlite3 enabled)
- Composer

## Setup
1. Install dependencies: `composer install`
2. Copy env: `cp .env.example .env` (already present from create-project)
3. Ensure SQLite DB exists: `touch database/database.sqlite`
4. Run migrations: `php artisan migrate`
5. Serve: `php artisan serve` then open `http://localhost:8000`

## Usage
- Inventory is at `/products` (home `/` redirects there).
- Add via **Add Product**; edit/delete from the table actions.
- Validations: unique `sku`, required `name` and non-negative `stock`, optional `description`.

## Routes
Resource routes via `Route::resource('products', ProductController::class)`:
- index, create, store, edit, update, destroy.

