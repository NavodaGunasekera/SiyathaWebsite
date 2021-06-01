<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->

<head>
    <title>Club</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="/fevicon.png" type="image/png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">
    <!-- light box gallery -->
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <style>
       .topnav {

overflow: hidden;

background-color: #333;

}



.topnav a {

float: left;

color: #f2f2f2;

text-align: center;

padding: 14px 16px;

text-decoration: none;

font-size: 20px;

}



.topnav a:hover {

background-color: #ddd;

color: black;

}



.topnav a.active {

background-color: #4CAF50;

color: white;

} 
    .row:after {
        content: "";
        display: table;
        clear: both
    }

    .column-66 {
        float: left;
        width: 66.66666%;
        padding: 20px;
    }

    .column-33 {
        float: left;
        width: 33.33333%;
        padding: 20px;
    }

    img {
        display: block;
        height: auto;
        max-width: auto;

    }

    @media screen and (max-width: 1000px) {

        .column-66,
        .column-33 {
            width: 100%;
            text-align: center;
        }
   
        img {
            margin: 0 auto;
        }
    }

    .mySlides {
        display: none;
    }



    header {
        background-image: url('images/edited04.png');
        background-size: 100% auto;
        position: relative;
    }
    .button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 18px;
  color: #FFFFFF;
  padding: 20px;
  width: 150px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s;
}
.button span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}



.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}



.button:hover span {
padding-right: 25px;
}



.button:hover span:after {
opacity: 1;
right: 0;
}
.card:hover{transform: scale(1.05);box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);}

div.column-66 h1{
    width:600px; 
    color: lightgreen;
animation: example linear infinite;
animation-duration: 10s;
}
@keyframes example {
from {color:lightgreen;}
to {color: yellow;}
}


@media screen and (max-width: 600px) {
div.card {
width: 100%;
display: block;
margin-bottom: 20px;
}
}



    </style>
</head>

<body id="inner_page">
    <!-- header -->

    <header class="header">

        <div class="header_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="full">
                            <div class="logo">
                                <a href="index.html"><img src="images/siyatha.png"
                                        style="width: 200px; margin-left: 1px;" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 site_information">
                        <div class="full">
                            <div class="main_menu">
                                <nav class="navbar navbar-inverse navbar-toggleable-md">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="float-left">Menu</span>
                                        <span class="float-right"><i class="fa fa-bars"></i> <i
                                                class="fa fa-close"></i></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="/">මුල් පිටුව</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-aqua-hover" href="/about">අප ගැන</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-aqua-hover" href="courses">පාඨමාලා</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ගැලරිය
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{url('/albumView')}}">පින්තූර ගැලරිය</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="{{url('/vedioAlbumView')}}">වීඩියෝ ගැලරිය</a>
                                      
                                      
                                    </div>
                                 </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-grey-hover" href="/contact">විමසීම්</a>
                                            </li>
                                        </ul>
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><img src="images/search_icon.png"
                                                        alt="#" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end header -->

    <!-- section -->
    <section class="main_full inner_page">
        <div class="container-fluid">
            <div class="row">
                <div class="full">
                    <h3>සංගම්</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- about section -->
    <br><br>
    <!-- Travel -->
    <div class="card">
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1>Travel Siyatha</h1>
                <br><br>
                <p>මෙහිදී අධ්‍යාපනය ලබන උසස්පෙළ සිසුන් වෙනුවෙන් මෙම සංගමය අරම්භ කර ඇත.
                    විනෝද චාරිකා යාමට කැමති සිසුන් මෙම සංගමයට එකතු වන්න.</p>
                    <button class="button" onclick="window.location.href='/club2'"> <span> View More </span></button>
            </div>
            <div class="column-33">
                <img src="club2img/testimonial-02.jpg" width="335" height="471">
            </div>
        </div>
    </div>
</div> <br>
    <!-- Robotics -->
    <div class="card" style="background-color:#f1f1f1">
    <div class="container" >
        <div class="row">
            <div class="column-33">
                <img src="club3img/robo.jpg" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1>Robotics Siyatha</h1>
                <br><br> 
                <p>මෙහිදී සිසුන්ගේ හකියාවන් පිලිබදව දැන ගැනීම
                    සදහා නව නිර්මාන නිපදවීමට කැමති සිසුන් මෙම සංගමය සමග එකතු වන්න</p>
                    <button class="button" onclick="window.location.href='/club3'"><span> View More </span></button>
            </div>
        </div>
    </div>
</div> <br>
    <!-- Creative -->
    <div class="card">
    <div class="container">
        <div class="row">
            <div class="column-66"> <br>
                <h1>Creative Siyatha</h1>
                <br><br> 
                <p>මෙහිදි සංගමය මගින් විවිධ උත්සවයන්, උළෙලවල්, පිංකම්, යනාදිය සිදු කරනු ලබයි.
                    තවද, රෝහල් වලට අවශ්‍යය උපකරණ යනාදියද පරිත්‍යාග කරනු ලබයි.
                    මෙම සංගමය සඳහා එකතු වීමට කැමතී නම් අපත් සමග එකතු වන්න.</p>
                    <button class="button" onclick="window.location.href='/club4'"> <span>View More </span></button>
            </div>
            <div class="column-33">
                <img src="club4img/club4img1.jpg" width="335" height="471">
            </div>
        </div>
    </div>
</div> <br>
    <h1>
        <center>Club Events</center>
    </h1>
    <center>
        <div class="w3-content w3-section" style="max-width:1000px">
            <img class="mySlides" src="aboutimages/praharsha/1.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/2.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/3.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/4.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/5.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/6.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/7.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/8.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/9.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/10.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/11.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/12.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/13.jpg" style="width:100%">
            <img class="mySlides" src="aboutimages/praharsha/14.jpg" style="width:100%">
        </div>
    </center>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
    </div>
    <br><br>
    <!-- <a class="nav-link color-grey-hover" href="/loginclub"><button class="open-button">Club Login/Register</button></a> -->

    <!--  <div class="form-popup" id="myForm">
        <form action="/loginclub" class="form-container">
            <h1>New Ideas</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>New ideas you want to suggest</b></label>
            <input type="password" placeholder="Enter the Idea" name="psw" required>

            <button type="submit" class="btn">Submit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div> -->

    <!--  <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    </script> -->
<div class="banner" style="padding:15px; text-align:center;">
<div class="banner-content">
<h1>Payments</h1>
<p>Here You can  know about club payments</p>
<a href="/clubpayment" class="btn btn-primary">VISIT</a>
</div>
</div>

    <!-- footer -->
    <footer class="footer layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <a href="index.html"><img class="img-responsive" src="images/siyatha.png"
                            style="width: 50%;;" /></a>
                    <div class="footer_link_heading">
                        <div class="footer_menu margin_top_30">
                            <ul>
                                <li><a href="tel:9876543210">සියත අධ්‍යාපන ආයතනය </a></li>
                                <li><a href="#">මාකදුර ගෝනවිල </a></li>
                                <li><a href="#">දු.අ.:077-6442126</a></li>
                                <li><a href="#">siyatha@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>FEATURED COURSES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Starting Soon</a></li>
                                    <li><a href="#">Just Added</a></li>
                                    <li><a href="#">Most Viewed</a></li>
                                    <li><a href="#">Top Paid</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>CATEGORIES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Arts & Design</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Data entery</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>USEFUL LINKS</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact search</a></li>
                                    <li><a href="#">Jobs and vacancies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="cpy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright 2019. All Rights Reserved.<a href="https://html.design/"> </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <!-- Core JavaScript
         ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="commonminjs/tether.min.js"></script>
    <script src="commonminjs/bootstrap.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="commonjs/animate.js"></script>
    <script src="commonjs/ekko-lightbox.js"></script>
    <script src="commonjs/custom.js"></script>
</body>

</html>