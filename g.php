<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  border: 1px solid #aaaaaa;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #000000;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
#ratting_button{
  background-color: #bbbbbb;
  color: #ffffff;
  text-align:center;
  font-size: 17px;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
/*
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
*/

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #000000;
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

<script type="text/javascript">
	function yesnoCheck2() {
		if (document.getElementById('yes_recommend').checked) {
			document.getElementById('if_no_recommend').style.display = 'none';	
			} 
		else if(document.getElementById('no_recommend').checked) {
			document.getElementById('if_no_recommend').style.display = 'block';
		   }
		}
	function yesnoCheck3() {
		if (document.getElementById('yes_return').checked) {
			document.getElementById('if_no_return').style.display = 'none';	
			} 
		else if(document.getElementById('no_return').checked) {
			document.getElementById('if_no_return').style.display = 'block';
		   }
		}
	function yesnoCheck4() {
		if (document.getElementById('yes_birthday').checked) {
			document.getElementById('if_yes_birthday').style.display = 'block';	
			} 
		else if(document.getElementById('no_birthday').checked) {
			document.getElementById('if_yes_birthday').style.display = 'none';
		   }
		}
</script>
<body>

<form id="regForm" action="insert.php" onsubmit="return validate()" name="regForm">
  <h1>Customer Details</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
   <p >1. Are you a new customer ?</p>
	  <p><input type="radio" value=" " name="customer"  id="customer" onchange="nextPrev(1)"/><label>Yes</label><input type="radio" value="" name="customer1"  id="customer1" onchange="nextPrev(1)"/><label>No</label></p>
	  <div id="customer_error" class="val_error"></div>
  </div>
  <div class="tab">
   <p >2. would you like to win a meal for 4 this month?</p>
	  <p><input type="radio" value="yes" name="meal" onclick="nextPrev(1)"/><label>Yes</label><input type="radio" value="no" name="meal" onclick="nextPrev(1)"/><label>No</label></p>
	  <div id="meal_error" class="val_error"></div>
  </div>
  <div class="tab">
    <p>3. How would you rate your visit ?</p>
	  <p><span class="rating">
			<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-visit" value="5" onchange="nextPrev(1)">
			<label for="rating-input-1-5" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-visit" value="4" onchange="nextPrev(1)">
			<label for="rating-input-1-4" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-visit" value="3" onchange="nextPrev(1)">
			<label for="rating-input-1-3" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-visit" value="2" onchange="nextPrev(1)">
			<label for="rating-input-1-2" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-visit" value="1" onchange="nextPrev(1)">
			<label for="rating-input-1-1" class="rating-star"></label>
		</span>
		</p>
  </div>
  <div class="tab">
    <p>4. How would you rate the staff ?</p>
	  <p><span class="rating">
		<input type="radio" class="rating-input" id="rating-input-2-5" name="rating-staff" value="5" onchange="nextPrev(1)">
		<label for="rating-input-2-5" class="rating-star"></label>
		<input type="radio" class="rating-input" id="rating-input-2-4" name="rating-staff" value="4" onchange="nextPrev(1)">
		<label for="rating-input-2-4" class="rating-star"></label>
		<input type="radio" class="rating-input" id="rating-input-2-3" name="rating-staff" value="3" onchange="nextPrev(1)">
		<label for="rating-input-2-3" class="rating-star"></label>
		<input type="radio" class="rating-input" id="rating-input-2-2" name="rating-staff" value="2" onchange="nextPrev(1)">
		<label for="rating-input-2-2" class="rating-star"></label>
		<input type="radio" class="rating-input" id="rating-input-2-1" name="rating-staff" value="1" onchange="nextPrev(1)">
		<label for="rating-input-2-1" class="rating-star"></label>
		</span>
	  </p>
  </div>
  <div class="tab">
    <p>5. How would you rate the food ?<p>
		<p><span class="rating">
			<input type="radio" class="rating-input" id="rating-input-3-5" name="rating-food" value="5" onchange="nextPrev(1)">
			<label for="rating-input-3-5" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-3-4" name="rating-food" value="4" onchange="nextPrev(1)">
			<label for="rating-input-3-4" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-3-3" name="rating-food" value="3" onchange="nextPrev(1)">
			<label for="rating-input-3-3" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-3-2" name="rating-food" value="2" onchange="nextPrev(1)">
			<label for="rating-input-3-2" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-3-1" name="rating-food" value="1" onchange="nextPrev(1)">
			<label for="rating-input-3-1" class="rating-star"></label>
			</span>
		</p>
  </div>
  <div class="tab">
    <p>6. How would you rate the atmosphere ?<p>
		<p><span class="rating">
			<input type="radio" class="rating-input" id="rating-input-4-5" name="rating-atmosphere" value="5" onchange="nextPrev(1)">
			<label for="rating-input-4-5" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-4-4" name="rating-atmosphere" value="4" onchange="nextPrev(1)">
			<label for="rating-input-4-4" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-4-3" name="rating-atmosphere" value="3" onchange="nextPrev(1)">
			<label for="rating-input-4-3" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-4-2" name="rating-atmosphere" value="2" onchange="nextPrev(1)">
			<label for="rating-input-4-2" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-4-1" name="rating-atmosphere" value="1" onchange="nextPrev(1)">
			<label for="rating-input-4-1" class="rating-star"></label>
			</span>
		</p>
  </div>
   <div class="tab">
     <p>7. How would you rate the restaurant temperature ?<p>
	  <p><span class="rating">
			<input type="radio" class="rating-input" id="rating-input-5-5" name="rating-temperature" value="5" onchange="nextPrev(1)">
			<label for="rating-input-5-5" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-5-4" name="rating-temperature" value="4" onchange="nextPrev(1)">
			<label for="rating-input-5-4" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-5-3" name="rating-temperature" value="3" onchange="nextPrev(1)">
			<label for="rating-input-5-3" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-5-2" name="rating-temperature" value="2" onchange="nextPrev(1)">
			<label for="rating-input-5-2" class="rating-star"></label>
			<input type="radio" class="rating-input" id="rating-input-5-1" name="rating-temperature" value="1" onchange="nextPrev(1)">
			<label for="rating-input-5-1" class="rating-star"></label>
		</span>
		</p>
  </div>
  <div class="tab">
	<p>8. Would you recommend us ?</p>
	<p>Yes<input type="radio" value="yes" name="recommend" onclick="javascript:yesnoCheck2();" id="yes_recommend" onchange="nextPrev(1)"/> 
	No<input type="radio" value="no" name="recommend" onclick="javascript:yesnoCheck2();" id="no_recommend" /></p>
	<div id="recommend_error" class="val_error"></div>

	<div id="if_no_recommend" style="display:none">
		<p>why you not recommend us?</p>
		<div class="box">
			<textarea rows="4" onblur="nextPrev(1)">
			</textarea>
		</div>
	 </div>

  </div>
 
  <div class="tab">
	<p>9. Would you return ?</p>
		<p>Yes<input type="radio" value="yes" name="you_return" onclick="javascript:yesnoCheck3();" id="yes_return" onchange="nextPrev(1)"/> 
		No<input type="radio" value="no" name="you_return" onclick="javascript:yesnoCheck3();" id="no_return" /></p>
		<div id="you_return_error" class="val_error"></div>
		<div id="if_no_return" style="display:none">
			<p>why you not return ?</p>
			<div class="box">
				<textarea rows="4" onblur="nextPrev(1)">
				</textarea>
			</div>
		 </div>
  </div>

 <div class="tab">
	<div id="new_details" style="display:none;">
		<p><label>Email Address</label></p>
		<p><input type="text" value="" name="email"/></p>
		<p><label>Name</label></p>
		<p><input type="text" value="" name="name"/></p>
		<p><label>Phone</label></p>
		<p><input type="text" value="" name="phone" onblur="nextPrev(1)"/></p>
	</div>
	<div id="old_details" style="display:none;">
		  
	</div>
  </div>


  <div class="tab">
	<p>10. Would you also like to be entered into Birthday club - You will get a free meal on your birthday if you book a table? </p>
		<p>Yes<input type="radio" value="yes" name="birth_day_club" onclick="javascript:yesnoCheck4();" id="yes_birthday" /> 
		No<input type="radio" value="no" name="birth_day_club" onclick="javascript:yesnoCheck4();" id="no_birthday" onchange="nextPrev(1)"/></p>
		<div id="birth_day_club_error" class="val_error"></div>
		<div id="if_yes_birthday" style="display:none">
			<p><label>Please Enter Your Date of Birth</label></p>
			<p><input type="text" name="dob" value="" placeholder="MM/dd/yyyy" id="calendar" onblur="nextPrev(1)"/></p>
		 </div>
		 
  </div>
  <div class="tab">
	<h5>Thank you for taking the time to review our restaurant Please review us on Trip Advisor</strong></h5>
		
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	  <button type='Submit' id='submitBtn' style="display:none">Submit</button>
      <!--<button type="button" id="nextBtn" >Next</button> -->
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px; display:none;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
	<span class="step"></span>
  </div>
</form>


<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

 
function showTab(n) {

  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  
  if ((document.getElementById('customer').checked) && n == (x.length - 3)) {
	document.getElementById('new_details').style.display = 'block';	
	document.getElementById('old_details').style.display = 'none';	
  } else {
	   document.getElementById('old_details').style.display = "block";
	   document.getElementById('old_details').innerHTML = "<link href='javascript:void(0)' onload='nextPrev(1)' />";
	  document.getElementById('new_details').style.display ='none';
  }
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
	
  if (n == (x.length - 1)) {
    document.getElementById("submitBtn").style.display = "inline";
  } else {
    document.getElementById("submitBtn").style.display = "none";
  }


  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


</body>
</html>
