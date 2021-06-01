<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- Font Awesome -->
    
    <link rel="stylesheet" href="navoda_fontawesome_free/css/all.min.css">
    <link rel="stylesheet" href="navoda_css/alt/adminlte.min.css">
    <link rel="stylesheet" href="navoda_image/logo-icon.png">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Siyatha Education Institute</title>

    <style>
    body{
      background-color:#f4f6f9;
    }

    .card-primary{
      margin-top:30px; 
      box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
      margin-bottom: 1rem;
    }

    .card-warning{
      box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
      margin-bottom: 1rem;
    }
    </style>

  </head>
  <body>

  

  <section class="content" >
      <div class="container-fluid">
        <div class="row" >
          <div class="col-md-2">
          </div>
          <!-- left column -->
          <div class="col-md-8">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header text-black mb-3" style="bacground-color:#60b415">
                <h3 class="card-title">Create Album</h3>
              </div>
              <!-- /.card-header -->
              @foreach($errors->all() as $error)

              <div class="alert alert-danger" role="alert">
                  {{$error}}

              </div>

              @endforeach
              <!-- form start -->
              <form method="POST" action="{{url('image-album/store')}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText">Album Name</label>
                    <input type="text" class="form-control" id="exampleInputText" name="album_name" placeholder="Enter Album Name">
                  </div>      
                  <div class="form-group">
                    <label for="exampleInputText">Cover Image</label>
                    <input type="file" class="form-control" id="exampleInputText" name="cover_image" >
                  </div>            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <br>
            <section class="content">
      
        
          
            <div class="card card-warning">
              <div class="card-header text-black bg-warning mb-3">
                <h3 class="card-title">All Albums</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Album Name</th>
                      <th>Items</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($albums as $album)
                    <tr>
                      <td>{{$album->id}}</td>
                      <td>{{$album->album_name}}</td>
                      <td>{{$album->items}}</td>

                      <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('/addImage/'.$album->id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        <a href="" class="btn btn-info btn-sm"> <i class="fas fa-pencil-alt"></i></a>
                        <a href="{{url('/deletealbum/'.$album->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                    </tr>
                    @endforeach
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link text-black bg-warning " href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link text-black bg-warning " href="#">1</a></li>
                  <li class="page-item"><a class="page-link text-black bg-warning " href="#">2</a></li>
                  <li class="page-item"><a class="page-link text-black bg-warning " href="#">3</a></li>
                  <li class="page-item"><a class="page-link text-black bg-warning " href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            </section>
            <!-- /.card -->
           <div class="col-md-2">
           </div>
           </div> 
        </div>
    </div>
</section> 

<!-- footer -->
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


<script>
$(function () {
  bsCustomFileInput.init();
});
</script>


<!-- jQuery -->
<script src="navoda_js/jquery.min.js"></script>

<!-- bs-custom-file-input -->
<script src="navoda_js/bs-custom-file-input.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>