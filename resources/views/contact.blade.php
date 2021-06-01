<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<title>Contact</title>
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
                                                <a class="nav-link color-aqua-hover" href="/courses">පාඨමාලා</a>
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
                    <h3>විමසීම්</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="map">
                            <h3>Map</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2818525347548!2d79.97618731415267!3d7.322204415395502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e763a3f082c9%3A0x7802a7f8bf2323e5!2sSiyatha%20Education%20Institute!5e0!3m2!1sen!2slk!4v1613732837652!5m2!1sen!2slk"
                                width="1200" height="400" frameborder="0" style="border:1;" allowfullscreen=""
                                aria-hidden="true" tabindex="0"></iframe><br><br><br><br><br>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <div class="form_cont">
                                <h3>Talk With Us</h3>
                                <form action="index.blade.php">
                                    <fieldset>
                                        <div class="field">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                        <div class="field">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="field">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="field">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                        <div class="field center">
                                            <button>Send</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



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