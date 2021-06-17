<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  

    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/hover/hover-min.css">
    <link rel="stylesheet" href="../library/animate+wow/animate.css">
    <link rel="stylesheet" href="/css/order.css"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>
<body>
<div class="sidebar-container">
  <div class="sidebar-logo">
  <img class="logo" src="https://img.icons8.com/color/30/000000/online-store.png"/>Matjar
  </div>
  <ul class="sidebar-navigation">
    <li class="header"></li>
    <li>
      <a href="{{ url('/delivary_login') }}">
      <img src="https://img.icons8.com/android/18/ffffff/logout-rounded-left.png"/> Log OUt
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div id="d2"  class="cart   container-fluid  col-12 cartCss2 flex-column align-items-center justify-content-center bg-light order">
                                
                                <div class="container-lg">
                                  <div class="table-responsive">
                                      <div class="table-wrapper">
                                          <div class="table-title">
                                              <div class="row">
                                              <div class="container col-md-7">

                                              <p>* Please Click On The Earth Button Then Copy The Address And But It In The SearchBar On Google Map When Its Open</p>
                                                  <div class="col-sm-2"><h2>Order <b>List</b></h2></div><br>
                                           
                                          </div>

                                          <table class="table table2 table-tow table-bordered">
                                              <thead>
                                                  <tr>
                                                  <th>Name</th>
                                                  
                                                      <th>Address</th>
                                                      <th>Phone Number</th>
                                                      <th>Tottel Price</th>
                                                      <th>quantity</th>
                                                      <th>Location</th>
                                                     
                                                  </tr>
                                              </thead>
                                              <tbody>
                                            
                                              @foreach($order as $data)
                                              <tr data-status="{{$data['states']}}">
                                                  <td>{{$data['name']}}</td>
                                                  <td style="overflow:auto;">{{$data['address']}}</td>
                                                  <td>{{$data['phone']}}</td>
                                                  <td>{{$data['total_price']}}</td>
                                                  <td>{{$data['quantity']}}</td>
                                                  <td  class="no d-flex flex-row justify-content-center">
                                                  <a  onclick="myFunction()"  href="" id="location" class="location"><img src="https://img.icons8.com/color/30/000000/earth-planet.png"/></a>
                                                  <a class="delete"  href="{{'deleteOrder/'.$data['id']}}" title="Delete" data-toggle="tooltip"><img src="https://img.icons8.com/metro/25/fa314a/trash.png"/></a>

                                               
  
                                                      </td>
                                              </tr>
                                                  @endforeach  
                                              
                                              </tbody>
                                          </table>
                                          {{$order-> links()}}
                                      </div>
                                  </div>
                              </div>   
              
              
                              </div>
  

  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkGq6tjCCUTbCSzWF-Dute0Zlos0Lnq0w&callback=initMap">
    </script>
    
  
    <script src="/js/adminDB.js"></script>
</html>