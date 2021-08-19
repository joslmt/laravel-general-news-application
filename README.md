<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ITjavEszl2e4vHRW1ODFgCSTxKLfnVg1YA&usqp=CAU" width="400">
</p>

# Laravel - NewsAPI
- [Laravel - NewsAPI](#laravel---newsapi)
  - [What is](#what-is)
  - [Project purpose](#project-purpose)
    - [What makes it different ?](#what-makes-it-different-)
  - [What uses](#what-uses)
  - [Screenshots](#screenshots)
  - [How to install](#how-to-install)
  - [How to configure](#how-to-configure)
    - [Get an API key](#get-an-api-key)
    - [How to execute](#how-to-execute)
  - [Testing](#testing)


## What is
It's a web that uses [NewsAPI]('https://newsapi.org/) like main API to get differents news about something particular or some topic like health. This app provides two types of search, the first one it's about searching some concret thing, the other gets latest news.

## Project purpose
The goal was to dive into concepts like Service Provider and Service Container, also other of the purposes was to enhance SOLID principles like Interface Segretation Principle (IS) and Dependency Inversion Principle (DIP).

### What makes it different ?
It's not like other applications that have a strong union with a specific API, this app offers to the users the ability to change over API news with a few modifications, thanks to **Interface Segregation Principle**

## What uses
It's easy, just :
- Laravel 8 with the last available version at the moment [Laravel]( https://laravel.com/) . 
- Laravel Breeze for handle authentication features, [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) .
- But also MySQL and SQLite.

## Screenshots
Some pictures about the app :

## How to install
Clone the repository and install project dependencies with :

```
git clone git@github.com:joslmt/news-api.git

composer install
```

## How to configure
It's necessary gets a `.env` , so writte in console :

```
cp .env.example .env
```

Now, generate an own key for your project :

```
php artisan key:generate
```

Finally, push your database config within `.env` .
```
   DB_CONNECTION=mysql
   DB_HOST=
   DB_PORT=3306
   DB_DATABASE=
   DB_USERNAME=
   DB_PASSWORD=
```

### Get an API key
Just go to [NewsAPI]('https://newsapi.org/) and click 'Get API Key' .

### How to execute
There're some options, if you use something like XAMPP or similar :
```
php artisan test
```

Or a good alternative like Docker or Homestead like me. 

[How to install Homestead for Laravel.]('https://github.com/joslmt/CRUD')

## Testing
There're a few test to check the app.
