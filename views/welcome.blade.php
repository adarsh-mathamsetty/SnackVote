<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Voting</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .mid-left {
                position: absolute;
                left: 10px;
                top: 500px;
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
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>

        <div class= "flex-center position-ref full-height">
          <div class = "position-ref mid-left">

          </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                    <p style="margin-top:20px">Login to record your vote.<p>
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md" style="margin-top:150px">
                    Vote Snack<br/>
                    <p style="color: #FF0000; font-size:30px;font-family: Great Vibes, cursive; margin-left:380px;margin-top:-5px"> - Your Vote is Your Voice!<p>

                </div>
                <p id= "image" style="margin-top:-50px"><img src="http://moziru.com/images/vegetable-clipart-funny-cartoon-16.jpg" height="400px" width="700px"/></p>
<p style="color: #d54d7b; font-size:50px;font-family: Great Vibes, cursive; margin-left:90px"></p>


            </div>
        </div>

    </body>
</html>
