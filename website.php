<html>
<head>

<title>
candidates
</title>
<style type="text/css">
table 	
	{ 
	border : 4px solid white;
	background-color: #FFD;
	width: 1035px;
	text-align: center; 	
}
th 	{
	border-bottom:5px solid #000;
	}

td 	{
	border-bottom:2px solid #666;
	}

</style>
</head>
<body background="2offi.jpg">

<h1> <font face="Georgia" color="white">Your Suitable Candidates</font>  </h1>

<?php
include('1.php');
$Skill = $_POST['skills'];

$sqlget = "SELECT * FROM Jobportal WHERE Skill= 'Skill'";
$sqldata = mysqli_query($conn, $sqlget)or die('error');

echo "<table>";

echo "<tr>
	<th>id</th>
	<th>Name</th>
	<th>Department</th>
	<th>Skill</th>
	<th>Experience</th>
      </tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['id'];
	echo "</td><td>";
	echo $row['Name'];
	echo "</td><td>";
	echo $row['Department'];
	echo "</td><td>";
	echo $row['Skill'];
	echo "</td><td>";
	echo $row['Experience'];
	echo "</td></tr>";
	}

echo "</table>";

?>

</body>
</html>

