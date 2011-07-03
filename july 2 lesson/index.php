<?php // Save this page as index.php

// Workout form, created by Michael Bourque and the PHP Percolate Coffee Club
// www.bostonphp.org

	// Connect to mysql and connect to the database
	// Note: You may need to change the user/password for your own database
	mysql_connect('localhost', 'root', 'root' );
	mysql_selectdb('workout');

	// Did user submit form?
	if( $_REQUEST['submit'] ) {

		// Add to database by looping over each answer
		foreach( $_REQUEST['answers'] AS $key => $answer ) {

			// Store each answer into the database
			$sql = "INSERT INTO answers SET question_id='{$key}', answer='{$answer}';";
			mysql_query( $sql );

		}

		// Redirect when the user submits the form
		header("Location:thankyou.php");
		exit;

	}

	// Go get all the categories from the database
	$sql = "SELECT * FROM categories;";
	$result = mysql_query( $sql );
	while( $row = mysql_fetch_assoc( $result ) ) {
		$categories[] = $row;
	}

	// Function to get all the questions related to a category and return them as an array
	// Syntax:
	// array getQuestions( int question_id );
	function getQuestions( $category_id ) {

		$sql = "SELECT * FROM questions WHERE category_id ='{$category_id}'";
		$result = mysql_query( $sql );
		while( $row = mysql_fetch_assoc( $result ) ) {
			$questions[] = $row;
		}

		return $questions;

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Workout Evaluation Form</title>
	</head>
	<body>
		<h1>Workout Evaluation Form</h1>
		<form method='POST'>
		<?php foreach( $categories AS $category ) : ?>
			<fieldset>
				<legend><?php echo $category['name'];?></legend>
				<?php $questions = getQuestions( $category['id'] ); ?>
				<?php foreach( $questions AS $question ) : ?>
					<p><?php echo $question['question']; ?>
					<label><input name="answers[<?php echo $question['id']; ?>]" value="Yes" type="radio" />Yes</label>
					<label><input name="answers[<?php echo $question['id']; ?>]" value="No" type="radio" />No</label>
					</p>
				<?php endforeach; ?>
			</fieldset>
		<?php endforeach; ?>
		<input name="submit" type="submit" />
		</form>
	</body>
</html>
