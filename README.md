# Job Listing Web App
A web app for listing/posting jobs. 

## Prerequisites
  * Composer
  * MySQL

## Tech Stack/Libraries
  * Laravel v10
  * TailwindCSS v3.3
  * Alpine.js

## Usage

### Project Root

Upon cloning the project, navigate into the laravel project root by running the command :
```
cd job-listing
```

### Install Dependecies

To install the dependecies, run the following command :

```
composer install
```

### Create environment file

Copy the `.env.example` file to `.env` (still in the project root folder)

### Generate application key

This key will be used to encrypt data (Sessions, CSRF tokens and cookies). Run the following command : 

```sh
php artisan key:generate
```

### Database 

The app uses MySQL so make sure you have it installed it and running (XAMP for example).

### Migrations 
To create all the tables and columns, run the following command : 

```
php artisan migrate
```

### Seeding The Database
To add some dummy/fake data to the database, run the following command : 
```
php artisan db:seed
```

### File Uploading
When uploading job post files (in this case images), they go to `storage/app/public`. Create a symlink with the following command to make them publicly accessible : 
```
php artisan storage:link
```

### Run The App
To run the app, run the following command :
```
php artisan serve
```
