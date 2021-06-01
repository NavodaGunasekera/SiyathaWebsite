<!DOCTYPE html>
<html>
<body>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title> How to use fullcalender in Laravel 8 </title>
<link rel="stylesheet" href="https://stackpath.boostrapcdn.com/boostrap/4.3.1/css/boostrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css/">
<href src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script> src="https://cdnjs.cloudflare.com/ajax/libs/fullcalender/3.9.0/fullcalender.js" </script>
</head>

<div class="container">
<br/>
<h1 class="text-center text-primary"><u>How to use</u><h1>
</br>
<div id="calender"></div>
</div>

<script>
$(document).ready(function () {

    $ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
        }
    });

    var calender = $('#calender').fullCalender();
});
</script>
</body>
</html>



