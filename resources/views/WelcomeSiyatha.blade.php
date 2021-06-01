<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="navoda_image/siyatha.png">
	<title>Welcome</title>
	<!-- <link rel="stylesheet" type="text/css" href="navoda_css/welcome.css"> -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="{{url('navoda_css/style.css')}}">
    <link rel="stylesheet" href="{{url('navoda_css/style-2.css')}}">
    <link rel="stylesheet" href="{{url('navoda_css/welcome.css')}}">

<style>
@media only screen and (max-width: 600px) { 
  main  { 
      margin-left: -136px; 
      
  }
}
</style>


</head>
<body>
<main>
<div class="card">
	<img  class="w3-animate-zoom" src="images/gif11.gif">

	<h2 class="w3-center w3-animate-zoom">ආයුබෝවන්</h2>

	<h4 class="w3-center w3-animate-zoom" >සියත අධ්‍යාපන ආයතනය </h4>


	<!-- <div>
		<h4 class="lang">Select language for continue</h4>
	</div> -->

	<div class="btn w3-center w3-animate-bottom" style="animation-duration: 4s;">
		
		<button ><a href="{{url('/siyatha')}}">English</a></button>
		<button ><a class="sin w3-center w3-animate-bottom" href="{{url('/')}}">සිංහල</a></button>

	</div>

</div>
</main>

<script src="navoda_js/jquery-3.3.1.min.js"></script>
   
   <script src="navoda_js/particles.min.js"></script>
   <script>
       $(document).ready(function() {

           $("body").delay(100).addClass("show-logo");
           $("body").delay(5000).addClass("show-lines");
             $("body").delay(100).addClass("show-logo"); 
       });
   </script>
       
   
   
   <script>
   particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#ffffff"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"size_min":56.05,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#18ed11","opacity":0.3,"width":3},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":10},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
   </script>

</body>
</html>