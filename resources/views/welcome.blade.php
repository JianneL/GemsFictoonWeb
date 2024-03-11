<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img_srcs/gem.png" type="image/x-icon">
    <title>Gem's Fictoon</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            background-color: lightgray;
        }
        .page{
            width: 100%;
            height: 100vh;
            margin: auto;
            padding: 0;
            display: flex;
        }
        .navigation-area{
            height: 100px;
            width: 100%;
            padding: 2px;
            margin: 2px;
            position: fixed;
        }
        .navigation-bar{
            position: fixed;
            top: 2;
            margin: auto;
            width: 100%;
            background-color: black;
            border-radius: 20px;
        }
        h1{
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }
        ul{
            list-style-type: none;
            margin-top: 2%;
            margin-bottom: 2%;
            overflow: hidden;
            padding-left: 42%;
        }
        li{
            float: left;
            color: white;
            padding-right: 10px;
            text-align: center;
            justify-content: center;
        }
        a{
            text-decoration: none;
            color: white;
            font-family: Verdana;
        }
        li a:hover{
            color: lightblue;
            font-weight: bold;
        }
        li a{    
            padding: 6px;
        }
        .web-name:hover {
            color: skyblue;
        }
        .active{
            color: skyblue;
            font-weight: bold;
        }
        .container {
            width: 100%;
            margin: auto;
            min-height: 100vh;
        }
        .desc-box{
            background-image: linear-gradient(darkblue, blue);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .gem-photo{
            background-color: black;
            margin-top: 8%;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: 3px solid black;
            width: 180px;
            height: 180px;
            display: block;
        }
        .info{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 2px;
            text-decoration: none;
            display: inline-block;
            border-radius: 20px;
            padding: 10px;          
        }
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        h2{
            color: white;
            font-family: Verdana;
        }
        h3 {
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        p{
            color: white;
            font-family: Verdana;
        }
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer-text {
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <section class = "page">
        <div class = "navigation-area">
            <div class = "navigation-bar">
                <h1><a href = "welcome.welcome" class = "web-name">GEM'S FICTOON</a></h1>
                <ul>
                    <li><a href = "{{ route('welcome.welcome') }}" class = "active">HOME</a></li>
                    <li><a href = "{{ route('community.community') }}">COMMUNITY</a></li>
                    <li><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                    <li><a href = "{{ route('about.about') }}" >ABOUT</a></li>
                    <li><a href = "{{ route('account.account') }}" >ACCOUNT</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('LOG OUT') }}
                        </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class = "container">
        <img src = "/img_srcs/gem.png" alt = "gem pic" class = "gem-photo">
            <div class = "desc-box">
                <h2> WELCOME TO MY WORLD OF FICTION!</h2>
                <p>
                    Hello, I am GEM! I am a visionary character who owns a library of digital books. 
                    In here, books are not just mere manuscripts; they are treasured gems, each 
                    holding a unique brilliance waiting to be discovered. I am not just a curator but 
                    a guide, connecting readers and authors with written gems that will leave an indelible 
                    mark on their hearts and minds.
                </p>
                <p>
                    My library is also your library! A community where ideas flourish, creativity thrives, 
                    and the magic of storytelling continues to captivate hearts.
                </p>
                <button type = "button" class = "info"><a href = "{{ route('about.about') }}">More info<a></button>
            </div>
        </div>
    </section>
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>