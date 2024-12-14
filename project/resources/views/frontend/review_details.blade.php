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
h3.lowercase {
  text-transform: lowercase;
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

    
   
    <div class="container">

        <div class= "book_info">
            <br>
            <div >
                <center><img src="/uploads/project/{{$review_info->book_image}}" alt="image" height="400" width="400"></center>
            </div>
            <h4>Book Name</h4>
            <h3>{{$review_info->book_name}}</h3>
            <br>
            <h4>Book Author</h4>
            <h3>{{$review_info->book_author}}</h3>
            <br>
            <h4>Book Publisher</h4>
            <h3>{{$review_info->book_publisher}}</h3>
            <br>
            <h4> Review Details</h4>
            <h4>{{$review_info->review_details}}</h4>
            <br>
            <h4> Review Writer</h4>
            
            <h3>Name : {{$review_info->review_writer_name}}</h3>
            <h3 class="lowercase">Email : {{$review_info->review_writer_email}}</h3>

            <br>
            <br>
        </div>
   
    </div>
    

    <div class="footer">
        
    </div>
    

</body>
</html>