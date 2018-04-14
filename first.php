<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
#personal_information{
		display:none;
	}

</style>
</head>
<body>


<form class="form-horizontal" action="" method="POST" id="myform">
	<div id="account_information" class="">
		<label for="username" class="col-lg-4 control-label">Username</label>
		<input type="text" class="form-control" id="username" name="username" placeholder="username">
		<p><a class="btn btn-primary" id="next">next</a></p>
	</div>
	
	<div id="personal_information" class="">
		<label for="name" class="col-lg-4 control-label">Name</label>
		<input type="email" class="form-control" id="name" name="name" placeholder="Email">
		<p><a class="btn btn-primary" id="previous" >Previous</a></p>
		<p><input class="btn btn-success" type="submit" value="submit"></p>
	</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
		$('#next').click(function(){
			current_fs = $('#account_information');
			next_fs = $('#personal_information');
			next_fs.show(); 
			current_fs.hide();
		});
 
	 	$('#previous').click(function(){
			current_fs = $('#personal_information');
			next_fs = $('#account_information');
			next_fs.show(); 
			current_fs.hide();
		});
	});
</script>

</body>
</html>