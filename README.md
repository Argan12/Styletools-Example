# Styletools

## What is Styletools ?

Styletools is a little framework developed by myself for my personal needs.

This framework contains :
* stylesheets (including responsive).
* MVC architecture (including routers and .htaccess file).
* HTML template.
* webmanifest for progressive web app.
* demo.

## How does it work ?

### Front-End development (HTML/CSS)

* Copy "dist" and "templates" directories. Dist contains minified CSS and JavaScript files, and Templates contains a HTML template.
* Paste these directories in your project directory.
* Update meta tags on template.html file.
* Develop your application on this file.

### Back-End development (PHP/MySQL)

* Include your project on Styletools directory. First, rename Styletools directory by your project's name.
* Work on "src" directory. On the "app" folder, lies MVC architecture. Controllers contains your controllers, Models folder contains your models (database connexion is included), and the Views directory contains HTML files. A layout is included as well.
* Libs directory contains routers.
* Web directory contains your css and js files and your images.
* index.php file on the root is the main router. In this file, you'll add your routes.

**Important** :  Stylesheets of Styletools must be placed first, before all your css files. It's the same for javascript files.
# Styletools-Examle
