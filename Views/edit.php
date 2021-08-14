<?php
 
 session_start();
 include("connection.php");
 include("function.php");
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $select= "select * from profil where id='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update profil set Name='$name',PWD='$pwd' where ID='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:index.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:modify.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:modify.php');
    }
 }
