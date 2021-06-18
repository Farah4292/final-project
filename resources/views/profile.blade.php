<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body style="height: 500px !important;">

      <!-- profile -->
    <div class="row py-5 px-4 col-md-12">
        <div class="col-md-12 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden big">
              <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">

                <div class="profile mr-3" style="margin-top:130px;">
                <img class="logo" src="https://img.icons8.com/color/300/000000/online-store.png"/>
                  </div>  
                   
                </div>
            </div>
                         

                   
                <div class="bg-light p-4 d-flex justify-content-between text-center">
                <h4 class=" ml-5 h4 text-black mt-5" >{{$customer->name}}</h4>

                
                </div>
                
                </div> 
                <!-- profile info -->
                
                <div class="px-4 py-3" style="margin-top: 50px;">
                <form action="{{url('/profile/'.$customer->id)}}" method="POST">
                     @csrf

                 <div class="form-group ">

                     
                    <div class=" row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Name</label> <p class="input1 name">{{$customer->name}}</p>
                    </div>
                    <div class=" row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label ">Phone Number</label> <p class="input1 name">{{$customer->phone}}</p>
                    </div>
             

                    <div class="row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label> <p class="input1">{{$customer->email}}</p>
                     </div>   

                      </div>
                 
                            <div class=" row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label ">password</label>  <p class="input1" id="password" style="-webkit-text-security: disc;">{{$customer->password}}</p> 

</div>
                      <div class="col-md" style="margin-top: 50px;"> 
                         <a  id="editname" class="btn edit btn-sm  btn-success" style="color:white;">Edit Profile</a>
                         <button type="submit"  class="btn save btn-sm  btn-success">Save</button>
                      </div> 
                    </form>


                 
            </div>
  
    

    <!-- navbar -->
    <div class="clear"></div>
         <!-- Button trigger modal-->





    <nav class="navbar fixed-bottom navbar-light bg-light" >
  <!--  (+) button -->
  <div class="masseg">
        <button class="navbar-toggler " id="btn" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="border: none; outline: none;">
    <img class="f" src="https://img.icons8.com/color/48/000000/settings.png"/>
  </button>
</div>
  <!--  -->
  <div class="plus collapse navbar-collapse" id="navbarText">
  <a class="nav-link" href="{{'http://127.0.0.1:8000/homePage'}}"><img class="b" src="https://img.icons8.com/fluent/40/000000/home-page.png"/></a>
  <a class="nav-link" href="{{'http://127.0.0.1:8000/Cart'}}"><img class="b" src="https://img.icons8.com/emoji/40/000000/shopping-cart-emoji.png"/></a>
  <a class="nav-link"href="{{'http://127.0.0.1:8000/customer_login'}}"><img class="b" src="https://img.icons8.com/color/40/000000/export.png"/></a>

</div>
      </nav>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/js/profile.js"></script>
</body>
</html>