<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <head  itemscope itemtype="http://schema.org/WebSite">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News Application with Laravel</title>
        <link rel="icon" href="https://news-web-app.herokuapp.com/img/images.png">
        <meta itemprop="name" content="News Application with Laravel"/>
        <meta itemprop="url" content="https://news-web-app.herokuapp.com "/>
        <meta name="description" content="A Laravel app that gathers top news across multiple news sites . All thanks to newsapi.org || Fisayo Afolayan">
        <meta name="author" content="Fisayo Afolayan"> 
        <meta name="keywords" content="developer, news, api, software developer, nigeria, africa, php, laravel">
        <meta name="robots" content="index,follow">
        <meta property="og:image" content="https://news-web-app.herokuapp.com/img/images.png"/>
        <meta property="og:title" content="News Application with Laravel"/>
        <meta property="og:type" content="website"/>
        <meta name="og:description" content="A Laravel app that gathers top news across multiple news sites . All thanks to newsapi.org || Fisayo Afolayan">
        <meta property="og:url" content="https://news-web-app.herokuapp.com "/>
        <meta property="og:site_name" content="News Application with Laravel"/>
        <meta name="twitter:site" content="@fisayoafolayan">
        <meta name="twitter:creator" content="@fisayoafolayan">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="News Application with Laravel">
        <meta name="twitter:description" content="A Laravel app that gathers top news across multiple news sites . All thanks to newsapi.org || Fisayo Afolayan">
        <meta name="twitter:image" content="https://news-web-app.herokuapp.com/img/images.png">
        <meta name="twitter:domain" content="https://news-web-app.herokuapp.com">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://news-web-app.herokuapp.com/css/style.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/43db5e56d9.js"></script>

    </head>
    <body>
    <div id="appenDivNews">
        <nav class="navbar fixed-top navbar-light bg-faded" style="background-color: #e3f2fd;">
          <a class="navbar-brand" href="#">News Around the World</a>
        </nav>
    @yield('content')
    </body>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <script src="https://news-web-app.herokuapp.com/js/site.js"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    
</html>
