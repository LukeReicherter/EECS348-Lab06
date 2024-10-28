<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multiplication Table</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 8px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"])) {
			$size = intval($_POST["size"]);
			if ($size > 0) { 
				echo "<h2>Multiplication Table of Size $size</h2>";
				echo "<table>";
				for ($i = 1; $i <= $size; $i++) {
					echo "<tr>";
					for ($j = 1; $j <= $size; $j++) {
						$product = $i * $j;
						echo "<td>$product</td>";
					}
					echo "</tr>";
				}
				echo "</table>"; 
			} else {
				echo "<p>Please enter a positive integer for the table size.</p>";
			}
		} else {
			echo "<p>Please enter a valid table size.</p>";
		}
		?>
</body>
</html>
