<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.min.css">
    <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.orange-coral.min.css">
    <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.midnight-blue.min.css">
    <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.royal-navy.min.css">

    <link rel="stylesheet" type="text/css" href="./demo/demo.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="teach.css">
   <style>

   .ANIM{
    animation: glowanim 3s linear infinite;
   }

   @keyframes glowanim{
      0%{
          box-shadow: 0 0 0 rgb(0, 119, 255);
      }

    50%{
        box-shadow: 0 0 10px rgb(0, 132, 255),
                    0 0 20px rgb(0, 132, 255),
                    0 0 30px rgb(0, 132, 255),
                    0 0 40px rgb(0, 132, 255);
    }

  }

    #chco{
      background: none;
    }

    #chco:hover{
      background: rgba(0,0,0,0.5);
    }
.hover{
  background: none;
}

.hover:hover {
  background-color: rgba(0,0,0,0.5);
}


   * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


      .page-content{
  min-height: 80vh;
  font-size: 15px;
  align-items: center;
  justify-content: center;
}

.staff01{
  display: flex;

  padding-left: 20%;

}

.s11{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  z-index: 10;

}

.s11 img{
  width: 280px;
  height: 280px;
  border-radius: 50%;
  z-index: 10;
  animation-duration: 4s;
}

.anim{
  width: 280px;
  height: 280px;
  background: none;
  position: relative;
  box-sizing: border-box;
}

.anim:hover:before{
  content: '';
  position: absolute;
  top: -15px;
  left: -15px;
  width: 310px;
  height: 310px;
  background: linear-gradient(to top, transparent, rgba(0,0,0,0.8));
  background-size: 140px 310px;
  background-repeat: no-repeat;
  z-index:-1;
  border-radius: 50%;
  animation: show 2s linear infinite;
}

/*
.anim:hover::after{
  content: '';
  position: absolute;
  top: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 15px;
  height: 15px;
  background: #19B719;
  border-radius: 50%;
  box-shadow: 0 0 10px #19B719,
              0 0 20px #19B719,
              0 0 30px #19B719,
              0 0 40px #19B719,
              0 0 50px #19B719,
              0 0 60px #19B719,
              0 0 70px #19B719,
              0 0 80px #19B719,
              0 0 90px #19B719,
              0 0 100px #19B719;
}
*/
@keyframes show{
  0%{
    transform: rotate(0deg);
  }
  100%{
    transform: rotate(360deg);
  }
}

.s12{
  width: 70%;
  height: 215px;
  background: #D1D8EC ;
  margin: 25px 0 0 -75px;
  padding-left: 90px;
  padding-right: 20px;
}

.s12 h2{
  border-bottom: 1px solid #aaa;
}

.s12 p{
  margin-left: 75%;
  margin-top: -5.5px;
  color: #333;
}

.s12 button{
  background-color: black;
  border: none;
  height: 50px;
  width: 130px;
  border-radius: 10px 0 10px 0;
}

.s12 span{
  color: #333;
  margin-top: 30px;
}

.staff02{
  display: flex;
  padding-top: 2%;
  padding-left: 20%;
}

.s21{
  width: 150px;
  height: 150px;
  border-radius: 50px;
  z-index: 1;
}

.s21 img{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s22{
  width: 70%;
  height: 100px;
  background: #999;
  margin: 25px 0 0 -75px;
  padding-left: 90px;
  padding-right: 20px;
}

.s22 h2{
  border-bottom: 1px solid #aaa;
}

.s22 p{
  margin-left: 75%;
  margin-top: -17.5px;
  color: #333;
}

.s22 button{
  background-color: #ccc;
  border: none;
  height: 30px;
  width: 100px;
  border-radius: 10px 0 10px 0;
}

.s22 span{
  color: #333;
  margin-top: 30px;
}

.s22 button:hover, .s12 button:hover{
  background-color: white;
  cursor: pointer;
}

@media screen and (max-width:850px){
  .staff01{
  display: flex;
  padding-top: 5.5%;
  padding-left: 5%;
}

  .s11{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  z-index: 1;
}

.s11 img{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s12{
  width: 80%;
  height: 90px;
  background: #999;
  margin: 15px 0 0 -60px;
  padding-left: 80px;
  padding-right: 15px;
}

.s12 h2{
  font-size: 20px;
}

.s12 p{
  margin-left: 75%;
  margin-top: -14px;
  color: #333;
}

.s12 button{
  border: none;
  height: 24px;
  width: 90px;
  font-size: 15px;
}

.s12 span{
  font-size: 15px;
}

.staff02{
  display: flex;
  padding-top: 2%;
  padding-left: 10%;
}

.s21{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  z-index: 1;
}

.s21 img{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s22{
  width: 80%;
  height: 90px;
  background: #999;
  margin: 15px 0 0 -60px;
  padding-left: 80px;
  padding-right: 15px;
}

.s22 h2{
  font-size: 20px;
}

.s22 p{
  margin-left: 75%;
  margin-top: -14px;
  color: #333;
}

.s22 button{
  border: none;
  height: 24px;
  width: 90px;
  font-size: 15px;
}

.s22 span{
  font-size: 15px;
}

}


@media screen and (max-width:650px){
  .s11{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
}

.s11 img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s12{
  width: 80%;
  height: 80px;
  background: #999;
  margin: 10px 0 0 -55px;
  padding-left: 80px;
  padding-right: 15px;
}

.s12 h2{
  font-size: 16px;
}

.s12 p{
  margin-left: 75%;
  margin-top: -14px;
  margin-bottom: 0px;
  color: #333;
}

.s12 button{
  border: none;
  height: 20px;
  width: 80px;
  font-size: 12px;
}

.s12 span{
  font-size: 12px;
}


.s21{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
}

.s21 img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s22{
  width: 80%;
  height: 80px;
  background: #999;
  margin: 10px 0 0 -55px;
  padding-left: 80px;
  padding-right: 15px;
}

.s22 h2{
  font-size: 16px;
}

.s22 p{
  margin-left: 75%;
  margin-top: -14px;
  margin-bottom: 0px;
  color: #333;
}

.s22 button{
  border: none;
  height: 20px;
  width: 80px;
  font-size: 12px;
}

.s22 span{
  font-size: 12px;
}

}


@media screen and (max-width:500px){
  .page-content{
    min-height: 50vh;
  }
  .s11{
  width: 90px;
  height: 90px;
  border-radius: 50%;
  z-index: 1;
}

.s11 img{
  width: 90px;
  height: 90px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s12{
  width: 80%;
  height: 70px;
  background: #999;
  margin: 10px 0 0 -45px;
  padding-left: 60px;
  padding-right: 20px;
}

.s12 h2{
  font-size: 13px;
}

.s12 p{
  margin-left: 75%;
  margin-top: -16px;
  margin-bottom: -5px;
  color: #333;
}

.s12 button{
  border: none;
  height: 17.5px;
  width: 70px;
  font-size: 11px;
}

.s12 span{
  font-size: 11px;
}
/*njm */
.s21{
  width: 90px;
  height: 90px;
  border-radius: 50%;
  z-index: 1;
}

.s21 img{
  width: 190px;
  height: 190px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s22{
  width: 80%;
  height: 70px;
  background: #999;
  margin: 10px 0 0 -45px;
  padding-left: 60px;
  padding-right: 20px;
}

.s22 h2{
  font-size: 13px;
}

.s22 p{
  margin-left: 75%;
  margin-top: -16px;
  margin-bottom: -5px;
  color: #333;
}

.s22 button{
  border: none;
  height: 17.5px;
  width: 70px;
  font-size: 11px;
}

.s22 span{
  font-size: 11px;
}
}

@media screen and (max-width:380px){

  .btnn{
    margin: 20px;
    width: 100%;
    margin-top: 20px;
  }
  .bottom{
    font-size: 14px;
  }
  .page-content{
    min-height: 50vh;
    font-size: 15px;
  }
  .staff01{
    padding-top: 5%;
    padding-left: 5%;
  }
  .s11{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
}

.s11 img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s12{
  width: 80%;
  height: 80px;
  background: #999;
  margin: 10px 0 0 -50px;
  padding-left: 60px;
  padding-right: 20px;
}

.s12 h2{
  font-size: 11px;
}
  .s12 p{
  margin-left: 60%;
  margin-top: 12px;
  margin-bottom: -37px;
  color: #333;
  }
  .staff02{
    padding-top: 5%;
    padding-left: 5%;
  }

  .s21{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
}

.s21 img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  z-index: 1;
  border: 10px solid #999;
}

.s22{
  width: 80%;
  height: 80px;
  background: #999;
  margin: 10px 0 0 -50px;
  padding-left: 60px;
  padding-right: 20px;
}

.s22 h2{
  font-size: 11px;
}
  .s22 p{
  margin-left: 60%;
  margin-top: 0px;
  margin-bottom: -25px;
  color: #333;
  }
}

p.solid {border-style: solid;}

** {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 25.00%;
  padding: 50px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 360px;
  height: 360px;
  perspective: 1000px;
  border-radius: 180px;


}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 50px;
  border-radius: 180px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  border-radius: 180px;

}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 370px;
  height: 370px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  border-radius: 180px;
}

.flip-card-back {
  background-color: #2980b9;
  color: blue;
  transform: rotateY(180deg);
  border-radius: 180px;
  width: 370px;
  height: 370px;
}



body{
    background-color:#eee;
    margin-top:20px;
}

.list-timeline {
  margin: 0;
  padding: 5px 0;
  position: relative
}

.list-timeline:before {
  width: 1px;
  background: #ccc;
  position: absolute;
  left: 6px;
  top: 0;
  bottom: 0;
  height: 100%;
  content: ''
}

.list-timeline .list-timeline-item {
  margin: 0;
  padding: 0;
  padding-left: 24px !important;
  position: relative
}

.list-timeline .list-timeline-item:before {
  width: 12px;
  height: 12px;
  background: #fff;
  border: 2px solid #ccc;
  position: absolute;
  left: 0;
  top: 4px;
  content: '';
  border-radius: 100%;
  -webkit-transition: all .3 ease-in-out;
  transition: all .3 ease-in-out
}


</style>


   <meta charset="utf-8">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>siyatha</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
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

  <meta name="viewport" content="width=device-width, initial-scale=1">
   <body id="home_page" class="home_page" style="background-color: #ECF0F1
;">



      <!-- header -->

      <header class="header" >

        <div class="header_top_section" >
           <div class="container" >
              <div class="row" >
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                       <div id="logo1">
                     <a href="index.html"><img src="images/gif11.gif"  id="logo1" id="animated-img1" ></a>
</div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse1 navbar-toggleable-md" style="border: none;">
                           <button id="navid" style="width: 40px;position: absolute; top: -100px;right: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">

                              <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="navcolor01 collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
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
                                    <a class="nav-link" href="#"><img src="images/search_icon.png" alt="#" /></a>
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
      <section class="main_full banner_section_top">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
                  <div class="slider_banner">
                    <img id="img-responsive"  src="images/edited04.png">
                      <div class="slide_cont">
                        <div class="slider_cont_inner">
                          <h3 id="topclick01" class="animate__zoomIn" style="animation-duration: 4s;">සියත අධ්‍යාපන ආයතනය</h3>
                        <p id="p01" data-aos="fade-zoom-in"data-aos-easing="ease-in-back" data-aos-delay="300"data-aos-offset="0">දැනුමේ වාසනාව කරා අපගේ සිසුන්ට මග පෙන්වීම. ජයග්‍රාහකයින් අතර ජයග්‍රාහකයින් බිහි කිරීම මෙන්ම ගෞරවනීය සමාජ වටිනාකම් සහිත අමතර ක්‍රියාකරකම් වලින් පිරිපුන් පුද්ගලයන් බිහි කිරීම. </p>
                        <a class="blue_bt" href="/AchivementAlbumView" id="btn02">වැඩිදුර කියවන්න</a>


                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
      </section>
      <!-- end section -->

     <!-- about section -->
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">




                     <h2 id="ocs" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">ජයග්‍රහණ</h2>
                  </div>
                  <div class="full">
                     <p id="#p01" class="large" data-aos="fade-zoom-in"data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"></p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="background: #D6EAF8 ; border-radius: 10px; box-shadow:  0 0 7px rgba(0,0,0,0.6), 0 0 15px rgba(0,0,0,0.8);">
      <div class="item active">
        <img src="images/achive/11.png" style="width:100%; height: 100%">
      </div>

      <div class="item">
        <img src="images/achive/12.png" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/achive/13.png" alt="New york" style="width:100%;">
      </div>


    <div class="item">
        <img src="images/achive/14.png" style="width:100%;">
      </div>
    </div>



    <!-- Left and right controls -->
    <a id="chco"  class="hover left carousel-control" href="#myCarousel" data-slide="prev" style=" border-bottom-right-radius: 200%; border-top-right-radius: 200%; width: 100px;" >
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a  id="chco" class="right carousel-control" href="#myCarousel" data-slide="next"  style=" border-bottom-left-radius: 200%; border-top-left-radius: 200%; width: 100px;">
      <span class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end about section -->

      <!-- section -->

      <section class="layout_padding section">
         <div class="container" id="sec_mg" > <!--style="background: url('images/dottet_bg.png');"---->
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2 id="oc" > පාඨමාලා</h2>
               <br>
               <br>

                  </div>
                  <div class="full">

                  </div>
               </div>
            </div>

      <div  id="cont_c">
        <div class="col-md-4 text_align_center" data-aos="fade-right">
            <div class="course">
            <div class="flip-card"  id="res_img">
            <div class="flip-card-inner"  id="res_img">
            <div class="flip-card-front"  id="res_img">
                <img  id="res_img" src="images/sft/sft1.jpg" >
                </div>
                <div class="flip-card-back" id="res_img_back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                  <p>We love that guy</p>
                </div>
                </div>
            <br>
            <br>
            </br>

            <h4 id="sub" >තාක්ෂණවේදය සදහා විද්‍යාව </h4>

            </div>
            </div>
        </div>


      <div class="col-md-4 text_align_center" data-aos="zoom-in">
          <div class="cours">
          <div class="flip-card" id="res_img">
          <div class="flip-card-inner" id="res_img">
          <div class="flip-card-front"id="res_img" >
              <img id="res_img" src="images/et/et1.jpg">
              </div>
              <div class="flip-card-back" id="res_img_back">
              <h1>John Doe</h1>
              <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
              </div>
          <br>
          <br>
          </br>
          <h4 id="sub"> ඉංජිනේරු තාක්ෂණවේදය </h4>

          </div>
          </div>
      </div>


      <div class="col-md-4 text_align_center" data-aos="fade-left">
          <div class="cours">
          <div class="flip-card" id="res_img">
          <div class="flip-card-inner" id="res_img">
          <div class="flip-card-front" id="res_img">
              <img src="images/bst/bst1.jpg" id="res_img" >
              </div>
              <div class="flip-card-back" id="res_img_back">
              <h1>John Doe</h1>
              <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
              </div>
          <br>
          <br>
          </br>
          <h4 id="sub"> ජෛව පද්ධති තාක්ෂණවේදය </h4>

          </div>
          </div>
      </div>

      <div class="col-md-4 text_align_center" data-aos="fade-right">
            <div  class="cours">
            <div class="flip-card" id="res_img">
            <div class="flip-card-inner" id="res_img">
            <div class="flip-card-front" id="res_img">
                <img src="images/alit/alit1.jpg" id="res_img">
                </div>
                <div class="flip-card-back" id="res_img_back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                  <p>We love that guy</p>
                </div>
                </div>
            <br>
            <br>
            </br>
            <h4 id="sub"> උ/පෙළ තොරතුරු සංනිවේදන තාක්ෂණවේදය </h4>
            </div>
            </div>
      </div>


      <div class="col-md-4 text_align_center"  data-aos="zoom-in">
          <div class="cours">
          <div class="flip-card" id="res_img">
          <div class="flip-card-inner" id="res_img">
          <div class="flip-card-front" id="res_img">
              <img src="images/olit/olit1.jpg" id="res_img">
              </div>
              <div class="flip-card-back" id="res_img_back">
              <h1>John Doe</h1>
              <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
              </div>
          <br>
          <br>
          </br>
          <h4 id="sub"> සා/පෙළ තොරතුරු සංනිවේදන තාක්ෂණවේදය (10 වසර) </h4>

          </div>
          </div>
      </div>


      <div class="col-md-4 text_align_center"  data-aos="fade-left">
          <div class="flip-card" id="res_img">
            <div class="flip-card-inner" id="res_img">
              <div class="flip-card-front" id="res_img">
              <img src="images/olit/olit3.jpg" id="res_img">
              </div>
              <div class="flip-card-back" id="res_img_back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
            <br>
            <br>
            <br>

            <h4 id="sub"> සා/පෙළ තොරතුරු සංනිවේදන තාක්ෂණවේදය (11 වසර) </h4>
          </div>
        </div>
      </div>
         </div>

            <div class="row" style="margin-top: 190px;">
               <div class="col-md-12">
                  <div class="full center">
                      <a class="blue_bt" href="#">Read More</a>
                  </div>
               </div>
            </div>

      </section>

      <!-- end section -->


      <!-- section -->
      <section class="layout_padding section" style="padding-top: 3px; "  >
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">

                  </div>
               </div>
            </div>
            <div id="nonepad" class="row" >
              <div class="col-md-12 cours_timging_bg">
                 <div class="conttime container">
                   <div class="time_and_cal">
                    <div id="timetb" class="time_table" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" >

        <h3 style="margin-left: 10px;" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0" ></h3>


        <!-----------------class time table-------------------->

<div >

    <div >

        <h3 >පන්ති පැවැත්වෙන වේලාවන්
        </h3>
        <hr>
        <br id="topclick">
        </br>
        <div class="accordion" id="accordionExample" >
  <div class="ANIM accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <a href="#topclick" style="text-decoration-line: none; color:black;">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
       <h4> අ.පො.ස. උසස් පෙළ විභාගය &nbsp;&nbsp; 2023</h4>
      </button></a>
    </h2 style=" border-top: 1px solid red;">
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><a style="font-size: 20px;" href="">තාක්ෂණවේදය සදහා විද්‍යාව</a></strong>
        <h5 style="color: #19B719;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ඉංජිනේරු තාක්ෂණවේදය</a></strong>
        <h5 style="color: #19B719;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ජෛව පද්ධති තාක්ෂණවේදය</a></strong>
        <h5 style="color: #19B719;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">තොරතුරු සංනිවේදන තාක්ෂණවේදය</a></strong>
        <h5 style="color: #19B719;">8.00 A.M - 5. 00 P.M</h5> </br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <a href="#topclick" style="text-decoration-line: none; color:black;">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <h4>අ.පො.ස. උසස් පෙළ විභාගය &nbsp;&nbsp; 2022<h4>
      </button></a>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong><a href="" style="font-size: 20px;">තාක්ෂණවේදය සදහා විද්‍යාව</a></strong>
        <h5 style="color: #C285D5 ;" style="font-size: 20px;" >8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ඉංජිනේරු තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ජෛව පද්ධති තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;" >8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">තොරතුරු සංනිවේදන තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;">8.00 A.M - 5. 00 P.M</h5> </br>      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <a href="#topclick" style="text-decoration-line: none; color:black;">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
      <h4>අ.පො.ස. උසස් පෙළ විභාගය &nbsp;&nbsp; 2021<h4>
      </button></a>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong><a href="" style="font-size: 20px;">තාක්ෂණවේදය සදහා විද්‍යාව</a></strong>
        <h5 style="color: #C285D5 ;" style="font-size: 20px;" >8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ඉංජිනේරු තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ජෛව පද්ධති තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;" >8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">තොරතුරු සංනිවේදන තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C285D5 ;">8.00 A.M - 5. 00 P.M</h5> </br>      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <h4>අ.පො.ස. සාමාන්‍ය පෙළ විභාගය 10 / 11<h4>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong><a href="" style="font-size: 20px;">තාක්ෂණවේදය සදහා විද්‍යාව</a></strong>
        <h5 style="color: #C70039 ;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ඉංජිනේරු තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C70039  ;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">ජෛව පද්ධති තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C70039  ;">8.00 A.M - 5. 00 P.M</h5> </br>
        <strong><a href="" style="font-size: 20px;">තොරතුරු සංනිවේදන තාක්ෂණවේදය</a></strong>
        <h5 style="color: #C70039  ;">8.00 A.M - 5. 00 P.M</h5> </br>      </div>
      </div>
    </div>
  </div>



</div>
        <p class="text-sm text-dark mt-0 mb-5"></p>
        <!-- Days -->

                         <table class="w3-table" >


  </table>
</div>
                 </div>
                   <div class="cal01">
                   <div  id="calendar"></div>
                   </div>

              </div>
            </div>
         </div>
      </section>
      <!-- end section -->


 <!-- Grid -->

 <div class="w3-container w3" style=" border-width: 100px; border-color:black; background: url('images/dottet_bg.png');">

 <div class="row">



 <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">



    <div class="full heading_s1">
h5,
h5,
                     <h2 id= "tea"data-aos="fade-up"data-aos-anchor-placement="top-center">ගුරු මණ්ඩලය</h2>
                     <br>
                     <br>
                  </div>
                  <div class="full">

 </div>

 </div>
 <div class="page-content"  data-aos="fade-right" >
    <main id="main">
            <div class="sleft">
              <h1 class="heading">Eng. Chanaka Maheel</h1>
              <p class="summery">Eng Chanaka Maheel is the founder and the Director of the "SIYATHA EDUCATION INSTITUTE". He has been a lecture in the institute since 2014 and teaches Science for Technology, Engineering Technology and Information of Communication Technology subjects in the institute</p>
              <button class="vmbtn" onclick="window.location.href='http://127.0.0.1:8000/teacher1'">View More</button>
            </div>
            <div class="sright">
            </div>
        </main>

        <main id="main2">
            <div class="sleft">
              <h1 class="heading">Eng. Chanaka Maheel</h1>
              <p class="summery">Eng Chanaka Maheel is the founder and the Director of the "SIYATHA EDUCATION INSTITUTE". He has been a lecture in the institute since 2014 and teaches Science for Technology, Engineering Technology and Information of Communication Technology subjects in the institute</p>
              <button class="vmbtn" onclick="window.location.href='http://127.0.0.1:8000/teacher1'">View More</button>
            </div>
            <div class="sright">
            </div>
        </main>

  <!--    <div class="staff01" style="  padding-top: 0" >
        <div class="anim">
          <div class="s11">

            <img src="images/staff/sp1.jpg" class="img01" style="box-shadow:  0 0 7px rgba(0,0,0,0.6), 0 0 15px rgba(0,0,0,0.8);">
          </div>
        </div>
        <div class="s12" style="box-shadow:  0 0 7px rgba(0,0,0,0.6), 0 0 15px rgba(0,0,0,0.8);">
          <h6 style="margin-top: 50px; margin-left: 200px;">Eng. Chanaka Maheel</h6>
          <p><button onclick="window.location.href='http://127.0.0.1:8000/teacher1'" style="color: white;">view profile</a></button></p>
          <h6  style="margin-bottom: 15px; margin-left: 200px;">Director/Founder</span><br>

        </div>
      </div>

      <div class="staff01" style= "  padding-top: 5%"; data-aos="fade-left">
      <div class="anim">
        <div class="s11">
          <img src="images/staff/sp2.jpg" class="img01" style="box-shadow:  0 0 7px rgba(0,0,0,0.6), 0 0 15px rgba(0,0,0,0.8);" >
        </div>
      </div>
        <div class="s12" style="box-shadow:  0 0 7px rgba(0,0,0,0.6), 0 0 15px rgba(0,0,0,0.8);">
          <h6 style="margin-top: 50px; margin-left: 200px;">Eng. Chanaka Maheel</h6>
          <p><button onclick="window.location.href='http://127.0.0.1:8000/teacher2'" style="color: white;">view profile</a></button></p>
          <h6  style="margin-bottom: 20px; margin-left: 200px;">Director/Founder</span><br>

        </div>
      </div> -->
 </div>
<br>
<br>
<br>
</br>
</br>

</ul>
  </nav>





</div>
<br>
<br>






      <!-- section -->

  <meta name="viewport" content="width=device-width, initial-scale=1" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
     <section class="layout_padding section" style="background-color: #fd9b05;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2  id= "tea"data-aos="fade-up" data-aos-anchor-placement="top-center">අමතර ක්‍රියාකරකම්</h2>
                  </div>
                  <div class="full">

                  <div class="clearfix" >
  <div id="bgnone" class="box" style=" width:20%;">

  <div class="column" id="bgnone">
  </div>
  </div>
  <div class="box" id="bgnone"  data-aos="fade-left">
  <img id = "img01" src="images/logo/cs.png" >
  <div class="column">
  </div>
  </div>

  <div class="box" id="bgnone" style=" width:20%;">
  <img id="#img02" src="images/logo/TWS.png"   data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
  <div class="column" >
  </div>
  </div>


  <div class="box" id="bgnone" style=" width:20%;">
  <img  id="#img03" src="images/logo/cs.png"  data-aos="fade-right">
  <div class="column">
  </div>
  </div>

  <div class="box" id="bgnone" style=" width:20%;">

  <div class="column">

  </div>
</div>







</div>

               </div>


                  </div>
                  <div class="full margin_top_30 text_align_center">

                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
                    <a class="blue_bt" id="btn01" href="/club">Join Our Clubs</a>
                  </div>
               </div>
            </div>
        </div>
      </section>
      <!-- end section -->
      </div>


      <!-- section -->


      <!-- footer -->
      <div id="primary secondary">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <footer class="footer layout_padding">
         <div class="container">
            <div class="row">

               <div class="col-md-4 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/siyatha.png" style= "width: 50%;"/></a>
                  <div class="footer_link_heading">
                     <div class="footer_menu margin_top_30">
                     <ul>
                        <li><a  href="tel:9876543210">සියත අධ්‍යාපන ආයතනය</a></li>
                        <li><a  href="#">මාක‍ඳුර, ගෝනවිල</a></li>
                        <li><a  href="#">දු. අ. :- 077-6442126</a></li>
                        <li><a  href="#">siyatha@gmail.com</a></li>
                     </ul>
                  </div>
                  </div>
               </div>

               <div class="col-md-8">
                 <div class="row">
                    <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3 style="color: #fff;
    font-size: 22px;
    font-weight: 300;
    letter-spacing: 0;">FEATURED COURSES</h3>
                  </div>
                  <div class="footer_menu">
                     <ul>
                        <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Starting Soon</a></li>
                        <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;"href="#">Just Added</a></li>
                        <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Most Viewed</a></li>
                        <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Top Paid</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3 style="color: #fff;
    font-size: 22px;
    font-weight: 300;
    letter-spacing: 0;">CATEGORIES</h3>
                  </div>
                  <div class="footer_menu">
                    <ul>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Arts & Design</a></li>
                       <li><a  style="font-size: 16px; font-family: 'Poppins', sans-serif;"href="#">Business</a></li>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Computer</a></li>
                       <li><a  style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Data entery</a></li>
                    </ul>
                  </div>
               </div>

               <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3 style="color: #fff;
    font-size: 22px;
    font-weight: 300;
    letter-spacing: 0;" >USEFUL LINKS</h3>
                  </div>
                  <div class="footer_menu">
                    <ul>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">FAQs</a></li>
                       <li><a  style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Success Stories</a></li>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Shop</a></li>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;"   href="#">Privacy policy</a></li>
                       <li><a style="font-size: 16px; font-family: 'Poppins', sans-serif;"  href="#">Contact search</a></li>
                       <li><a   style="font-size: 16px; font-family: 'Poppins', sans-serif;" href="#">Jobs and vacancies</a></li>
                    </ul>
                  </div>
               </div>
                 </div>
               </div>

            </div>
         </div>


      </footer>
      </div>



      <div style="color: white;">

      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p style="color: black;">Copyright 2019. All Rights Reserved.<a style="color:black;"href="https://html.design/"> Free html Templates</a></p>
             </div>

           </div>
           </div>
        </div>
      </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.js"></script>

      <script>
  AOS.init();

  $('#calendar').fullCalendar({
  defaultView: 'month',
  events    : [
  
{

    title : 'mmm',
    start : '2021-05-31',


},

],
});
</script>



   </body>
</html>


