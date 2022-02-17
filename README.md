# Basic Laravel Auth System


### 1. Clone The Repo
`git clone https://github.com/dispact/laravel-auth-system.git`

### 2. CD into the directory and run composer install
`cd laravel-auth-system && composer install`

### 3. After composer is finished, set up your .env file. Make sure to add a database.
`cp .env.example .env`

### 4. Generate the app key
`php artisan key:generate`

### 5. Migrate and seed the database 
`php artisan migrate:fresh --seed`
> The following account will be seeded: test@example.com | password

### 6. Run the Laravel application
`php artisan serve`


### The app should now be up and running at http://localhost:8000
