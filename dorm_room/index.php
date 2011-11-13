<?php

	// Connect to the database
	$link = mysql_connect('localhost', 'root', 'root');
	if (!$link) { // test for error
	    die('Not connected : ' . mysql_error());
	}
	$db_selected = mysql_select_db('pizza_order', $link);

	// Check if the user submitted the form
	if ( $_REQUEST["submit"] ) {

		// Prevent injection attack
		$name = mysql_real_escape_string( $_REQUEST["name"] );
		$email = mysql_real_escape_string( $_REQUEST["email"] );

		// Save to database
		$sql = "INSERT INTO orders SET name='{$name}', email='{$email}', cheese_slices='{$_REQUEST[cheese]}';";
		$result = mysql_query( $sql );
		if( mysql_error() ) {
			die( mysql_error() );
		}
		echo "Thank you for your order";
		die();
	}

	function pizza_slice_selector( $toppings ) {

		echo "<select name={$toppings}>\n";
		echo "	<option value=0>Choose...</option>\n";
		echo "	<option value=1>One Slice</option>\n";
		echo "	<option value=2>Two Slices</option>\n";
		echo "	<option value=3>Three Slices</option>\n";
		echo "</select>\n";

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pizza Ordering Application</title>
	</head>
	<body>
		<h1>Pizza Ordering Application</h1>

		<form method="post">
			<label>Name:
				<input type="text" name="name" />
			</label>

			<label>Email:
				<input type="text" name="email" />
			</label>

			<table border=1>
				<thead>
					<tr>
						<th>Toppings</th>
						<th>Slices</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Cheese</td>
						<td>
							<?php pizza_slice_selector( 'cheese' ); ?>
						</td>
					</tr>
					<tr>
						<td>Mushroom</td>
						<td>
							<?php pizza_slice_selector( 'mushroom' ); ?>
						</td>
					</tr>
				</tbody>
			</table>

			<input type="submit" name="submit" value="submit" />

		</form>
	</body>
</html>
