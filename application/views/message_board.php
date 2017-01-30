    <div>
		<div class="row inspiration-box">
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4 inner-inspiration-box" >.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		</div>
	</div>


	<div>
		<div class="row message-board">
		  <div class="col-md-4">Hello</div>
		  <div class="col-md-4">Email</div>
		  <div class="col-md-4">Message</div>
		</div>
	</div>



	
  

	<div class="form-group class="well" style="width:50%; margin: 0 auto; border: 2px solid gray; padding: 20px;"">

		

		<h2><?php echo $title; ?></h2>

		<?php echo validation_errors(); ?>

		<?php echo form_open('messages/create'); ?>

		    <label for="name">Name</label>
		    <input type="input" name="title" /><br />

		    <label for="message">Message</label>
		    <textarea name="message"></textarea><br />

		    <input type="submit" name="submit" value="Create Message" />

		</form>


      <!-- Removed the top form tag to allow for php form -->
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
		  <button type="submit" class="btn btn-danger" value=" Create new message">Submit</button>
	  </form>

	</div>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
