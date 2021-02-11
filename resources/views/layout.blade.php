<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">

  
</head>
<body>
    <div class="header">
    @section('header')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="singup">Signup</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="list">Users</a>
                </li>

             @if(Session::has('logData'))
                <li class="nav-item">
                    <a class="nav-link " href="logout">Logout</a>
                </li>
             @endif   
              
            
       
               
            </ul>
            </div>
        </div>
        </nav>
        
    @show
    </div>
    <div class="content">
    @section('content')

    @show
    </div>

    <div class="footer">
    @section('footer')
<h3 class='center'>footer section</h3>
    @show
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  
    <script src="{{URL::asset('js/custom.js')}}"></script>
    
<script>
  var type="{{Session::get('alert-type')}}";
  // alert(type);
  
  if(type=="success"){
  		toastr.success("{{ Session::get('message') }}");
  }
 


 if(type=="warning"){
  		toastr.warning("{{ Session::get('message') }}");
 }
  


 if(type=="error"){
  		toastr.error("{{ Session::get('message') }}");
 }
  
//   $(document).ready(function(){
//     console.log('2'); 
//   });
//   $( window ).on( "load", function() { 
//       console.log('1');
//   });



//   $(document).ready(function(){
    
//     $('#loadList').on('click',function(){     

//         $.ajax({
//             url: "list",
//             type:"GET",
//             success: function(result){
//             $("#list").html(result);
//         }});
          
//     });
//   });

 
</script>
</body>
</html>