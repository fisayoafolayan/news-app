[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)

# Build a news aggregator site with Laravel and newsapi.org  

This is a simple implementation of how to a news aggregator site with Laravel and newsapi.org


## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites
What things you need to install the software.

- Git.
- PHP.
- Composer.
- Laravel CLI.

## Install
Clone the git repository on your computer
```
$ git clone https://github.com/fisayoafolayan/news-app.git
```
You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.
```
$ cd news-app
$ composer install
```

## Setup
When you are done with installation, copy the .env.example file to .env
```
$ cp .env.example .env
```

Generate the application key
```
$ php artisan key:generate
```

## Set environment keys
Log on to [newsapi.org](https://newsapi.org/) to generate a new api key.
```
NEWS_API_KEY=insert_key_here
NEWS_API_URL='https://newsapi.org/v2/'
DEFAULT_NEWS_SOURCE='CNN'
DEFAULT_NEWS_SOURCE_ID='cnn'
```

## Run the application
```
$ php artisan serve
```
## Links
[Tutorial](https://fisayoafolayan.com/blog/build-a-news-aggregator-site-with-laravel/)

[Live Demo](https://newsapi.fisayoafolayan.com/)


