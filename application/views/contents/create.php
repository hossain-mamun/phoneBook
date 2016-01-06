<div class="row create">
	<div class="col-sm-8 col-sm-offset-2">
	   
	   <h3>Create New Contact</h3>
	        <hr/>
	        <?php
			if (validation_errors()) {?>
			<div class="validation_error"> 
			<?php echo validation_errors();?>
			</div>
			<?php  
			}
			?>
		<form role="form" action="<?php echo site_url('phonebook_con/contact_validation');?>" method="post">
		  <div class="form-group">
		    <label for="name">Name<span class="glyphicon glyphicon-asterisk"></span>:</label>
		    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Your Contact Name">
		  </div>
		  <div class="form-group">
		    <label for="number">Number<span class="glyphicon glyphicon-asterisk"></span>:</label>
		    <input type="number" class="form-control" id="number" name="number" placeholder="Country Code Must. Like BD(88)" required>
		  </div>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Contact Email">
		  </div>
		  <button type="submit" class="customize_button">Create</button>
        </form> 
	</div>
</div> 