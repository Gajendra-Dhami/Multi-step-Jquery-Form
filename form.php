<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">
#step_2, #step_3, #step_4,#step_5,#step_6,#step_7,#step_8,#step_9,#step_10,#step_11,#step_12{
		display:none;
	}

* {
margin: 0;
padding: 0;
}
html {
height: 100%;
}

background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)),  
}
body {
font-family: montserrat, arial, verdana;
}

/*form styles*/
#msform {
width: 400px;
margin: 40px auto;
text-align: center;
position: relative;
}
#msform div {
background: white;
border: 0 none;
border-radius: 3px;
box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
padding: 20px 30px;
box-sizing: border-box;
width: 80%;
margin: 0 10%;
/*stacking fieldsets above each other*/
position: absolute;
}

/*inputs*/
#msform input, #msform textarea {
padding: 15px;
border: 1px solid #ccc;
border-radius: 3px;
margin-bottom: 10px;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
font-size: 13px;
}

/*buttons*/
#msform .action-button {
width: 100px;
background: #bbbbbb;;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 1px;
cursor: pointer;
padding: 10px 5px;
margin: 35px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #bbbbbb;;
}


/*headings*/
.fs-title {
font-size: 15px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin-bottom: 20px;
}

#msform input[type="radio"]{
width:10% !important;
}

/* Rating CSS */
.rating {overflow: hidden;display: inline-block;}
.rating-input {float: right;width: 20px;height: 20px;padding: 0;margin: 0 0 0 -16px;opacity: 0;}
.rating-star {cursor: pointer;position: relative;display: block;width: 16px;height: 16px;background: url('star.png') 0 -16px;
}
.rating-star:hover {background-position: 0 0;}
.rating-star {position: relative;float: right;display: block;width: 16px;height: 16px;background: url('star.png') 0 -16px;}
.rating-star:hover,.rating-star:hover ~ .rating-star {background-position: 0 0;}
.rating-star:hover,.rating-star:hover ~ .rating-star,.rating-input:checked ~ .rating-star {background-position: 0 0;}
.rating:hover .rating-star:hover,.rating:hover .rating-star:hover ~ .rating-star,.rating-input:checked ~ .rating-star {    background-position: 0 0;}
.rating-star,.rating:hover .rating-star {position: relative; float: right; display: block; width: 16px; height: 16px;    background: url('star.png') 0 -16px;}

</style>


</head>
<body>


<form class="form-horizontal" action="" method="POST" id="msform">
	<div id="step_1" class="">
		<h3 class="fs-subtitle">1. Are you a new customer ?</h3>
		<input type="radio" value="yes" name="customer"  id="askquestion" class="new_customer next" /><label>Yes</label>
		<input type="radio" value="no" name="customer"   id="askquestion" class="old_customer next"/><label>No<label>
		<p><a class="btn btn-primary" id="next1">next</a></p>
	</div>
	
	<div id="step_2" class="">
		<h3 class="fs-subtitle">2. would you like to win a meal for 4 this month?</h3>
	   <input type="radio" value="yes" name="meal"  id="askquestion" class="next"/><label>Yes</label>
	   <input type="radio" value="no" name="meal"  id="askquestion" class="next"/><label>No</label>
		<p><a class="btn btn-primary" id="next2">next</a></p>
		<p><a class="btn btn-primary" id="previous1" >Previous</a></p>
		
	</div>

	<div id="step_3" class="">
		<h3 class="fs-subtitle">3. How would you rate your visit ?</h3>
			<input type="radio" class="rating-input next" id="rating-input-1-5" name="rating-visit" value="5">
			<label for="rating-input-1-5" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-1-4" name="rating-visit" value="4">
			<label for="rating-input-1-4" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-1-3" name="rating-visit" value="3">
			<label for="rating-input-1-3" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-1-2" name="rating-visit" value="2">
			<label for="rating-input-1-2" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-1-1" name="rating-visit" value="1">
			<label for="rating-input-1-1" class="rating-star"></label>
		<p><a class="btn btn-primary" id="next3">next</a></p>
		<p><a class="btn btn-primary" id="previous2" >Previous</a></p>
	</div>
	
	<div id="step_4" class="">
		<h3 class="fs-subtitle">4. How would you rate the staff ?</h3>
	 
		<input type="radio" class="rating-input next" id="rating-input-2-5" name="rating-staff" value="5" >
		<label for="rating-input-2-5" class="rating-star"></label>
		<input type="radio" class="rating-input next" id="rating-input-2-4" name="rating-staff" value="4" >
		<label for="rating-input-2-4" class="rating-star"></label>
		<input type="radio" class="rating-input next" id="rating-input-2-3" name="rating-staff" value="3" >
		<label for="rating-input-2-3" class="rating-star"></label>
		<input type="radio" class="rating-input next" id="rating-input-2-2" name="rating-staff" value="2">
		<label for="rating-input-2-2" class="rating-star"></label>
		<input type="radio" class="rating-input next" id="rating-input-2-1" name="rating-staff" value="1" >
		<label for="rating-input-2-1" class="rating-star"></label>
		<p><a class="btn btn-primary" id="next4">next</a></p>
		<p><a class="btn btn-primary" id="previous3" >Previous</a></p>
		
	</div>
	<div id="step_5" class="">
		<h3 class="fs-subtitle">5. How would you rate the food ?</h3>
			<input type="radio" class="rating-input next" id="rating-input-3-5" name="rating-food" value="5">
			<label for="rating-input-3-5" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-3-4" name="rating-food" value="4">
			<label for="rating-input-3-4" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-3-3" name="rating-food" value="3">
			<label for="rating-input-3-3" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-3-2" name="rating-food" value="2">
			<label for="rating-input-3-2" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-3-1" name="rating-food" value="1">
			<label for="rating-input-3-1" class="rating-star"></label>
		<p><a class="btn btn-primary" id="next5">next</a></p>
		<p><a class="btn btn-primary" id="previous4" >Previous</a></p>
	</div>
	
	<div id="step_6" class="">
		<h3 class="fs-subtitle">6. How would you rate the atmosphere ?</h3>
			<input type="radio" class="rating-input next" id="rating-input-4-5" name="rating-temperature" value="5">
			<label for="rating-input-4-5" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-4-4" name="rating-temperature" value="4">
			<label for="rating-input-4-4" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-4-3" name="rating-temperature" value="3">
			<label for="rating-input-4-3" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-4-2" name="rating-temperature" value="2">
			<label for="rating-input-4-2" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-4-1" name="rating-temperature" value="1">
			<label for="rating-input-4-1" class="rating-star"></label>
		<p><a class="btn btn-primary" id="next6">next</a></p>
		<p><a class="btn btn-primary" id="previous5" >Previous</a></p>
	</div>
	<div id="step_7" class="">
		<h3 class="fs-subtitle">7. How would you rate the restaurant temperature ?</h3>
			<input type="radio" class="rating-input next" id="rating-input-5-5" name="rating-temperature" value="5">
			<label for="rating-input-5-5" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-5-4" name="rating-temperature" value="4">
			<label for="rating-input-5-4" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-5-3" name="rating-temperature" value="3">
			<label for="rating-input-5-3" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-5-2" name="rating-temperature" value="2">
			<label for="rating-input-5-2" class="rating-star"></label>
			<input type="radio" class="rating-input next" id="rating-input-5-1" name="rating-temperature" value="1">
			<label for="rating-input-5-1" class="rating-star"></label>
		<p><a class="btn btn-primary" id="next7">next</a></p>
		<p><a class="btn btn-primary" id="previous6" >Previous</a></p>
	</div>
	
	<div id="step_8" class="">
		<h3 class="fs-subtitle">8. Would you recommend us ?</h3>
		<input type="radio" value="yes" name="recommend"  id="yes_recommend" class="next"/><label>Yes</label>
		<input type="radio" value="no" name="recommend"  id="no_recommend" /><label>No</label>
		<p></p>
		<div id="ask_1" style="display:none">
			<h3 class="fs-subtitle">why you not recommend us?</h3>
			<div class="box">
				<textarea rows="4">

				</textarea>
			</div>
		 </div>
		<p><a class="btn btn-primary" id="next8">next</a></p>
		<p><a class="btn btn-primary" id="previous7" >Previous</a></p>
		
	</div>
	<div id="step_9" class="">
		<h3 class="fs-subtitle">9. Would you return ?</h3>
		<input type="radio" value="yes" name="you_return" id="yes_return" class="next"/><label>Yes</label> 
		<input type="radio" value="no" name="you_return" id="no_return" /><label>No</label>
		<p></p>
		<div id="ask_2" style="display:none">
			<h3 class="fs-subtitle">why you not return ?</h3>
			<div class="box">
				<textarea rows="4" class="next">

				</textarea>
			</div>
		 </div>
		<p><a class="btn btn-primary" id="next9">next</a></p>
		<p><a class="btn btn-primary" id="previous8" >Previous</a></p>
	</div>
	<div id="step_10" class="">
		<h3 class="fs-subtitle">10. For New Customer ?</h3>
		<div id="new_details" >
			<input type="text" value="" name="email" Placeholder="Email Address"/>
			<input type="text" value="" name="name" Placeholder="Name"/>
			<input type="text" value="" name="phone" Placeholder="Phone"/>
			<p><a class="btn btn-primary" id="next10">next</a></p>
			<p><a class="btn btn-primary" id="previous9" >Previous</a></p>
			</div>
			<div id="old_details" style="display:none;">
				  
			</div>
			
			
	</div>
	<div id="step_11" class="">
		<label for="name" class="col-lg-4 control-label">Step 11</label>
		<input type="email" class="form-control" id="name" name="name" placeholder="Email"><h3 class="fs-subtitle">11. Would you also like to be entered into Birthday club - You will get a free meal on your birthday if you book a table? </h3>
		<input type="radio" value="yes" name="birth_day_club" id="yes_birthday"/><label>Yes</label> 
		<input type="radio" value="no" name="birth_day_club" id="no_birthday" class="next"/><label>No</label>
		<div id="ask_3" style="display:none">
			<h3 class="fs-subtitle">Please Enter Your Date of Birth</h3>
			<p><input type="text" name="dob" value="" placeholder="DOB(MM/DD/YYYY)" id="calendar" /></p>
		 </div>
		<p><a class="btn btn-primary" id="next11">next</a></p>
		<p><a class="btn btn-primary" id="previous10" >Previous</a></p>
	</div>
	<div id="step_12" class="">
		<h3 class="fs-subtitle">Thank you for taking the time to review our restaurant Please review us on Trip Advisor<h3>
		<p><a class="btn btn-primary" id="previous11" >Previous</a></p>
		<p><input class="btn btn-success" type="submit" value="submit"></p>
	</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
		$('#next1').click(function(){
			current_fs = $('#step_1');
			next_fs = $('#step_2');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next2').click(function(){
			current_fs = $('#step_2');
			next_fs = $('#step_3');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next3').click(function(){
			current_fs = $('#step_3');
			next_fs = $('#step_4');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next4').click(function(){
			current_fs = $('#step_4');
			next_fs = $('#step_5');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next5').click(function(){
			current_fs = $('#step_5');
			next_fs = $('#step_6');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next6').click(function(){
			current_fs = $('#step_6');
			next_fs = $('#step_7');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next7').click(function(){
			current_fs = $('#step_7');
			next_fs = $('#step_8');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next8').click(function(){
			current_fs = $('#step_8');
			next_fs = $('#step_9');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next9').click(function(){
			current_fs = $('#step_9');
			next_fs = $('#step_10');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next10').click(function(){
			current_fs = $('#step_10');
			next_fs = $('#step_11');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#next11').click(function(){
			current_fs = $('#step_11');
			next_fs = $('#step_12');
			current_fs.hide();
			next_fs.show(); 
			
		});
		
	 	$('#previous1').click(function(){
			current_fs = $('#step_2');
			next_fs = $('#step_1');
			next_fs.show(); 
			current_fs.hide();
		});
		$('#previous2').click(function(){
			current_fs = $('#step_3');
			next_fs = $('#step_2');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous3').click(function(){
			current_fs = $('#step_4');
			next_fs = $('#step_3');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous4').click(function(){
			current_fs = $('#step_5');
			next_fs = $('#step_4');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous5').click(function(){
			current_fs = $('#step_6');
			next_fs = $('#step_5');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous6').click(function(){
			current_fs = $('#step_7');
			next_fs = $('#step_6');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous7').click(function(){
			current_fs = $('#step_8');
			next_fs = $('#step_7');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous8').click(function(){
			current_fs = $('#step_9');
			next_fs = $('#step_8');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous9').click(function(){
			current_fs = $('#step_10');
			next_fs = $('#step_9');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous10').click(function(){
			current_fs = $('#step_11');
			next_fs = $('#step_10');
			current_fs.hide();
			next_fs.show(); 
			
		});
		$('#previous11').click(function(){
			current_fs = $('#step_12');
			next_fs = $('#step_11');
			current_fs.hide();
			next_fs.show(); 
			
		});
	});
</script>

</body>
</html>