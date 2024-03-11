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
            margin-left: 50px;
            margin-top: 10%;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .gem-photo{
            background-color: black;
            margin: 10px;
            margin-right: 30px;
            border-radius: 20px;
            border: 3px solid black;
            width: 100px;
            height: 100px;
            float: left;
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
        h4 {
            color: black;
            font-family: Verdana;
            padding-left: 30px;
            font-size: 24px;

        }
        p{
            color: white;
            font-family: Verdana;
        }
        .container {
            width: 100%;
            min-height: 100vh;
            margin: 20px;
            top: 10%;
            justify-content: center; 
            display: block;
            margin-top: 8%;
        }
        .story-container{
            background-image: linear-gradient(darkblue, blue);
            margin: 5px;
            padding: 5px;
            width: 90vw;
            min-height: 32vh;
            border-radius: 20px;
            border: 3px solid black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        button.genre-container{
            float: left;
            height: 30vh;
            width: 20%;
            border: 3px solid black;
            border-radius: 20px;
            margin: 10px;
            background-image: linear-gradient("gray, lightgray");
            text-align: left;
            font-family: Verdana;
            font-size: 18px;
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
                <h1><a href = "{{ route('welcome.welcome') }}" class = "web-name">GEM'S FICTOON</a></h1>
                <ul>
                    <li><a href = "{{ route('welcome.welcome') }}">HOME</a></li>
                    <li><a href = "{{ route('community.community') }}">COMMUNITY</a></li>
                    <li><a href = "{{ route('library.library') }}" class = "active">LIBRARY</a></li>
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
            <h4>Top Story</h4>
            <div class = "story-container">
                <!-- insert highest likes story-->
            </div>
            <h4>Genres</h4>
            <div class = "story-container">
                <button type = "button" class = "genre-container" onClick = "openRomance()">ROMANCE</button>
                <button type = "button" class = "genre-container" onClick = "openAction()">ACTION</button>
                <button type = "button" class = "genre-container" onClick = "openHorror()">HORROR</button>
                <button type = "button" class = "genre-container" onClick = "openComedy()">COMEDY</button>
            </div>
        </div>
    </section>
<script>
    function openRomance() {

    }
    function openAction() {
        
    }
</script>
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>