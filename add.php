<style>
table, th, td {
    border: 1px solid black;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$sid = mysqli_real_escape_string($link, $_REQUEST['sid']);
$sname = mysqli_real_escape_string($link, $_REQUEST['sname']);
$smail = mysqli_real_escape_string($link, $_REQUEST['smail']);
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$web = mysqli_real_escape_string($link, $_REQUEST['web']);
$img = mysqli_real_escape_string($link, $_REQUEST['img']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
// Attempt insert query execution
$sql = "INSERT INTO student (sid,sname,smail,nom,web,img,gender) VALUES ('$sid','$sname','$smail','$nom','$web','$img','$gender')";
if(mysqli_query($link, $sql)){
  header("location:index.php");
} 
else
{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
