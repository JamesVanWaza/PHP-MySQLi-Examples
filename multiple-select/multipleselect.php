<?php include ('html5req.php'); ?>
<h3>Select your favorite club</h3>
<form action="check-select.php" method="post">
<div class="small-12 columns">
	<select name="" id="chosen-select" multiple="">
	<option value="">Arsenal</option>
	<option value="">Aston Villa</option>
	<option value="">Chelsea</option>
	<option value="">Liverpool</option>
	<option value="">Manchester City</option>
	<option value="">Manchester United</option>
	<option value="">Norwich</option>
	<option value="">Paris Saint German</option>
	<option value="">Real Madrid</option>
	<option value="">Sevilla</option>
</select>
</div>
<div class="small-12 columns">
	<button class="submit-btn">Submit</button>
</div>
</form>
<?php include ('footer.php'); ?>
