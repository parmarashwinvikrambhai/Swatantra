<!DOCTYPE html>
<head>
<title>Swatantra Global Garner</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link rel="stylesheet" href="css/monthly.css">
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
<!-- <img class="" src="https://swatantra.globalgarner.com/static/media/Swatantra_logo.508b1ad5.svg" />     -->
<a href="#" class="logo">
    <img src="https://s3.ap-south-1.amazonaws.com/gg-statics/gg-statics-staging/logo.png">
        Client
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="nav notify-row" id="top_menu">
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('ViewDonation') }}">
                <img alt="" src="	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg9hUdZBKHO-RAHYZkx5PQaHlex0MNZuB53Q&usqp=CAU">
                <span class="username">Donations</span>   
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
         <!-- <li><a href=""><i class="fa fa-key"></i>client side</a></li> -->
        <!-- <li><a href=""><i class="fa fa-hand-holding-usd"></i>Donations</a></li>  -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">{{ Session::get('firstname') }}</span>
                <b class="caret"></b>
            </a>
        </li>
    </ul>
</div>
</header>
</section>
</body>
</html>