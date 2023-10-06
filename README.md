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

Upon cloning the project, cd into the laravel project by running the command :
```
cd job-listing
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
When uploading job post files (in this case images), they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible : 
```
php artisan storage:link
```

### Run The App
To run the app, run the following command :
```
php artisan serve
```
