<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Bootstrap4 Templeate"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>

    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/hover/hover-min.css">
    <link rel="stylesheet" href="../library/animate+wow/animate.css">
    <link rel="stylesheet" href="/css/admin.css"> 

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
      <a href="#" class="ml-4 mt-4">
      <img src="https://img.icons8.com/metro/18/ffffff/home.png"/> Home
      </a>
    </li>
    <li>
      <a href="http://127.0.0.1:8000/ordertable"  class="ml-4">
      <img src="https://img.icons8.com/material-sharp/20/ffffff/purchase-order.png"/> Order
      </a>
    </li>
    <li>
      <a href="{{'admin/login'}}"  class="ml-4">
      <img src="https://img.icons8.com/android/18/ffffff/logout-rounded-left.png"/> LogOut
      </a>
    </li>
   
      <button href="{{ url('/adminDashbord') }}" type="button" class="ml-5 mt-5 lead h1 text btn btn-dark btn-outline-primary" data-toggle="modal" data-target="#modalDiscount">instructions</button>
  
  
  </ul>
</div>
                             <!-- 00000000000000 table for add &edit product 0000000000000000 -->

                    <div id="d1" class="col-sm-10">
                        <div class="row  flex-column justify-content-center">
                            <div class="col-12">
                                <div class="row">


    <!--Modal: modalDiscount-->
    <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            
            <button style="display:block" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!--Body-->
          <div class="modal-body">

            <div class="row">
          

              <div class="col-11">
                  <h1>You Must Use These Categories</h1><br>
               <li>ads : for ads slider (first slider)</li>
               <li>electronics : for electronics items (3 small cards)</li>
               <li>laptop : for laptop devise items (3 big photos)</li>
               <li>sales : for sale in items (sales area)</li>
               <li>phone : for last slider (phone device & accessories)</li>
               <li>for cards it takes any category </li>
              </div>
            </div>
          </div>

          <!--Footer-->
       
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: modalDiscount-->    

                            <div class="cart container-fluid  col-12">
                                <div class="row">
                              <div class="container col-12">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-2"><h2>Home <b>Details</b></h2></div>
                                                <div class="col-sm-6">
                                                  <div class="btn-group table1" data-toggle="buttons">
                                                      <label class="btn btn-info active">
                                                          <input type="radio" name="status" value="all" checked="checked"> All
                                                      </label>
                                                      <label class="btn btn-success">
                                                          <input type="radio" name="status" value="available"> available
                                                      </label>
                                                      <label class="btn btn-warning">
                                                          <input type="radio" name="status" value="inactive"> Inactive
                                                      </label>
                                                      <label class="btn btn-danger">
                                                          <input type="radio" name="status" value="notavailable"> notavailable
                                                      </label>							
                                                  </div>
                                              </div>
                                                <!-- <div class="col-sm-4">
                                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                                </div> -->
                                            </div>
                                        </div>
                  
                                        <table class="table table-one table-bordered">
                                            <thead>
                                                <tr>
                                                  <th >Image</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>brand</th>
                                                    <th>Category</th>
                                                    <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <form action="adminDashbord" method="POST" enctype="multipart/form-data">
                                           @csrf
                                                <tr data-status="active">
                                                  <td class="no img"><input class="form-control" type="file" name='image' ></td>
                                                    <td><input class="form-control" type="text" name='name' placeholder='name'></td>
                                                    <td><input class="form-control" type="text" name='states' placeholder='status'></td>
                                                    <td><input class="form-control" type="text" name='price' placeholder='Price'></td>
                                                    <td><input class="form-control " type="text" name='description' placeholder='description'></td>
                                                    <td><input class="form-control" type="text" name='brand' placeholder='brand'></td>
                                                    <td><input class="form-control" type="text" name='category' placeholder='category'></td>
                                                    <td  class="no d-flex flex-row justify-content-center">
                                                    <button class='addbut' type="submit" ><i class="material-icons">&#xE03B;</i></button>
                                                        <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                       
                                                        

                                                    </td>
                                                </tr>   
                                                </form> 
                                            @foreach($products as $ProductData)
                                                <tr data-status="{{$ProductData['states']}}">
                                                  <td class="no img d-flex  justify-content-center"><img src="/storage/uploads/{{$ProductData['image']}}" width='130px' height='130px' alt="not found"></td>
                                                    <td>{{$ProductData['name']}}</td>
                                                    <td>{{$ProductData['states']}}</td>
                                                    <td>{{$ProductData['price']}}</td>
                                                    <td class="des">{{$ProductData['description']}}</td>
                                                    <td>{{$ProductData['brand']}}</td>
                                                    <td>{{$ProductData['category']}}</td>
                                                    <td  class="no d-flex flex-row justify-content-center">
                                                        <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                        <a  href="{{'update/'.$ProductData['id']}}"><i class="material-icons">&#xE254;</i></a>
                                                        <a class="titleDelete" data-toggle="tooltip" href="{{'delete/'.$ProductData['id']}}"><i class="material-icons">&#xE872;</i></a>
                                                      

                                                    </td>
                                                </tr>
                                                @endforeach  
                                            
                                            </tbody>
                                        </table>
                                        <div class="Paginate">
{{$products-> links()}}

</div>

                                    </div>
                                </div>
                            </div>      </div> 
                            
                            </div>
                            

                            <!-- 000000000000000 end tabels for add & edit product 000000000000000 -->


                            <!-- 000000000000000000000000000000 -->


        



                        </div>
                    </div></div>
                </div>
                </div>
            </div>
        </div>
    </div>




   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkGq6tjCCUTbCSzWF-Dute0Zlos0Lnq0w&callback=initMap">
    </script>
    <script src="/js/adminDB.js"></script>
    <script>
    function handelData(data){
        editeData = data;
        const dialogUpdateId = document.querySelector('#update input[name="id"]').value = data.id? data.id: '';
        const dialogUpdateImage = document.querySelector('#update input[name="image"]').value = data.image? data.image: '';
        const dialogUpdateName = document.querySelector('#update input[name="name"]').value = data.name? data.name: '';
        const dialogUpdateStates = document.querySelector('#update input[name="states"]').value = data.states? data.states: '';
        const dialogUpdatePrice = document.querySelector('#update input[name="price"]').value = data.price? data.price: '';
        const dialogUpdateDescription = document.querySelector('#update input[name="description"]').value = data.description? data.description: '';
        const dialogUpdateCategory = document.querySelector('#update input[name="category"]').value = data.category? data.category: '';
        const dialogUpdateBrand = document.querySelector('#update input[name="brand"]').value = data.brand? data.brand: '';
        console.log(editeData);
    }
    </script>
</body>
</html>