<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Review website</title>
    <!-- font  -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
 <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: whitesmoke;
   color: white;
   text-align: center;
}
</style>


</head>
<body>


    <!-- header -->
    <header>

        @include('frontend.topbar')
        @include('frontend.navbar')

    </header>
    <!-- header end-->
    <br></br>
   
    <div class="container">
        <!--    "{{url('write_reviews')}}"    -->
        <form action="/write_reviews" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="container">

                <div class="form-group">
                    <label for="name">Book Name</label>
                     <input type="text" class="form-control input-lg" name="name">
                </div>
                <div class="form-group">
                    <label for="author">Book Author</label>
                    <input type="text" class="form-control input-lg" name="author">
                </div>
                <div class="form-group">
                    <label for="publisher">Book Publisher</label>
                     <input type="text" class="form-control input-lg" name="publisher">
                </div>
            

                
            <div class="form-group">
                <label >Book Image</label>
                
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>

                <p><label for="file" style="cursor: pointer;">Click on this text to upload image</label></p>
                <p><img id="output" width="500" /></p>

                <script>
                    var loadFile = function(event) {
                    var image = document.getElementById('output');
                    image.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>

            </div>
            


                <div class="form-group">
                    <label for="review">Review</label>
                    <textarea class="form-control input-lg" rows="10" name="review"></textarea>
                </div>
                <!--
                <div class="text-center">
                    <button type="button" class="btn btn-success btn-lg">Success</button>
                </div>
                -->
                <button type="submit" class="btn btn-success btn-lg">Success</button>
                <p></p>
                <p></p>
                <p></p>

            </div>

        </form>
    </div>
    <div>
        <p></p>
        <p></p>
        <p></p>

    </div>

    <div class="footer">
        <p></p>
    </div>
    

</body>
</html>