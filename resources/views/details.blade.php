<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <!-- CSS only -->
    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">

    <link rel="stylesheet" href="/css/details.css">
    <link rel="stylesheet" href="../library/animate+wow/animate.css">    

</head>
<body>
    <!-------------navbar------------->
    
 <!-------------navbar------------->

<!-- Name -->
<nav class="navbar  navbar-icon-top navbar-expand-lg navbar-light bg-light col-md-12 " style="height:70px;">
 
 <div class="navbar-brand d-flex justify-content-center align-items-center col-md-2 row"  href="#">
 <img class="logo" src="https://img.icons8.com/color/50/000000/online-store.png"/>
 <div class="col-md-6 ml-0 d-flex row Proname" style="height: 50px; text-align: left;" ;>
 <p class="n ml-0"  style="font-family: impact; ">Matjar<p><br>
 <p class="n2  ml-0"  style="font-family: 'Montserrat', sans-serif !important;">all is available<p>
</div>
 </div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- search -->
       <div class="container col-md-7">
       
       </div>
<!-- icons -->
     <ul class="navbar-nav col-md-3">
       <!-- home icon -->
       <li class="nav-item active">
         <a class="nav-link" href="{{'http://127.0.0.1:8000/homePage'}}">
           <i class="fa fa-home"></i>
           <span class="sr-only">(current)</span>
           </a>
       </li>
<!-- cart icon -->
       <li class="nav-item">
         <a class="nav-link" href="{{'http://127.0.0.1:8000/Cart'}}">
           <i class="fa fa-shopping-cart" aria-hidden="true">
             <span class="badge notifications badge-danger">{{$count}}</span>
           </i>
           
         </a>
       </li>
   
       <!-- sittings icon-->
       <li class="nav-item dropdown">
         <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-cog" aria-hidden="true">
           </i>
         
         </a>
         <div class="dropdown-menu menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#">Help</a>
           <a class="dropdown-item" href="{{'http://127.0.0.1:8000/profile/'.$customer_id}}">Profile</a>

           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{ url('/customer_login') }}">log Out</a>
         </div>
       </li>
     


     </ul>
   </div>
 </nav>
  <!-- ------------------------------------------- -->
  <div class="clear"></div>
  <form action="{{url('/details/'.$product->id)}}" method="POST">
  @csrf
  <div class="container-fliud">
    <div class="card">
        <div class="container">
            <div class="wrapper row">
            <input type="text" name="type" value="1" style="display: none">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/storage/uploads/{{$product['image']}}" alt="First slide">
                      </div>
                      
                    </div>
                  </div>
                <div class="details col-md-6">
                                                <!-- catagiroy -->
                 

                    <h3 class="product-title">{{$product['name']}}</h3>
                   
                    <p class="product-description">{{$product['description']}}</p>
                    <h4>Price: <span class="price">{{$product['price']}}$</span></h4>
                    <input type="hidden" name="price" value="{{$product['price']}}" />    
                    <div >
                        <button class="add-to-cart btn  btn-primary" type="submit">add to cart</button>
                       
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div></form>
<!-- ////////////////////////////////////comments/////////////////////////////////// -->
<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title">Comments</h1>
        <div class="All-comment">
        @foreach($comment as $c)
        <div class="be-comment">
            <div class="be-img-comment">	
            <img src="https://img.icons8.com/fluent/60/ffffff/user-male-circle.png" alt="" class="be-ava-comment">
            </div>
            <div class="be-comment-content">
                    <span class="be-comment-name">
                        <h3>{{$c->name}}</h3>
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        {{$c->created_at}}
                    </span>
                 <div class="d-flex justify-content-between">
                <p class="be-comment-text" style="width:95%; !important">
                
                  {{$c->comment}}
                

                    
                </p>
           
                </div>
            </div>
        </div>
        @endforeach
      </div>
     <!-- comment part  -->
     <form action="{{url('/details/'.$product->id)}}" method="POST">
     @csrf
      <div class="writ-Comment-Her d-flex justify-content-around container mt-5">
          <input type="text" name="type" value="2" style="display: none">
          <input class="form-control mr-3 Write-her" id="Comment" type="text" name="comment"  placeholder="writ Comment Her">
          <button type="submit" class="btn btn-success comment">comment</button>
      </div>
     </form>
    </div>
    </div>
    <!-- ///////////////////////////////////////// -->
    <a id="back-to-top" href="" type="su" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  <!-- JavaScript Bundle with Popper -->
 <script src="/js/details.js">

</script>
        <script>
          const total_price = document.querySelector(".total-price");
          const quantity = document.querySelector(".quantity-field");
          const price = document.querySelector(".price");

          quantity.addEventListener("change", () => {
            total_price.value = parseInt(quantity.value) * parseInt(price.innerHTML);
          });

    
        </script>
</html>