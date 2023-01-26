<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
<body class="home_bg">
	
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
				<h3>WebsiteYarn?</h3>
			</div>
				<ul class="tags">
					<a class="" href="Home.html"><li>Home</li></a>
					<a class="" href="map.html"><li>Map</li></a>
					<a class="" href="character.php"><li>Characters</li></a>
					<a class="" href="chapter_list.html"><li>Chapters</li></a>
				</ul>
		</div>
	</div>


	<div class="" id="container" style="overflow: auto; margin: 50px;">
		<div id="table-scroll">
			<table class="display_table" bgcolor="#dfdddb" border="1">
					<tr>
						<th colspan="3" style="text-align: center;">CHAPTER LIST (P*ta ayaw mag scroll)</th>
					</tr>
					<tr>
						<th class="display_table_cell">Chapter</th>
						<th class="display_table_cell">Title</th>
						<th class="display_table_cell">Summary</th>
				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "rand_new");
				
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT chapNo, Title, Summary FROM Chapters01";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr>
							<td><br>" . $row["chapNo"] . "<br><br></td>
							<td><br>" . $row["Title"] . "<br><br></td>
							<td><br>" . $row["Summary"]. "<br><br></td>
						</tr>";
				}

				echo "</table>";
				} else { echo "<h1> 0 results </h1>"; }
				$conn->close();
				?>
			</table>
		</div>
	</div>

	<div class="center">
		<button class="center"><a class="button" href="chapters_add.html">ADD CHAPTER</a></button>
	</div>

</body>
</html>
