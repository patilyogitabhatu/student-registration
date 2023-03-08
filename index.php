<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" a href="table2.css">
</head>
<body>
<body>
<h1>Student Enrollment Form</h1>
<div class="split left">
  <div class="centered">
    <form  method="post" action="add.php">
      <table class="tab">
        <tr>
          <td><h4>Name:</h4></td>
          <td><input type="text" name="sname" id="sname"></td>
        </tr>
        <tr>
          <td><h4>Email:</h4></td>
          <td><input type="text" name="smail" id="smail"></td>
        </tr>
        <tr>
          <td><h4>Mob.No:</h4></td>
          <td><input type="number" name="nom" id="nom"></td>
        </tr>
        <tr>
          <td><h4>Website:</h4></td>
          <td><input type="text" name="web" id="web"></td>
        </tr>
        <tr>
          <td><h4>Image:</h4></td>
          <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
        <td><h4>Gender:</h4></td>
        <td><input type="radio" name="gender" value="male" id="male">Male    <input type="radio" value="female" name="gender" id="female">Female</td>
        </tr>
        <tr>
          <td>    </td>
          <td><button class="btu" id="btu" type="submit" href="http://localhost/osis_infobyte/registration/add.php" name="btu"><b>Add</b></button>
           </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<div class="split right">
  <div class="title">Enrolled Students</div>
  <?php
$link = mysqli_connect("localhost", "root", "", "project");
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result= mysqli_query($link,"select* from student order by sid ASC");
?>
<div id="demo"></div>
<table align="center" width="40%" border="5" class="content-table">
	<tr class="active-row">
	<thead>
	<th>Student Information</th>
	<th>Student Image</th>
	</thead>
</table>
<table align="center" width="40%" border="5" class="content-table">
	<?php
	while($res=mysqli_fetch_array($result))
	{
    echo '<tr class="active-row">';
		echo '<td>Name: '.$res['sname'].'<br>Email: '.$res['smail'].'<br>Mob No: '.$res['nom'].'<br>Website: '.$res['web'].'<br>Gender: '.$res['gender'].'</td>';
		echo '<td><img src="'.$res['img'].'" style="width:150px;height:150px;"></td>';	    
		echo '</tr>';
	}
	?>
  </table>
  </div>
</div>
     
</body>
    
</body>
</html>