<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/cart.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <title>Cart</title>
</head>

<body style="font-family: 'Montserrat', sans-serif !important;">

	<main class="page">

	 	<section class="shopping-cart dark">
	 		<div class="container ">
		     
		        <div class="content">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-12">
	 						<div class="items">
							 <form class=""action="/AddOrder" method="POST">
                            @csrf
                @foreach ($carts as $CartData)
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-3">
                      <img src="/storage/uploads/{{$CartData->image}}" alt="Placholder Image 2" class="product-frame" style="margin-left:20px;" width="300px" height="auto">
                    </div>
					 					<div class="col-md-8">
					 						<div class="info ">
						 						<div class="row ">
							 						<div class="col-md-4 product-name">
							 							<div class="product-name">
								 							<h2>{{$CartData->name}}</h2>
								 							<div class="product-info">
									 							<div>price: <span class="value price_cart">{{$CartData->price}}</span></div>
									 						
									 						</div>
									 					</div>
							 						</div>
                          
							<div class='col-md-7'>
							<div class="col-md-12  quantity" >
							<div class="row">
						

                   <div class="quantity2 col-md-6 ">
					   	 <label for="quantity" class="w-100">Quantity:</label>
              <input type="number" class="form-control quantity2 quantity-field " name="quantity" value="1" min="1">
            </div>
			<div class="col-md-6  price subtotal_price ">
		    <h4>Total Price</h4>

			<span class="span">{{$CartData->total_price}} </span>
			</div>
            </div>
          		</div>
				  <input type="hidden" class="quantity quantity-field" name="id" value="{{$CartData->id}}" min="1">

          <button  class="btn btn-primary btn-lg mt-2" >check out</button>
				</div>
                        
                          <div class="remove ">
           
                          <a  class="delete btn btn-primary  btn-lg mt-2" title="Delete" data-toggle="tooltip" href="{{'deleteCart/'.$CartData->id}}">Remove</a>
                          </div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
                 @endforeach
				 <input type='hidden'  name='Customerlocation' id='cusLoc'>
				 </form>  
				 <div class="masseg">
        <button class="navbar-toggler " id="btn" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="border: none; outline: none;">
		<a href="{{'http://127.0.0.1:8000/homePage'}}"><img class="f" src="https://img.icons8.com/fluent/50/000000/return.png"/><a>
  </button>
</div>

				 			</div>
			 			</div>
			 		
		 			</div> 
		 		</div>
	 		</div>
		</section>
	</main>
    <div id="map"></div>

    <!-- this API just for me don't give it to anyone just for ur project, nothing else-->
    
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="/js/cart.js"></script>
      <script src="../library/animate+wow/wow.min (4).js"></script>
      <script src="../library/fontawesome-free-5.15.2-web/js/all.min.js"></script>
	  </body>

    <!-- this API just for me don't give it to anyone just for ur project, nothing else-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkGq6tjCCUTbCSzWF-Dute0Zlos0Lnq0w&callback=initMap">
    </script>

</html>
