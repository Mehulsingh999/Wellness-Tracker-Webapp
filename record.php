<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style media="screen">
	@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
	#bdy{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: sans-serif;
			background-color:#323757;
			min-height: 100vh;
		}
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin: 0;
}

li a:hover:not(.active) {
  background-color: #111;
  color: red;
}


.active {
  background-color: #A93226;
}

#head{
  padding: 1vh;
  font-size: 2em;
  font-family: Josefin Sans,'Times New Roman', Times, serif;
  color: #F2F3F4;
  margin: 0;
}

ul.navbar{
  padding:0;
}
    </style>
</head>
<body id="bdy">
  <ul class="navbar">
    <li id="head">Wellness Tracker</li>
    <span style="display:flex">
      <li style="padding-left: 5%;"><a href="3.php">Home</a></li>
      <li><a  href="calorie/index.php">Calorie</a></li>
      <li><a href="BMR.php">BMR</a></li>
      <li><a class="active" href="#record">Records</a></li>
      <li><a href="#">About</a></li>
    </span>
    <li style="float:right; background-color:#2980B9;"><a href="logout.php">Log Out</a></li>
  </ul>
  
<?php session_start();
include('connection.php');
if($_SESSION["name"]==true)
{
 echo "<p style='color:white;font-size:20px;font-family:Times New Roman'>"."Welcome"."  ".$_SESSION["name"];
}
else
{
	header('location:login.html');
}
?>
<?php
$name=$_SESSION["name"];
$query=mysqli_query($con,"select * from registration where name='$name'")or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
$id=$row["id"];

if(isset($_POST["submit"]))
{
	$bmivalue=$_POST["bmivalue"];
	$calorievalue=$_POST["calorievalue"];
	$bmrvalue=$_POST["bmrvalue"];
	$date=$_POST["date"];
	$query=mysqli_query($con,"insert into saved(bmicontent,caloriecontent,bmrcontent,date,user_id)value('$bmivalue','$calorievalue','$bmrvalue','$date','$id')")or die(mysqli_error($con));
}
?>
<form method="post">
                <div style="padding: 25px 100px 25px 100px;margin: auto"class="form-row justify-content-center">
                  <div class="col-xs-3">
                    <label for="bmi" style="color: white">Bmi Value:</label>
                    <input type="number" step="0.01" class="form-control" placeholder="BMI value" name="bmivalue">
                  </div>
                  <div class="col-xs-3">
                    <label for="calorie" style="color: white">Calorie Value:</label>
                    <input type="number" step="0.001" class="form-control" placeholder="Calorie value" name="calorievalue" required="">
                  </div>
                  <div class="col-xs-3">
                    <label for="bmr" style="color: white">BMR Value:</label>
                    <input type="number" step="0.001" class="form-control" placeholder="BMR value" name="bmrvalue" required="">
                  </div>
                  <div class="col-xs-3">
                    <label for="date" style="color: white">Date:</label>
                    <input type="date" class="form-control" placeholder="Date" name="date" required="">
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
	<?php
	$name=$_SESSION["name"];
      $query1=mysqli_query($con,"select * from registration where name='$name'")or die(mysqli_error($con));
      $row1=mysqli_fetch_array($query1);
      $id=$row1["id"];
	$query=mysqli_query($con,"select * from saved where user_id=$id")or die(mysqli_error($con));
	$rowcount=mysqli_num_rows($query);
	?>
	<table style="width: 500px;height: 200px;" align="center" class="table table-striped table-light table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">BMI value</th>
			<th scope="col">Calorie value</th>
			<th scope="col">BMR value</th>
		  <th scope="col">Date</th>
		</tr>

		</thead>
	<tbody>
	<?php 
	for($i=1;$i<=$rowcount;$i++)
	{
		$row=mysqli_fetch_array($query);
		?>
	<tr>
		<td><?php echo $row["bmicontent"]?></td>
		<td><?php echo $row["caloriecontent"]?></td>
		<td><?php echo $row["bmrcontent"]?></td>
		<td><?php echo $row["date"]?></td> 
	</tr>
	<?php 
}
?>
</tbody>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
