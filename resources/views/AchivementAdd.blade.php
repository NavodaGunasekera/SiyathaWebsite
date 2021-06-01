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
  <body id="inner_page">
      <!-- header -->
      
      <!-- end header -->

<br><br>
  

  <section class="content" >
      <div class="container-fluid">
        <div class="row" >
          <div class="col-md-2">
          </div>
          <!-- left column -->
          <div class="col-md-8">

            <!-- general form elements -->
            <div class="card">
              <div class="card-header text-black mb-3" style="background-color:#60b415">
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              @foreach($errors->all() as $error)

              <div class="alert alert-danger" role="alert">
                  {{$error}}

              </div>

              @endforeach
              <!-- form start -->
              <form method="POST" action="{{url('achivement-add/store')}}" enctype="multipart/form-data" >
              @csrf
              <input type="hidden" name="album" value="{{$id}}">
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputText">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputText" name="student_name" placeholder="Enter Album Name">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputText">Subject Stream</label>
                    <input type="text" class="form-control" id="exampleInputText" name="subject_stream" >
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputText">Result</label>
                    <input type="text" class="form-control" id="exampleInputText" name="result" >
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputText">District</label>
                    <input type="text" class="form-control" id="exampleInputText" name="district" >
                  </div>      
                  <div class="form-group">
                    <label for="exampleInputText">District Rank</label>
                    <input type="text" class="form-control" id="exampleInputText" name="district_rank" >
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputText">Island Rank</label>
                    <input type="text" class="form-control" id="exampleInputText" name="island_rank" >
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputText">Image</label>
                    <input type="file" class="form-control" id="exampleInputText" name="student_image" >
                  </div>            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn " style="background-color:#60b415">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <br>
            <section class="content">
      
        
          
            <div class="card ">
              <div class="card-header text-black mb-3" style="background-color:#f5a30b;">
                <h3 class="card-title">All Students</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Subject Stream</th>
                      <th>Result</th>
                      <th>District</th>
                      <th>District Rank</th>
                      <th>Island Rank</th>
                      <th>Image</th>
                      
                      <th></th>

                      
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($students as $student)  
                    <tr >
                    <td>{{$student->id}}</td>
                      <td>{{$student->student_name}}</td>
                      <td>{{$student->subject_stream}}</td>
                      <td>{{$student->result}}</td>
                      <td>{{$student->district}}</td>
                      <td>{{$student->district_rank}}</td>
                      <td>{{$student->island_rank}}</td>
                      <td>{{$student->student_image}}</td>
                      

                      <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        
                        <a href="{{url('/deletealbum/'.$student->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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



<script>
$(function () {
  bsCustomFileInput.init();
});
</script>


<!-- jQuery -->
<script src="navoda_js/jquery.min.js"></script>

<!-- bs-custom-text-input -->
<script src="navoda_js/bs-custom-text-input.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>