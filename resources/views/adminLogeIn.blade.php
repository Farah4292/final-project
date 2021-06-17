
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

    
    <link  href="/css/all.min.css" rel="stylesheet">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
	<link  href="/css/login.css" rel="stylesheet">
	
    

	
    <title>Document</title>
</head>
<body class="d-flex justify-content-end ">
    
    
<!-- Form-->
<div class="form mr-5 ">	
	<div class="form-panel ">
	  <div class="form-header">
		<h1>Admin Login</h1>
	  </div>
	  <div class="form-content ">

	  	<form action="login" method="POST">
			@csrf
		  <div class="form-group">
			<label for="email">Email</label>
			<input id="email" type="email" name="email" required/>
		  </div>

		  <div class="form-group">
			<label for="password">Password</label>
			<input id="password" type="password" name="password" required/>
		  </div>

	

		  <div class="form-group">
			<button type="submit">Log In</button>
		  </div>
		</form> 
		
	  </div>
	</div>
  </div>
  
	<!--------------------script--------------------->
	<script src="/js/jquery-3.5.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/logIn.js"></script>
	<script src="/js/all.min.js"></script>

	


</body>
</html>