<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
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
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                XMLHttpRequest example
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>

                <a href="https://laracasts.com">Laracasts</>

                    <a href="users">users</a>
                    <a href="XMLHttpRequest_GET">XMLHttpRequest GET</a>


            </div>

            <div id="demo">Response will be here</div>

            <button type="button" onclick="loadXMLDoc()">Get the email</button>


            <div>
                <form action="/post" method="Post">Post Form oldschool
                    @csrf
                    <input type="text" name="email" id="">

                    <button type="submit">Submit</button>
                </form>
            </div>


            <div>
                <form action="/postit" method="Post">Post Form with XMLHttpRequest
                    @csrf
                    <input type="text" name="email" id="">

                    <button type="button" onclick="postit()">Postit</button>
                    {{-- <button type="submit">Submit</button> --}}

                </form>
            </div>

            <input id="try" type="text">


            <h3>users
                @foreach ($users as $user )
                {{ $user->email }}

                <br>
                @endforeach
            </h3>
            <div id="demo2">Response2 will be here</div>
            <div id="demo3">Response3 will be here</div>
            <div id="demo4">Response4 will be here</div>
            <div id="demo5">Response5 will be here</div>
            <div id="demo6">Response6 will be here</div>
            <div id="demo7">Response7 will be here</div>
            <div id="demo8">Response8 will be here</div>
        </div>

        {{-- <div id="demo2">Response2 will be here</div> --}}


    </div>

    <script>
        function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo").innerHTML = xhttp.responseText;
                // alert('send');
            }
        };

        xhttp.open("GET", 'XMLHttpRequest_GET?t=" + Math.random()', true);

        //These lines are needed in POST
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // xhttp.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content );

        xhttp.send(); //by get send method doesnt have a parameter.

        }

    </script>

    <script>
        // var try = document.getElementById("try").innerHTML.value;
        // var try = document.getElementById("try").value;
        // alert(try);

        function postit() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
        document.getElementById("demo2").innerHTML = xhttp.responseText;
        document.getElementById("demo3").innerHTML = xhttp.readyState;
        document.getElementById("demo4").innerHTML = xhttp.status;
        document.getElementById("demo5").innerHTML = xhttp.statusText;
        document.getElementById("demo6").innerHTML = xhttp.responseXML;
        document.getElementById("demo7").innerHTML = xhttp.getAllResponseHeaders();
        document.getElementById("demo8").innerHTML = xhttp.getResponseHeader();

        // alert('send');
        }
        };

        xhttp.open("POST", "postit", true);
        //These 2 lines are needed in POST
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content );

        xhttp.send("email=anyad@anyad.hu"); //by get send method doesn't have a parameter.

        }
    </script>
</body>

</html>



{{-- // xhttp.open("POST", '{{route('profile.toggleCategory', $user)}}', true);

// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// xhttp.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content );

// xhttp.send("categories="+categories); --}}
