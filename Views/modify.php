<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/style.css">
    <style>
        body {
            background-image: url('bg.jfif');
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
            margin-top: 100px;
        }

        div .title {
            text-align: center;
            color: #111;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 60px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            margin-top: -8px;
        }
    </style>
</head>

<body>
    <div>
        <form method="post">
            <div class="title">Edit Profile</div>
            <label>Name</label>
            <input id="text" type="text" name="name"><br><br>

            <label>Password</label>
            <input id="text" type="text" name="pwd"><br><br>

            <input id="button" type="submit" value="Edit" name="edit"><br><br>
        </form>
    </div>
</body>

</html>
<?php
session_start();

include("connection.php");
include("function.php");

$id = $_SESSION['ID'];
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