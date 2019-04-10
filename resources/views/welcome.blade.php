<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Application with Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div id="appendDivNews">
    <nav class="navbar fixed-top navbar-light bg-faded" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">News Around the World</a>
    </nav>
    {{ csrf_field() }}
    <section id="content" class="section-dropdown">
        <p class="select-header"> Select a news source: </p>
        <label class="select">
            <select name="news_sources" id="news_sources">
                <option value="{{$sourceId}} : {{$sourceName}}">{{$sourceName}}</option>
                @foreach ($newsSources as $newsSource)
                    <option value="{{$newsSource['id']}} : {{$newsSource['name'] }}">{{$newsSource['name']}}</option>
                @endforeach
            </select>

        </label>
        <object id="spinner" data="spinner.svg" type="image/svg+xml" hidden></object>
    </section>
    <div id="news">
        <p> News Source : {{$sourceName}} </p>


        <section class="news">
            @foreach($news as $selectedNews)

                <article>
                    <img src="{{$selectedNews['urlToImage']}}" alt=""/>
                    <div class="text">
                        <h1>{{$selectedNews['title']}}</h1>
                        <p style="font-size: 14px">{{$selectedNews['description']}} <a href="{{$selectedNews['url']}}"
                                                                                       target="_blank">
                                <small>read more...</small>
                            </a></p>
                        <div style="padding-top: 5px;font-size: 12px">
                            Author: {{$selectedNews['author'] ? : "Unknown" }}</div>
                        @if($selectedNews['publishedAt'] !== null)
                            <div style="padding-top: 5px;">Date
                                Published: {{ Carbon\Carbon::parse($selectedNews['publishedAt'])->format('l jS \\of F Y ') }}</div>
                        @else
                            <div style="padding-top: 5px;">Date Published: Unknown</div>
                        @endif

                    </div>
                </article>
            @endforeach
        </section>


    </div>
</div>

</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Scripts -->
<script src="{{ asset('js/site.js') }}"></script>

</html>