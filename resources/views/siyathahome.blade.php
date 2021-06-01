
<!DOCTYPE html>

<html>
<head>


<title>Bootstrap Example</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<link href="{{URL('asserts/js/script.js') }}" rel="script">
<link href="{{URL('asserts/js/script.js') }}" rel="script">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>


  <style type="text/css">

.mySlides {display:none;}

    .services .icon-box {
      box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
      padding-bottom: 30px;
      padding-top: 50px;
      padding-right: 40px;
      padding-left: 40px;
      transition: all ease-in-out 0.4s;
      background: #fff;
    }

    .services .icon-box .icon {
      margin-bottom: 10px;
    }

    .services .icon-box .icon i {
      font-size: 36px;
    }

    .services .icon-box h5 {
      font-weight: 500;
      margin-bottom: 15px;
      font-size: 24px;
    }

    .services .icon-box h5 a {
      color: #37517e;
      transition: ease-in-out 0.3s;
    }

    .services .icon-box p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .services .icon-box:hover {
      transform: translateY(-10px);
      background-color: yellowf;
      color: white;
      cursor: pointer;
    }

    .services .icon-box:hover h5 a {
      color: white;
    }

    .services .icon-box:hover .btn-hover {
      background-color: white;
      color: black;
      border: none;
    }

#facts {
  background: url("images/siyatha.png") center top no-repeat fixed;
  background-size: cover;
  padding: 60px 0 0 0;
  position: relative;
}

#facts::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.88);
  z-index: 9;
}

#facts .container {
  position: relative;
  z-index: 10;
}

#facts .counters span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #18d26e;
}

#facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #111;
}

#facts .facts-img {
  text-align: center;
  padding-top: 30px;
}

#call-to-action {
  background: linear-gradient(rgb(114, 112, 111, 0.91), rgba(51, 51, 48, 0.02)), url("../img/hero-bg.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
}

#call-to-action h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

#call-to-action p {
  color: #fff;
}

#call-to-action .cta-btn {
  font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
}

#call-to-action .cta-btn:hover {
  background: #18d26e;
  border: 2px solid #18d26e;
}

.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
          border-radius: 5px;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
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

.list-timeline .list-timeline-item[data-toggle=collapse] {
  cursor: pointer
}

.list-timeline .list-timeline-item.active:before,
.list-timeline .list-timeline-item.show:before {
  background: #ccc
}

.list-timeline.list-timeline-light .list-timeline-item.active:before,
.list-timeline.list-timeline-light .list-timeline-item.show:before,
.list-timeline.list-timeline-light:before {
  background: #f8f9fa
}

.list-timeline .list-timeline-item.list-timeline-item-marker-middle:before {
  top: 50%;
  margin-top: -6px
}

.list-timeline.list-timeline-light .list-timeline-item:before {
  border-color: #f8f9fa
}

.list-timeline.list-timeline-grey .list-timeline-item.active:before,
.list-timeline.list-timeline-grey .list-timeline-item.show:before,
.list-timeline.list-timeline-grey:before {
  background: #e9ecef
}

.list-timeline.list-timeline-grey .list-timeline-item:before {
  border-color: #e9ecef
}

.list-timeline.list-timeline-grey-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-grey-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-grey-dark:before {
  background: #495057
}

.list-timeline.list-timeline-grey-dark .list-timeline-item:before {
  border-color: #495057
}

.list-timeline.list-timeline-primary .list-timeline-item.active:before,
.list-timeline.list-timeline-primary .list-timeline-item.show:before,
.list-timeline.list-timeline-primary:before {
  background: #55A79A
}

.list-timeline.list-timeline-primary .list-timeline-item:before {
  border-color: #55A79A
}

.list-timeline.list-timeline-primary-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-primary-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-primary-dark:before {
  background: #33635c
}

.list-timeline.list-timeline-primary-dark .list-timeline-item:before {
  border-color: #33635c
}

.list-timeline.list-timeline-primary-faded .list-timeline-item.active:before,
.list-timeline.list-timeline-primary-faded .list-timeline-item.show:before,
.list-timeline.list-timeline-primary-faded:before {
  background: rgba(85, 167, 154, .3)
}

.list-timeline.list-timeline-primary-faded .list-timeline-item:before {
  border-color: rgba(85, 167, 154, .3)
}

.list-timeline.list-timeline-info .list-timeline-item.active:before,
.list-timeline.list-timeline-info .list-timeline-item.show:before,
.list-timeline.list-timeline-info:before {
  background: #17a2b8
}

.list-timeline.list-timeline-info .list-timeline-item:before {
  border-color: #17a2b8
}

.list-timeline.list-timeline-success .list-timeline-item.active:before,
.list-timeline.list-timeline-success .list-timeline-item.show:before,
.list-timeline.list-timeline-success:before {
  background: #28a745
}

.list-timeline.list-timeline-success .list-timeline-item:before {
  border-color: #28a745
}

.list-timeline.list-timeline-warning .list-timeline-item.active:before,
.list-timeline.list-timeline-warning .list-timeline-item.show:before,
.list-timeline.list-timeline-warning:before {
  background: #ffc107
}

.list-timeline.list-timeline-warning .list-timeline-item:before {
  border-color: #ffc107
}

.list-timeline.list-timeline-danger .list-timeline-item.active:before,
.list-timeline.list-timeline-danger .list-timeline-item.show:before,
.list-timeline.list-timeline-danger:before {
  background: #dc3545
}

.list-timeline.list-timeline-danger .list-timeline-item:before {
  border-color: #dc3545
}

.list-timeline.list-timeline-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-dark:before {
  background: #343a40
}

.list-timeline.list-timeline-dark .list-timeline-item:before {
  border-color: #343a40
}

.list-timeline.list-timeline-secondary .list-timeline-item.active:before,
.list-timeline.list-timeline-secondary .list-timeline-item.show:before,
.list-timeline.list-timeline-secondary:before {
  background: #6c757d
}

.list-timeline.list-timeline-secondary .list-timeline-item:before {
  border-color: #6c757d
}

.list-timeline.list-timeline-black .list-timeline-item.active:before,
.list-timeline.list-timeline-black .list-timeline-item.show:before,
.list-timeline.list-timeline-black:before {
  background: #000
}

.list-timeline.list-timeline-black .list-timeline-item:before {
  border-color: #000
}

.list-timeline.list-timeline-white .list-timeline-item.active:before,
.list-timeline.list-timeline-white .list-timeline-item.show:before,
.list-timeline.list-timeline-white:before {
  background: #fff
}

.list-timeline.list-timeline-white .list-timeline-item:before {
  border-color: #fff
}

.list-timeline.list-timeline-green .list-timeline-item.active:before,
.list-timeline.list-timeline-green .list-timeline-item.show:before,
.list-timeline.list-timeline-green:before {
  background: #55A79A
}

.list-timeline.list-timeline-green .list-timeline-item:before {
  border-color: #55A79A
}

.list-timeline.list-timeline-red .list-timeline-item.active:before,
.list-timeline.list-timeline-red .list-timeline-item.show:before,
.list-timeline.list-timeline-red:before {
  background: #BE3E1D
}

.list-timeline.list-timeline-red .list-timeline-item:before {
  border-color: #BE3E1D
}

.list-timeline.list-timeline-blue .list-timeline-item.active:before,
.list-timeline.list-timeline-blue .list-timeline-item.show:before,
.list-timeline.list-timeline-blue:before {
  background: #00ADBB
}

.list-timeline.list-timeline-blue .list-timeline-item:before {
  border-color: #00ADBB
}

.list-timeline.list-timeline-purple .list-timeline-item.active:before,
.list-timeline.list-timeline-purple .list-timeline-item.show:before,
.list-timeline.list-timeline-purple:before {
  background: #b771b0
}

.list-timeline.list-timeline-purple .list-timeline-item:before {
  border-color: #b771b0
}

.list-timeline.list-timeline-pink .list-timeline-item.active:before,
.list-timeline.list-timeline-pink .list-timeline-item.show:before,
.list-timeline.list-timeline-pink:before {
  background: #CC164D
}

.list-timeline.list-timeline-pink .list-timeline-item:before {
  border-color: #CC164D
}

.list-timeline.list-timeline-orange .list-timeline-item.active:before,
.list-timeline.list-timeline-orange .list-timeline-item.show:before,
.list-timeline.list-timeline-orange:before {
  background: #e67e22
}

.list-timeline.list-timeline-orange .list-timeline-item:before {
  border-color: #e67e22
}

.list-timeline.list-timeline-lime .list-timeline-item.active:before,
.list-timeline.list-timeline-lime .list-timeline-item.show:before,
.list-timeline.list-timeline-lime:before {
  background: #b1dc44
}

.list-timeline.list-timeline-lime .list-timeline-item:before {
  border-color: #b1dc44
}

.list-timeline.list-timeline-blue-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-blue-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-blue-dark:before {
  background: #34495e
}

.list-timeline.list-timeline-blue-dark .list-timeline-item:before {
  border-color: #34495e
}

.list-timeline.list-timeline-red-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-red-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-red-dark:before {
  background: #a10f2b
}

.list-timeline.list-timeline-red-dark .list-timeline-item:before {
  border-color: #a10f2b
}

.list-timeline.list-timeline-brown .list-timeline-item.active:before,
.list-timeline.list-timeline-brown .list-timeline-item.show:before,
.list-timeline.list-timeline-brown:before {
  background: #91633c
}

.list-timeline.list-timeline-brown .list-timeline-item:before {
  border-color: #91633c
}

.list-timeline.list-timeline-cyan-dark .list-timeline-item.active:before,
.list-timeline.list-timeline-cyan-dark .list-timeline-item.show:before,
.list-timeline.list-timeline-cyan-dark:before {
  background: #008b8b
}

.list-timeline.list-timeline-cyan-dark .list-timeline-item:before {
  border-color: #008b8b
}

.list-timeline.list-timeline-yellow .list-timeline-item.active:before,
.list-timeline.list-timeline-yellow .list-timeline-item.show:before,
.list-timeline.list-timeline-yellow:before {
  background: #D4AC0D
}

.list-timeline.list-timeline-yellow .list-timeline-item:before {
  border-color: #D4AC0D
}

.list-timeline.list-timeline-slate .list-timeline-item.active:before,
.list-timeline.list-timeline-slate .list-timeline-item.show:before,
.list-timeline.list-timeline-slate:before {
  background: #5D6D7E
}

.list-timeline.list-timeline-slate .list-timeline-item:before {
  border-color: #5D6D7E
}

.list-timeline.list-timeline-olive .list-timeline-item.active:before,
.list-timeline.list-timeline-olive .list-timeline-item.show:before,
.list-timeline.list-timeline-olive:before {
  background: olive
}

.list-timeline.list-timeline-olive .list-timeline-item:before {
  border-color: olive
}

.list-timeline.list-timeline-teal .list-timeline-item.active:before,
.list-timeline.list-timeline-teal .list-timeline-item.show:before,
.list-timeline.list-timeline-teal:before {
  background: teal
}

.list-timeline.list-timeline-teal .list-timeline-item:before {
  border-color: teal
}

.list-timeline.list-timeline-green-bright .list-timeline-item.active:before,
.list-timeline.list-timeline-green-bright .list-timeline-item.show:before,
.list-timeline.list-timeline-green-bright:before {
  background: #2ECC71
}

.list-timeline.list-timeline-green-bright .list-timeline-item:before {
  border-color: #2ECC71
}



  </style>


</head>


<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height: 80px;;">
  <!-- Brand -->
  <img src="images/siyatha.png" style="width: 80px; height: 40px; margin-left: 30px;">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: ash; margin-left: 70px;"><b>මුල් පිටුව</b></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"> <b>අප ගැන</b></a>
    </li>

    <!-- Dropdown -->
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <b>
      පාඨමාලා</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="සා/පෙළ තොරතුරු තාක්ෂණවේදය 10"></a>
        <a class="dropdown-item" href="සා/පෙළ තොරතුරු තාක්ෂණවේදය 11"></a>
      </div>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="#"> <b>ගුරු මණ්ඩලය</b></a>
    </li>
  </ul>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" style="margin-left: 800px;" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit"  style="margin-left: 700px;">Search</button>
  </form>
</nav>
<br>
	

  <section id="hero">

    <div class="container">
      <div class="row">
තොරතුරු සංනිවේදන තාක්ෂණවේදය        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1 style="color: black;">සියත අධ්‍යාපන​ ආයතනය</span></h1>
            <h2>SPREAD THE LIGHT OF KNOWLEDGE</h2>
            <div class="text-center text-lg-left">
              <a href="" class="btn-get-started scrollto">Join Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="images/homeslide2.jpg" class="img-fluid animated" alt="" style="width: 600px; border-radius: 200px;">
        </div>
      </div>
    </div>


    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>

  <div class="w3-container"  style = "background: #ebe8e1;" >

  <div class="section-title" >

</div>

<div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides w3-animate-right" src="images/achive/11.png" style="width:100%; border-radius: 10%; padding-left: 10px;"> 
  <img class="mySlides w3-animate-right" src="images/achive/12.png" style="width:100%; border-radius: 10%; padding-left: 10px;">
  <img class="mySlides w3-animate-right" src="images/achive/13.png" style="width:120%; border-radius: 10%; padding-left: 10px;">
  <img class="mySlides w3-animate-right" src="images/achive/14.png" style="width:120%; border-radius: 10%; padding-left: 10px;">
</div>

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
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> පාඨමාලා</h2>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6  mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box h-100 d-flex flex-column "  style="border-radius: 25px; background-color: 	gainsboro;" >
            
               <img src="images/bst/bst1.jpg" style="width: 270px; height: 300%; margin: center;">
              <h5><a href="">ජෛව පද්ධති තාක්ෂණවේදය</a></h5>
            
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto " style="width: 100%; height: 40%; "><h2> තවත්</h2> </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box h-100 d-flex flex-column" style="border-radius: 25px; background-color: 	gainsboro;">
            <img src="images/sft/sft1.jpg" style="width: 270px; height: 300%; margin: center;" >
              <h5><a href="">තාක්ෂණවේදය සදහා විද්‍යාව</a></h5>
            
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto" style="width: 100%; height: 40%;"><h2> තවත්</h2> </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch mt-4 mt-md-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box h-100 d-flex flex-column" style="border-radius: 25px; background-color: 	gainsboro;">
            <img src="images/et/et1.jpg" style="width: 270px; height: 200px; margin: center;" >
            <h5><a href="">ඉංජිනේරු තාක්ෂණවේදය</a></h5>
             
           
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto" style="width: 100%; height: 20%;"><h2> තවත්</h2> </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch  mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box h-100 d-flex flex-column" style="border-radius: 25px; background-color: 	gainsboro;">
            <img src="images/alit/alit1.jpg" style="width: 270px; height: 250%;  margin: center;" >
              <h5><a href="">උ/පෙළ </a></h5>
              
             
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto" style="width: 100%; height: 20%;"><h2> තවත්</h2> </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box h-100 d-flex flex-column" style="border-radius: 25px; background-color: 	gainsboro;">
            <img src="images/olit/olit1.jpg" style="width: 270px; height: 300%;  margin: center;" >
              <h5><a href=""> සා/පෙළ තොරතුරු සංනිවේදන තාක්ෂණවේදය (11 වසර) <p style="background: rgba(0,0,0,0.8);font-size: 15px;box-shadow: 0 8px 10px #000">
</a></h5>
              
              <p style="margin-bottom: 5%;"> </p>
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto" style="width: 100%; height: 20%;"><h2> තවත්</h2> </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box h-100 d-flex flex-column" style="border-radius: 25px; background-color: 	gainsboro;">
            <img src="images/olit/olit3.jpg" style="width: 270px; height: 300%;  margin: center;" >
              

              <h5><a href="">සා/පෙළ තොරතුරු<br>සංනිවේදන තාක්ෂණවේදය<br>(10 වසර)</p></a></h5>
              
            
              <a href="MoreDetails11.php" class="btn btn-primary btn-hover mt-auto" style="width: 100%; height: 40%;"><h2> තවත්</h2> </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
          
          </div>

         

          </div>
        </div>

      </div>
    </section>


   


    <section id="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 > අමතර ක්‍රියාකාරකම් </h2>
        </div>


        <div class="facts-img">
          <img src="images/clubs/travel1.jpg" alt="" class="img-fluid" style="width: 25%; height: 210px; ;">
          <img src="images/clubs/robatic2.jpg" alt="" class="img-fluid" style="width: 35%; height: 300px;">
          <img src="images/clubs/9copy.jpg" alt="" class="img-fluid" style="width: 26%; height: 210px;">

          
        </div>

      </div>

    </section>
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3 style="color: black;">නිර්මාණශීලි සියත </h3>
       
        <a class="cta-btn" href="coachTours1.php" style="color: black;"> Join with Us </a>
      </div>
    </section>

    <section id="skills">
      <div class="container-fluid" data-aos="fade-up">

        


      </div>
    </section>



  </main>

</body>
</html>