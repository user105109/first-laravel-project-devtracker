# DevTracker 🛠️

A simple Laravel CRUD application to track personal development projects.

## About

DevTracker lets you manage your dev projects by keeping track of their title, description, and current status — whether they're planned, ongoing, or done.

Built as a hands-on Laravel fundamentals practice project.

## Features

- Create, read, update and delete projects
- Project status tracking (`planned` / `ongoing` / `done`)
- Form validation
- Blade component-based UI with DaisyUI + Tailwind CSS

## Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade, Tailwind CSS, DaisyUI
- **Database:** MySQL

## Installation

```bash
git clone https://github.com/your-username/first-laravel-project-devtracker.git
cd first-laravel-project-devtracker

composer install

cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`:

```env
DB_DATABASE=devtracker
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Then run:

```bash
php artisan migrate
php artisan serve
```

## Project Structure

```
app/Http/Controllers/ProjectController.php
app/Models/Project.php
resources/views/projects/
├── index.blade.php
├── create.blade.php
├── show.blade.php
├── edit.blade.php
└── delete.blade.php
resources/views/components/
├── layout.blade.php
├── nav.blade.php
└── footer.blade.php
database/migrations/
routes/web.php
```

## What I Practiced

- RESTful routing with `Route::resource()`
- Eloquent ORM & mass assignment protection
- Blade components & props
- Form validation
- CSRF protection
- DaisyUI component integration
