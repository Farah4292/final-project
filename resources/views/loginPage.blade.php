
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
	
		<div class="form-panel one">
	  		<div class="form-header">
				<h1>sginup page</h1>
	  		</div>
	  	<div class="form-content">
	<form action="signup" method="POST">
		@csrf
		<div class="form-group">
	  		<label for="username">Username</label>
	  		<input id="username2" type="text" name="name" required="required"/>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input id="email" type="email" name="email" required="required"/>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input id="password" type="password" name="password" required="required"/>
		</div>

		<!-- <div class="form-group">
			<label for="cpassword">Confirm Password</label>
			<input id="cpassword" type="password" name="cpassword" required="required"/>
		</div> -->
		
		<div class="form-group">
			<label for="addres">Address</label>
			<input id="addres" type="text" name="address" required="required"/>
		</div>

		<div class="form-group">
			<label for="email">phone</label>
			<input id="phone" type="text" name="phone" required="required"/>
		</div>

	<div class="form-group">
	  <button type="submit">Register</button>
	  
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