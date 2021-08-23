<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ITjavEszl2e4vHRW1ODFgCSTxKLfnVg1YA&usqp=CAU" width="400">
</p>

# Laravel - NewsAPI
- [Laravel - NewsAPI](#laravel---newsapi)
  - [What is  :memo:](#what-is--memo)
  - [Project purpose :information_source:](#project-purpose-information_source)
    - [What makes it different ?](#what-makes-it-different-)
  - [What uses :information_source:](#what-uses-information_source)
  - [Screenshots](#screenshots)
  - [How to install :question:](#how-to-install-question)
  - [How to configure it :question:](#how-to-configure-it-question)
    - [Get an API key](#get-an-api-key)
    - [How to execute :question:](#how-to-execute-question)


## What is  :memo:
It's a web that uses [NewsAPI]('https://newsapi.org/) like main API to get differents news about something particular or some topic like health. This app provides two types of search, the first one it's about searching some concret thing, the other gets latest news.

## Project purpose :information_source:
The goal was to dive into concepts like Service Provider and Service Container, also other of the purposes was to enhance SOLID principles like Interface Segretation Principle (IS) and Dependency Inversion Principle (DIP).

### What makes it different ?
It's not like other applications that have a strong dependency with a specific API, this app offers to the users the ability to change over API news with a few modifications, thanks to **Interface Segregation Principle**

## What uses :information_source:
It's easy, just :
- Laravel 8 with the last available version at the moment [Laravel]( https://laravel.com/) . 
- Laravel Breeze for handle authentication features, [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) .
- But also MySQL and SQLite.

## Screenshots
Some pictures about the app :

![home](https://user-images.githubusercontent.com/64318244/130360941-c236848b-ebfa-47c7-a2d6-d855666033ec.PNG)

![latest](https://user-images.githubusercontent.com/64318244/130360890-42cdc2dc-104d-491f-a261-7a8647de9394.PNG)

![results](https://user-images.githubusercontent.com/64318244/130360891-c604bb1a-4b0b-4f0d-8a64-794941dc6c76.PNG)


## How to install :question:
Clone the repository and install project dependencies with :

```
git clone git@github.com:joslmt/news-api.git

composer install
```

## How to configure it :question:
It's necessary gets a `.env` file, so writte in console :

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
Just go to [NewsAPI](https://newsapi.org/) and click 'Get API Key' .

### How to execute :question:
There're some options, if you use something like XAMPP or similar :
```
php artisan serve
```

Or a good alternative like Docker or Homestead like me, take a look to one of my previous projects where I explained the steps to get Homestead installed.
[How to install Homestead for Laravel.](https://github.com/joslmt/CRUD)
