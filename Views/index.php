<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

$id = $user_data['ID'];
$query = mysqli_query($con, "SELECT * FROM profil where ID='$id'");
$row = mysqli_fetch_array($query);

if (isset($_POST['edit'])) {
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$query = "UPDATE profil SET name = '$name',
						  pwd = '$pwd'
						  WHERE id = '$id'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
?>
	<script type="text/javascript">
		alert("Update Successfull.");
		window.location = "index.php";
	</script>
<?php
}

?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        body { 
            background-image: url('bg.jfif');
        }

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font-family: arial;
		}

		.title {
			color: grey;
			font-size: 18px;
		}

		button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

		a {
			text-decoration: none;
			font-size: 22px;
			color: black;
		}

		button:hover,
		a:hover {
			opacity: 0.7;
		}
	</style>
</head>

<body>
	<br> 
	<br>

	<div class="card">
		<img src="av.jpg" alt="" style="width:100%">
		<h1><?php echo $user_data['Name']; ?></h1>
		<p class="title"></p>
		<p></p>
		<p><button onclick="location.href='modify.php'">Edit Profile</button></p>
		<p><button onclick="location.href='logout.php'">Logout</button></p>
	</div>

</body>

</html>