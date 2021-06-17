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
<h1>Edit Orders<h1>
<form action="{{url('/updateOrder/'.$data['id'])}}" method="POST">
@csrf
<div class="row">

<div class="col-md-6">
<label  class="form-label">states</label>
<input class="form-control" type="text" name="states" value="{{$data['states']}}">
</div>
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