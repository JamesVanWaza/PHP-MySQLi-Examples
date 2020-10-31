<?php include 'html5req.php';?>
<body>
<h1>Which Hobbies do you like</h1>
<form action="check.php" method="POST">
	<div class="row">
		<div class="large-12 columns">
			<input type="radio" name="Hobbies[]" value="Books" /><label>Books</label>
			<input type="radio" name="Hobbies[]" value="Movies" /><label>Movies</label>
			<input type="radio" name="Hobbies[]" value="Sports" /><label>Sports</label>
			<input type="radio" name="Hobbies[]" value="Games" /><label>Games</label>
			<input type="radio" name="Hobbies[]" value="Travelling" /><label>Travel</label>
			<br />
			<button class="submit-btn">Submit</button>
		</div>
	</div>
</form>
<?php include 'footer.php';?>
