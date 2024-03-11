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
        section{
            min-height: 60vh;
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
        .container-wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: auto;
        }
        .container {
            width: 100%;
            margin: auto;
            min-height: 100vh;
        }
        .container-2 {
            width: 100%;
            margin: auto;
            min-height: 100vh;
            margin-top: -20vh;
            margin-bottom: 10%;
        }
        .desc-box{
            background-image: linear-gradient(darkblue, blue);
            padding: 26px;
            max-width: 50vw;
            min-height: 20vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            border-radius: 20px;
            border: 3px solid black;
            justify-content: center;
            text-align: justify;
        }
        .user-photo{
            background-color: black;
            margin: 10px;
            margin-right: auto;
            margin-left: auto;
            border-radius: 20px;
            border: 3px solid black;
            width: 130px;
            height: 130px;
        }
        .info{
            background-color: black;
            color: white;
            font-family: Verdana;
            font-size: 16px;
            border: 2px solid blue;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 20px;
            margin-right: auto;
            margin-left: auto;
        }
        .info:hover{
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        h2{
            color: white;
            font-family: Verdana;
            text-align: center;  
            font-size: 20px;    
        }
        h3 {
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        .profile-section-name {
            color: white;
            font-family: Verdana;
            text-align: left;
        }
        h4{
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 18px;
        }
        p{
            color: white;
            font-family: Verdana;
            text-align: justify;
        }
        table{
            padding: 2px;
            border-style: none;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
            height: 60px;
        }
        th, td {
            border-style: none;
            text-align: center;
        }
        .shelf{
            padding: 2px;
            border-style: none;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
            height: 60px;
        }
        .shelf-name, .shelf-content {
            border-style: none;
            text-align: center;
        }
        .shelf-content {
            padding: 20px;
            border: 2px solid black;
            background-color: gray;
            border-radius: 20px;
            height: 20vh;
            
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
                    <li><a href = "{{ route('library.library') }}">LIBRARY</a></li>
                    <li><a href = "{{ route('about.about') }}" >ABOUT</a></li>
                    <li><a href = "{{ route('account.account') }}" class = "active">ACCOUNT</a></li>
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
        <div class = "container-wrapper">
            <div class = "container">
                <div class = "desc-box">
                    <div class = "user-photo">
                        <img :src={{Auth::user()->user_image_link}}/>
                    </div>
                    <h2>{{Auth::user()->username}}</h2> 
                    <h3>username</h3> <!--change this-->
                    <br>
                    <h4 class = "profile-section-name">BIO</h4>
                    <p>
                        {{Auth::user()->biography}} <!--change this-->
                    </p>
                    <table>
                        <tr>
                            <th><h3>{{Auth::user()->following}}</h3></th> 
                            <th><h3>{{Auth::user()->follower}}</h3></th> 
                        </tr>
                        <tr>
                            <td><h4>FOLLOWING</h4></td> <!--change this-->
                            <td><h4>FOLLOWERS</h4></td> <!--change this-->
                        </tr>
                    </table>
                    <button type = "button" class = "info">Edit Profile</button>
                </div>
            </div>
            <div class = "container-2">
                <div class = "desc-box">
                    <h2>SHELF</h2>
                    <table class ="shelf">
                        <!--shelf db-->
                        <tr class = "shelf-name">
                            <td class = "shelf-name"><h4>SHELF 1</h4></td>
                            <td class = "shelf-name"><h4>SHELF 2</h4></td>
                        </tr>
                        <tr class = "shelf-name">
                            <td class = "shelf-content"></td> <!--insert user shelf data-->
                            <td class = "shelf-content"></td>
                        </tr>
                        <tr class = "shelf-name">
                            <td class = "shelf-name"><h4>SHELF 3</h4></td>
                            <td class = "shelf-name"><h4>SHELF 4</h4></td>
                        </tr>
                        <tr class = "shelf-name">
                            <td class = "shelf-content"></td> <!--insert user shelf data-->
                            <td class = "shelf-content"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section> 
</body>
<footer>
        <h3> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>