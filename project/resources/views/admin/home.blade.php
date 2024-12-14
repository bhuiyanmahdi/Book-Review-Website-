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

        

    @include('admin.topbar')

    @include('admin.navbar')
       
        
        
        

    </header>
    <!-- header end-->

    <div class="home">
            <div class="centered">
                <p>“Recommending a book to someone is the second best thing to buying it for them, which is the second best thing to reading it for them.”
                </p>
                <p>― Mokokoma Mokhonoana</p>
            </div>
    </div>


</body>
</html>