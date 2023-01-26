<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Character List</title>
	<link rel="stylesheet" type="text/css" href="style.css">


	<style type="text/css">
		th{
			height: 30px;
			padding-left: 5px;
		}

		td{
			height: 30px;
			padding-left: 5px;
			padding-right: 5px;
		}
	</style>

</head>
<body>
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
				<h3>WebsiteYarn?</h3>
			</div>
				<ul class="tags">
					<a class="" href="Home.html"><li>Home</li></a>
					<a class="" href="map.html"><li>Map</li></a>
					<a class="" href="character.php"><li>Characters</li></a>
					<a class="" href="chapter_list.php"><li>Chapters</li></a>
				</ul>
		</div>
	</div>

	<br><br><br><br><br>
	
	<div class="" id="container" style="overflow-x: auto;">
		<table class="display_table" bgcolor="#dfdddb" border="1">
			<tr>
				<th colspan="4" style="text-align: center;">CHARACTER LIST</th>
			</tr>
			<tr>
				<th class="display_table_cell">First Name</th>
				<th class="display_table_cell">Last Name</th>
				<th class="display_table_cell">Gender</th>
				<th class="display_table_cell">Nationality</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "rand_new");
			
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT firstname, lastname, gender, nationality FROM wot";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" 
				. $row["gender"] . "</td><td>" . $row["nationality"]. "</td></tr>";
			}

			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
		</table>
	</div>

	<br><br>
	<div class="center">
		<button class="center"><a class="button" href="character_add.html">ADD CHARACTER</a></button>
	</div>
</body>
</html>
