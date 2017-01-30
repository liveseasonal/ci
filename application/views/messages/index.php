

  


<div class="container">	

<h2><?php echo $title; ?></h2>


    <div>

		<?php foreach ($messages as $messages_item): ?>
		<br />

		<div class="row" style="height: 100px; width: 100%; background-color: #ADD8E6;">

		        <h3><?php echo $messages_item['name']; ?></h3>
		        <div class="main">
		                <?php echo $messages_item['message']; ?>
		        </div>
		        
		</div>        
		<?php endforeach; ?>


    <div>

    <br />
    <br />	

	<div class="form-group class="well" style="width:50%; margin: 0 auto; border: 2px solid gray; padding: 20px; float:left;"">

       <?php echo validation_errors(); ?>
	

		<?php echo form_open('messages/create'); ?>

	    <label for="name">Name</label>
	    <input type="input" class="form-control" name="title" /><br />

	    <label for="message">Message</label>
	    <textarea name="message" class="form-control"></textarea><br />

	    <input type="submit" name="submit" class="btn btn-danger" value="Create Message" />

	    </form>

	<div>	

</div>  




