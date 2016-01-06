<?php
foreach ($particular_id_contents as $values) {
	$id=$values->contact_id;
	$name=$values->contact_name;
	$number=$values->contact_number;
	$email=$values->contact_email;
}
	//print_r($particular_id_contents);


?>

<div class="row update">
	<div class="col-sm-8 col-sm-offset-2">
	   
	   <h3>Edit Contact</h3>
	        <hr/>
	        <?php
			if (validation_errors()) {?>
			<div class="validation_error"> 
			<?php echo validation_errors();?>
			</div>
			<?php  
			}
			?>
		<form role="form" action="<?php echo site_url();?>/phonebook_con/edit_validation" method="post">
		  <div class="form-group">
		    <label for="name">Name<span class="glyphicon glyphicon-asterisk"></span>:</label>
		    <input type="text" class="form-control" id="name" name="newName"  value="<?php echo $name;?>">
		    <input type="hidden" class="form-control" id="name" name="id"  value="<?php echo $id;?>">
		  </div>
		  <div class="form-group">
		    <label for="number">Number<span class="glyphicon glyphicon-asterisk"></span>:</label>
		    <input type="number" class="form-control" id="number" name="newNumber" value="<?php echo $number?>">
		    <input type="hidden" class="form-control" id="number" name="id"  value="<?php echo $id;?>">
		  </div>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="newEmail" value="<?php echo $email?>">
		    <input type="hidden" class="form-control" id="email" name="id"  value="<?php echo $id;?>">
		  </div>
		  <button type="submit" class="customize_button">Update</button>
        </form> 
	</div>
</div> 