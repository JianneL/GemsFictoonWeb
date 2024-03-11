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
        /*Title texts*/
        h1{
            font-size: 30px;
            color: white;
            font-family: Verdana;
            font-weight: bolder;
            float: left;
            display: block;
            margin-left: 25px;
        }
        h2{
            color: white;
            font-family: Verdana;
        }
        h3 {
            color: black;
            font-family: Verdana;
            text-align: left;
            font-size: 20px;
        }
        h4{
            color: white;
            font-family: Verdana;
            text-align: left;
            font-size: 18px;
        }
        h3.footer-title{
            color: white;
            font-family: Verdana;
            text-align: center;
            font-size: 20px;
        }
        .footer-text {
            text-align: center;
        }
        /*Listing*/
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
        /*Links*/
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
        /*main content*/
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
        
        p{
            color: white;
            font-family: Verdana;
        }
        /*footer*/
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        /*group sections*/
        .public-group-sec{
            margin-top: 8%;
            padding: 20px;
            float: left;
            width: 50%;
            height: 100vh;
        }
        .created-group{
            width: 80%;
            height: 40px;
            border: 2px solid black;
            border-radius: 20px;
            padding: 10px;
            margin: 10px;
            text-align: justify;
        }
        .public-groups {
            width: 90%;
            min-height: 20vh;
            padding: 10px;
            border: 2px solid black;
            border-radius: 20px;
            background-image: linear-gradient(darkblue, blue);
        }
        .join-button, .close-button, .view-details {
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
            cursor: pointer;
        }
        .join.button:hover, .close-button:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }
        .details-popup {
            display: none;
            position: fixed;
            justify-content: center;
        }
        .view-details-container{
            width: 20vw;
            height: 20vh;
            padding: 20px;
            border: 2px solid black;
            border-radius: 20px;
            background-color: lightblue;
            color: black;
            margin: 20px;
            
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
                    <li><a href = "{{ route('community.community') }}" class = "active">COMMUNITY</a></li>
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
        <!-- listing of public groups-->
        <div class = "public-group-sec">
            <h3>PUBLIC GROUPS</h3>
            <!--For each, getting created group from users-->
            <table class = "public-groups">
                <!--iterate table row-->
                <tr class = "created-group">
                    <td class = "group-info">
                        <h4>GROUP NAME</h4> <!-- get data from user(group creator)-->
                        <p>group name description/introduction</p>
                        <button type = "button" class = "view-details" onClick = "viewDetails()">View Details</button>

                        <div class = "details-popup" id = "detailForm">
                            <form action = "/community.blade.php" class = "view-details-container">
                                <h4><font color = "black">GROUP NAME</font></h4>
                                <p><font color = "black">group name description/introduction</font></p>
                                <button type = "submit" class = "join-button">Join Group</button>
                                <button type = "button" class = "close-button" onClick = "closeDetails()">Close</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class = "public-group-sec">
            <h3>PRIVATE GROUPS</h3>
            <!--For each, getting created group from users-->
            <table class = "public-groups">
                <!--iterate table row-->
                <tr class = "created-group">
                    <td class = "group-info">
                        <h4>GROUP NAME</h4> <!-- get data from user(group creator)-->
                        <p>group name description/introduction</p>
                        <button type = "button" class = "view-details" onClick = "viewPrivDetails()">View Details</button>

                        <div class = "details-popup" id = "detailPrivForm">
                            <form action = "/community.blade.php" class = "view-details-container">
                            <h4><font color = "black">GROUP NAME</font></h4>
                                <p><font color = "black">group name description/introduction</font></p>
                                <button type = "submit" class = "join-button">Request to Join</button>
                                <button type = "button" class = "close-button" onClick = "closePrivDetails()">Close</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
<script>
    function viewDetails() {
    document.getElementById("detailForm").style.display = "block";
    }
    function viewPrivDetails() {
    document.getElementById("detailPrivForm").style.display = "block";
    }

    function closeDetails() {
        document.getElementById("detailForm").style.display = "none";
    }
    function closePrivDetails() {
        document.getElementById("detailPrivForm").style.display = "none";
    }
</script>
</body>
<footer>
        <h3 class = "footer-title"> GEM'S FICTOON </h3>
        <p class = "footer-text">All rights reserved.</p>
</footer>
</html>