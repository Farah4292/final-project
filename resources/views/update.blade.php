<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css"> 
    <style>
    .form-control{
        width: 400px;
    }
    label{
        font-size:15px;
    }
   
    </style>
</head>
<body class="bg-light">
<div class="container ">
  <!-- Content here -->
  <div class="col-md-12 ">
  <div class="row ">
  <div class="col-md-12 form  position-absolute top-50 start-50 translate-middle">
<h1>Edit Products<h1>
<form action="/update" method="POST">
@csrf
<div class="row">
<div class="col-md-6">
<input class="form-control" type="hidden" name="id" value="{{$data['id']}}">
<label  class="form-label">image</label>
<input class="form-control" type="file" name="image" value="{{$data['image']}}">
<label  class="form-label">name</label>
<input class="form-control" type="text" name="name" value="{{$data['name']}}">
</div>
<div class="col-md-6">
<label  class="form-label">states</label>
<input class="form-control" type="text" name="states" value="{{$data['states']}}">
<label  class="form-label">description</label>
<input class="form-control" type="text" name="description" value="{{$data['description']}}">
</div>
<div class="row">
<div class="col-md-6">
<label  class="form-label">price</label>
<input class="form-control" type="text" name="price" value="{{$data['price']}}">
</div>
<div class="col-md-6">
<label  class="form-label">brand</label>
<input class="form-control" type="text" name="brand" value="{{$data['brand']}}">
</div>
</div>
<label  class="form-label">category</label>

<input class="form-control" type="text" name="category" value="{{$data['category']}}">
<div class="col-md-12">
<button type="submit" class="btn btn-success w-50">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /////////////// -->

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>