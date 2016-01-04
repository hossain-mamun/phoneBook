<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php
           if (isset($title)) {
           	echo $title;
           }
		?>

	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/stylesheet.css");?>">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
           
			<?php
              if (isset($contact_info)) {
              	$this->load->view('contents/'.$contact_info);
              }
              elseif (isset($create)) {
              	$this->load->view('contents/'.$create);
              }
              elseif (isset($edit)) {
              	$this->load->view('contents/'.$edit);
              }

			?>

		</div>
	</div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>     
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>