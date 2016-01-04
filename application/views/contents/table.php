
<a class="btn btn-primary pull-right" href="<?php echo site_url('phonebook_con/create_contact');?>">Create Contact</a>
<table class="table table-bordered table-striped">

	<thead>
		<tr>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		
	</thead>
	<tbody>
	<?php 
     foreach ($contact_details as $contact) {
     	
     
	?>
		<tr>
			<td><?php echo $contact->contact_name;?></td>
			<td><?php echo $contact->contact_number;?></td>
			<td><?php echo $contact->contact_email;?></td>
			<td>
			<a href="<?php echo site_url();?>/phonebook_con/contact_edit/?var=<?php echo  $contact->contact_id;?>"><span class="btn btn-default glyphicon glyphicon-edit"><span class='edit_button'>Edit</span></span></a>
			<a href="<?php echo site_url();?>/phonebook_con/contact_delete/?var=<?php echo  $contact->contact_id;?>"><span class="btn btn-danger glyphicon glyphicon-trash"><span class='dlt_button'>Delete</span></span></a>
			</td>
		</tr>
	<?php
	}
	?>	
	</tbody>
</table>