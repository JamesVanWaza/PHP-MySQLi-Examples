<?php
require 'mysqli-connect.php';
include 'html5req.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	/*Check whether a hobby has been submitted*/
	if (empty($_POST['Hobbies'])) {
		$errors[] = '<p>' . 'You forgot to enter your hobbies' . '</p>';
	} else {
		/*The Implode Function is added spaces between the checkboxes*/
		$hobb = implode(', ', $_POST['Hobbies']);
	}
}
/*If everything is ok*/
if (empty($errors)) {
	$q = "INSERT INTO checkboxes (id, hobbie, date_created)
			VALUES ('id', '$hobb', NOW())";
	$result = @mysqli_query($dbcon, $q); // Run the query.
	if ($result) {
		/*Will only show one hobbie selected
			$N = count($hobb);
			echo ("<p>You selected $N Hobbies(s): ");
			foreach ($errors as $msg) {
			// Print each error.
			echo " - $msg<br>\n";
			}
			*/

		// echo "<div data-alert class='alert-box success radius'>
		// 		<h3 class='text-center'>The following $N Hobbies have been added</h3>
		// 			<a href='#' class='close'>&times;</a>
		// 	</div>";
	}
} else {
	// echo "<div data-alert class='alert-box alert round'>
	// 			<h4 class='text-center'>The Hobbies have not been added</h4>
	// 				<a href='#' class='close'>&times;</a>
	// 		</div>";
}
mysqli_close($dbcon);
?>
	
<?php include 'footer.php';?>
