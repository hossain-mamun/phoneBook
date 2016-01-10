
<form action="<?php echo site_url('phonebook_con/searchContact');?>" method="post">
	 <div class="form-group search">
		 <input type="text" class="form-control" placeholder="Search" name="search" required id="searchWord">
	 </div>
	
	 <input type="submit" id="searchButton" class="btn btn-default" value="Search">

</form>
<div id="result">
	 
</div>
<table class="table table-bordered table-striped">

	<thead>
	    <tr>
           <th colspan="4"><a class="btn btn-primary pull-right" href="<?php echo site_url('phonebook_con/create_contact');?>">Create Contact</a></th>
        </tr>
		<tr>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		
		
	</thead>
	<tbody>
	<?php 

if ($contact_details!=NULL) {
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
}
else{
	echo "<script language='javascript'>
     alert('No search results found!')
	 </script>";
}
?>	
</tbody>
</table>
	


