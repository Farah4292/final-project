
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="discreption" content="Bootstrap3 Temp"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/hover/hover-min.css">
    <link rel="stylesheet" href="/css/HomePage.css">
    <link rel="stylesheet" href="../library/animate+wow/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>  
    <body class="col-md-12 p-0">
<!-------------navbar------------->
      
<!-- Name -->
  <nav class="navbar  navbar-icon-top navbar-expand-lg navbar-light bg-light col-md-12 " style="height:70px;">
 
  <div class="navbar-brand d-flex justify-content-center align-items-center col-md-2 row"  href="#">
  <img class="logo" src="https://img.icons8.com/color/50/000000/online-store.png"/>
  <div class="col-md-6 ml-0 d-flex row Proname" style="height: 50px; text-align: left;" ;>
  <p class="n ml-0"  style="font-family: impact; ">Matjar<p><br>
  <p class="n2  ml-0"  style="font-family: 'Montserrat', sans-serif !important;">all are available<p>
</div>
  </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- search -->
<div class="container col-md-7">
<form action="/homePage" method="GET">
<div class=" row d-flex justify-content-center"> 
<input name="search" onkeydown="if (event.which == 13 || event.keyCode == 13) { submit(); window.scrollTo(0,1000); } "  type="search" id="myInput" style="height:45px;" class="form-control search col-md-10" placeholder="Search by category....."> 
<div class="dropdown show" >
  <a class="btn "  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" style="height:45px; " aria-expanded="false" >
  
  <img src="https://img.icons8.com/ios-glyphs/23/000000/filter.png"/>
  </a>

  <div class="dropdown-menu select" aria-labelledby="dropdownMenuLink">
  <a class="a"  at="all" onclick="myFunction() "  href="http://127.0.0.1:8000/homePage?search=" ><option class="dropdown-item " id="YourDropdownId" name="category">all</option></a>

  @foreach ($products as $ProductData)
  @if($ProductData->getAttribute('category') !='ads' )
    <a class="a"  at="{{$ProductData['category']}}" onclick="myFunction() "  href="http://127.0.0.1:8000/homePage?search={{$ProductData['category']}}" ><option class="dropdown-item " id="YourDropdownId" name="category">{{$ProductData['category']}}</option></a>
   @endif
   @endforeach
   
  </div>
</div>


  
  
</div> 
</form>
</div>
<!-- icons -->
      <ul class="navbar-nav col-md-3">
        <!-- home icon -->
        <li class="nav-item active">
          <a class="nav-link" href="#">
          <p style="font-size:22px" class="mt-3">  <i class="fa fa-home"></i> Home </p>
            <span class="sr-only">(current)</span>
            </a>
        </li>
<!-- cart icon -->
        <li class="nav-item">
          <a class="nav-link" href="{{'Cart'}}">
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
            <a class="dropdown-item" href="{{'profile/'.$customer_id}}">Profile</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/customer_login') }}">log Out</a>
          </div>
        </li>
        

      </ul>
    </div>
  </nav>
<!-- ----------------------------slider ------------------------------------>
<div class="clear2"></div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <?php $count1 = 1; ?>

             @foreach ($products as $ProductData)
            @if($ProductData->getAttribute('category')=='ads' and $count1 == '1')

    <div class="carousel-item active"  >
      <img class="d-block w-100" src="/storage/uploads/{{$ProductData['image']}}" style="height:600px" alt="First slide">
    </div>
    <?php $count1++; ?>
    @elseif($ProductData->getAttribute('category')=='ads' and $count1 < '4')

    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/uploads/{{$ProductData['image']}}"  style="height:600px" alt="Second slide">
    </div>
   <?php $count1++; ?>

      @endif


   @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!----------------------------- 3 small cards  ----------------------------->
<div class="clear"></div>

<div class="container col-md-12">
  <div class="row">
  <?php $count2 = 1; ?>
  @foreach ($products as $ProductData)
  @if($ProductData->getAttribute('category')=='electronics' and $count2 < '4' and  $ProductData->getAttribute('states')!='notavailable')
  
    <div class="col-md-4">
    <form action="/addToCart" method="POST">
      @csrf
      
    <img src="/storage/uploads/{{$ProductData['image']}}" style="width: 100%; height: 180px;">
    <div class="carousel-caption col-md-6 " style="margin-bottom: -30px; margin-left: 120px;">
      <a  href="{{'details/'.$ProductData['id']}}" class="btn btn-danger">Details</a>
      <button class="btn btn-danger" ><img src="https://img.icons8.com/material-outlined/24/000000/fast-cart.png"/></button>
      <input type="hidden" name="price" value="{{$ProductData['price']}}" />
      <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />
    </div>
    </form> 
    </div>
   <?php $count2++; ?>
    @endif
   
    @endforeach
  </div>

</div>
<!----------------------------- product cards ------------------------>

<div class="clear"></div>

<div class="container col-md-11 productCart" id="productCart">
  <div class="row ul" id="myUL">
  @foreach ($Allproducts as $ProductData)
  @if($ProductData->getAttribute('category')!='ads' and  $ProductData->getAttribute('states')!='notavailable')

    <li class="col-lg-3">
      <div class="card">
      <form action="/addToCart" method="POST">
      @csrf
        <div class="card-image"> <img src="/storage/uploads/{{$ProductData['image']}}" width="100%" height="100%" object-fit="cover" alt=""> </div>
          <div class="card-content d-flex flex-column align-items-center" id="c1">
            <a class="pt-2 cardFont" >{{$ProductData['name']}}</a>
                  <p class="mt-4" name="price">{{$ProductData['price']}} $</p>
                  
              <ul class="social-icons d-flex justify-content-center">
                <li style="--i:1"> <a href="#">
                <input type="hidden" name="price" value="{{$ProductData['price']}}" />
                    <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />
                  
                 </a> </li>
                 <div class="container"> 
                   <button class="btn btn-danger ">Add To Cart</button>
              
                 <a  href="{{'details/'.$ProductData['id']}}" class="Details btn btn-danger" style="margin-top:-20px;">Details</a>
</div>
                 <!-- <li style="--i:2"><a  href="{{"details/".$ProductData['id']}}" class="btn btn-danger">Details</a> </li> -->
            </ul>
          </div>
        </form> 
      </div>
    </li>
    @endif
   
    @endforeach
  </div>
</div>
<div class="Paginate">
{{$Allproducts->appends(['search' => request()->query('search')]) -> links()}}

</div>

<!---------------------------------------- 3 photos --------------------->
<div class="clear"></div>
<div class="container" >
  <div class="row">
  <?php $count3 = 1; ?>
  @foreach ($products as $ProductData)
  @if($ProductData->getAttribute('category')=='laptop' and $count3 < '4' and  $ProductData->getAttribute('states')!='notavailable')
  
    <div class="col-md-4 labCard  ">
    <form action="/addToCart" method="POST">
      @csrf
    <img src="/storage/uploads/{{$ProductData['image']}}" class=" image" style="width: 100%; height: 400px;">
    <div class="overlay d-flex justify-content-center">
      <div class="text ">
      {{$ProductData['description']}} <br>
       <button class="btn btn-warning" style="margin-top: 30px; color: white;">Add To Cart</button>  
       <a  href="{{'details/'.$ProductData['id']}}" class="Details btn btn-warning" style="margin-top: 30px; color: white;">Details</a>     
      </div>
      <input type="hidden" name="price" value="{{$ProductData['price']}}" />
      <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />
    </div>
    </form> 
    </div>
    <?php $count3++; ?>
    @endif
    @endforeach
  </div>

</div>
<!------------------------ photo & paragraph ------------------------------->
<div class="clear"></div>

<div class="py-5" id="venue" >
  <div class="container ">
      <div class="row  animate-in-down">
          <div class=" col-md-5 text-color">
          <img src="/storage/uploads/sale.jpg" class=" image cover" style="width: 100%; height: 100%;">
              
            </div>
          <div class="p-0 col-md-7">
              <div class="carousel slide" data-ride="carousel" id="carousel1">
                  <div class="carousel-inner" role="listbox">
                  <?php $count4 = 1; ?>
            @foreach ($products as $ProductData)
              @if($ProductData->getAttribute('category')=='sales' and  $count4 == '1' and  $ProductData->getAttribute('states')!='notavailable')

                      <div class="carousel-item active"> 
                      <form action="/addToCart" method="POST">
                       @csrf
                        <img src="/storage/uploads/{{$ProductData['image']}}" height="500" width="100%"  alt="first slide">
                        <div class="carousel-caption col-md-4" style="margin-bottom: -10px; margin-left: -70px;">
                          <button class="btn btn-warning" style="color: white;">Add To Cart</button>
                          <a  href="{{'details/'.$ProductData['id']}}" class="Details btn btn-warning"  style="color: white;">Details</a>     

                        </div>
                        <input type="hidden" name="price" value="{{$ProductData['price']}}" />
                        <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />
                        </form> 
                      </div>
                      <?php $count4++; ?>

                      @elseif($ProductData->getAttribute('category')=='sales' and  $count4 < '4' and  $ProductData->getAttribute('states')!='notavailable')

                      <div class="carousel-item ">
                      <form action="/addToCart" method="POST">
                       @csrf
                         <img src="/storage/uploads/{{$ProductData['image']}}" height="500"  width="100%" data-holder-rendered="true">
                         <div class="carousel-caption col-md-4" style="margin-bottom: -10px; margin-left: -70px;">
                          <button class="btn btn-warning" style="color: white;"> Add To Cart</button>
                          <a  href="{{'details/'.$ProductData['id']}}" class="Details btn btn-warning"  style="color: white;">Details</a>     

                        </div>
                        <input type="hidden" name="price" value="{{$ProductData['price']}}" />
                        <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />
                        </form> 
                      </div>
                      <?php $count4++; ?>
                      @endif
                
                @endforeach
                  </div> <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-------------------  photo slider ------------------------->
<div class="clear"></div>


    <div class="photoSlider container-fluid  row">
    <?php $count5 = 1; ?>
      @foreach ($products as $ProductData)
  @if($ProductData->getAttribute('category')=='phone' and  $count5 < '9' and  $ProductData->getAttribute('states')!='notavailable')
        
            <div class="card2 col-md-4 ml-4">
            <form action="/addToCart" method="POST">
                       @csrf
              <img class="card-img-top" src="/storage/uploads/{{$ProductData['image']}}" height="200px" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title mt-2">{{$ProductData['name']}}</h4>
                <button class="btn btn-primary">Add To Cart</button>
                <a  href="{{'details/'.$ProductData['id']}}" class="btn btn-primary">Details</a>
              </div>
              <input type="hidden" name="price" value="{{$ProductData['price']}}" />
                        <input type="hidden" name="product_id" value="{{$ProductData['id']}}" />

                        </form> 
                     
            </div>
          
 
            <?php $count5++; ?>
        @endif
    @endforeach
    
    </div>

<!----------------------- marquee ----------->

<div class="container-fluid mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
              <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> 
                <a href="#"><img src="https://img.icons8.com/plumpy/40/000000/mac-os.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/color/48/000000/samsung.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/color/48/000000/nike.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/color/40/000000/jbl.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/color/48/000000/play-station.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/windows/40/000000/huawei-logo.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/color/40/000000/xiaomi.png"/></a> 
                <a href="#"><img src="https://img.icons8.com/fluent/40/000000/xbox.png"/></a> 
                <a href="#">For Your Questions Call : 059********</a> 
                <a href="#">Or </a> 
                <a href="#">02****** </a> 

              </marquee>
          </div>
      </div>
  </div>
</div>

<!------------------------ footer  -------------->
<!-- Footer -->
<footer class="page-footer font-small bg-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left pt-4 pt-md-5">

    <!-- Grid row -->
    <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

      <!-- Grid column -->
      <div class="col-md-1 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">
      </div>
      <div class="col-md-5 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

        <!-- Links -->
        <h5>  <img class="logo" src="https://img.icons8.com/color/25/000000/online-store.png"/>Matjar</h5>
        <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis asperiores pariatur consequuntur,
          officia
          deserunt, laboriosam sed atque error esse perferendis nam ut saepe iste iure voluptatibus laborum
          iusto
          vitae magni.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto mt-3 mt-md-0 mb-0 mb-md-5">
      </div>
      <div class="col-md-4 mx-auto mt-3 mt-md-0 mb-0 mb-md-5">

        <!-- Links -->
        <h5>Project Team</h5>
        <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">
  <ul class="">
  <li class="">Ez Jaber</li>
  <li class="">Farah Nidal</li>
  <li class="">Islam Raslan</li>
  <li class="">Mahmood Damrah</li>

</ul>
        
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  

</footer>
<!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="/js/HomePage.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      $('.photoSlider').slick({
        slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow : '<span type="button" class="slick-prev"><img src="https://img.icons8.com/plumpy/24/000000/chevron-left.png"/></span>',
  nextArrow : '<span type="button" class="slick-next"><img src="https://img.icons8.com/plumpy/24/000000/chevron-right.png"/></span>',
  
      });
    });
    
  </script>
  <script>
        $(window).scroll(function () {
            sessionStorage.scrollTop = $(this).scrollTop();
            var inp = document.getElementById("#myInput");
            inp.scrollTo(0,1000);

        });
        $(document).ready(function () {
          
            if (sessionStorage.scrollTop != "undefined") {
                $(window).scrollTop(sessionStorage.scrollTop);
            }
        });
</script>
</body>
</html>