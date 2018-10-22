# eBASE Developer Test

This test is designed to provide a real-world scenario for you to autonomously complete to the best of your ability.

## Getting started

*   Fork the repository
*   Use PHP 7.2 and built-in development server
*   Create empty file ./database/database.sqlite
*   Copy .env.example to .env, change DB_CONNECTION to sqlite and remove DB_DATABASE
*   Execute `composer install`
*   Execute `npm install`
*   Execute `php artisan key:generate`
*   Execute `php artisan migrate --seed`
*   Execute `php artisan serve` to host the app
*   Exectue `npm run dev` to compile public assets

## Instructions

*   Using AJAX and bootstrap modals, develop a feature to attach notes to any user.
*   Write a migration to create the tables necessary for storing the notes.
*   Vue.js included by default. Feel free to use any client side library instead.
