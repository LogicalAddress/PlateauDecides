<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Add Topics</a>
                        <!-- <a href="{{ url('/register') }}">Register</a> -->
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <!-- {{ config('app.name', '#PlateauDecides') }} -->
                <img height="300" src="/images/plateaudecides-xlogo.jpg"/>
                </div>
                <div>
                <?php $counter = 0; ?>
                @foreach ($topics as $topic)
                    <?php if($counter === 10) { break ;}else{ $counter++; }?>
                    <h4><a href="/topics/{{$topic->slug}}">{{$topic->title}}</a></h4>
                    <div class="row review">
                        <div class="large-12 columns">
                            <i class="a-icon a-icon-star a-star-3"></i>
                            <span class="round alert label">{{20}}</span>
                            <div class="product_description">{{$topic->description}}</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
