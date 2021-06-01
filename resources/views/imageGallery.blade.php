<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Siyatha Education Institute</title>
    <style>

        .card{
            margin-top:30px;
        }
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
        }

        input[type="checkbox"] {
            display: none;
        }

        label {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
        }

        label:before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        label img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked + label {
            border-color: #ddd;
        }

        :checked + label:before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
        }

        :checked + label img {
            transform: scale(0.9);
            /* box-shadow: 0 0 5px #333; */
            z-index: -1;
        }
    </style>

  </head>
  <body>
<br><br><br>
  
  @include('header') 

    <!-- Main content -->
    <div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header" style="font-size:30px; color:#000000">Add new gallery images</div>

            <div class="card-body">    

                <form method="post" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="album" value="{{$id}}">
                    


                <div id="actions" class="row">
                    <div class="col-lg-6">
                        <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                            <button type="button" id="submit_all" class="btn btn-primary col start">
                                <i class="fas fa-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning col cancel">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="fileupload-process w-100">
                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table table-striped files" id="previews">

                    <div id="template" class="row mt-2">
                        <div class="col-auto">
                            <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                        </div>
                        <div class="col d-flex align-items-center">
                            <p class="mb-0">
                                <span class="lead" data-dz-name></span>
                                (<span data-dz-size></span>)
                            </p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start</span>
                                </button>
                                <button data-dz-remove class="btn btn-warning cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancel</span>
                                </button>
                                <button data-dz-remove class="btn btn-danger delete">
                                    <i class="fas fa-trash"></i>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <div class="card">
           <div class="card-header" style="font-size:25px; color:#000000">
               Gallery List
               <button style="margin-bottom: 10px" class="btn btn-primary float-right delete_all" data-url="{{ url('imageGallery/delete') }}">Delete  Selected</button>
           </div>
               <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 offset-1">
                            <ul>
                                @foreach($images as $image)
                                <li>
                                    <input type="checkbox" id="{{$image->id}}" data-id="{{$image->id}}" class="sub_chk" />
                                    <label for="{{$image->id}}"><img src="{{url('uploads/'.$image->filename)}}" /></label>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
               </div>
       </div>
                </div>
        </div>
        </div>
        </div>
      <br>
               


    <!-- dropzonejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.4/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false;

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });



    var myDropzone = new Dropzone(document.body, {
        // Make the whole body a dropzone


        url: "{{url("gallery-image/store/")}}", // Set the url
       
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
       previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.

    });


    myDropzone.on("addedfile", function(file) {
     


        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
    });


    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {

        document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
    });

    myDropzone.on("sending", function(file, xhr, formData){
        var token = $("input[name='_token']").val();
        formData.append('_token', token);
        var data = $('form').serializeArray();
        $.each(data, function(key, el) {
            formData.append(el.name, el.value);
        });

        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1";
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    });
    // myDropzone.on("sending", function(file, xhr, formData) {
    //
    //
    //
    //     // Find all input values on your form
    //     var data = $('form').serializeArray();
    //
    //     // Append them all to the formData Dropzone will POST
    //     $.each(data, function(key, el) {
    //         formData.append(el.name, el.value);
    //     });
    //
    //
    //
    //     // Rest of your code ...
    //     document.querySelector("#total-progress").style.opacity = "1";
    //     file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    // });


    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0";

        location.reload();
    });

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));


    };
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true);
    };
    // DropzoneJS Demo Code End


</script>

  </body>
</html>