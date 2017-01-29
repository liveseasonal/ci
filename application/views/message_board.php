<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to MessageBoard</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>


	<div>
		<div class="row">
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		</div>
	</div>



	
  

	<div class="form-group class="well" style="width:50%; margin: 0 auto; border: 2px solid gray; padding: 20px;"">

	  <form>
	  	  <div>
		    <label for="exampleInputEmail1">First Name</label>
		    <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleMessage">Message</label>
		    <textarea class="form-control" id="exampleMessage" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-danger">Submit</button>
	  </form>

	</div>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>