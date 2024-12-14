<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Review website</title>
    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/homepage.css')}}">
    

</head>
<body>


    <!-- header -->
    <header>

        

        @include('frontend.topbar')

        @include('frontend.navbar')
        
        

    </header>
    <!-- header end-->

    <section class="section">

    <h1 class="heading"> Book Reviews </h1>
    <div class="main">

    @foreach($review_info as $review_info)
    <div class="cards">
        
        <div class="image">
            
            <img src="/uploads/project/{{$review_info->book_image}}" height="250">
        </div>
        <div class="title">
            <h2>{{$review_info->book_name}}</h2>
            <h3>{{$review_info->review_writer_name}}</h3>
            <a href="{{url('review_details',$review_info->review_id)}}"> 
                <button  class="buttonn"> Read description...</button>
            </a>
            
        </div>
    </div>
    @endforeach

    

    </div>
</section>

</body>
</html>