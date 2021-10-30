<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>BMI Calculator</title>
	</head>
	<style media="screen">

		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

		body{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: sans-serif;
			background-color:#323757;
			min-height: 100vh;
		}
		div{
			width: 500px;
			position: absolute;
			top: 50%;
			left: 50%;
			background-color: #fff;
			transform: translate(-50%, -50%);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 1px 1px 20px #1f1919;
		}
		h2{
			font-size: 2em;
			font-weight: 600;
		}
		.text{
			text-align: left;
			margin-left: 150px;
            font-size: 1.5em;
		}
		#w, #h{
			color: #222f3e;
			text-align: left;
			font-size: 20px;
			font-weight: 200;
			outline: none;
			border: none;
			background: none;
			border-bottom: 1px solid #341f97;
			width: 200px;
		}
			#w:focus, #h:focus{
				border-bottom: 2px solid #341f97;
				width: 300px;
				transition: 0.5s;
			}
			#result{
				color: #341f97;
			}
			#btn{
				font-family: inherit;
				margin: 30px 10px;
				border: none;
				color: #fff;
				background-image: linear-gradient(120deg,#ff6b6b, #5f27cd);
				width: 150px;
				padding: 10px;
				border-radius: 30px;
				outline: none;
				cursor: pointer;
        font-size: 1.2em;
			}
			#btn:hover{
				box-shadow: 1px 1px 10px #341f97;
			}
			#info{
				font-size: 12px;
				font-family: inherit;
			}
			/* Styling for Nav Bar */
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
			}
			#list {
				outline: 0;
				margin: 0;
				border: 1px solid #cccccc;
				padding: 0.5em 1em;
				font-family: sans-serif;
				font-size: 1em;
			}
	</style>
	<script type="text/javascript">
		function BMI() {
			var h=document.getElementById('h').value;
			var w=document.getElementById('w').value;
			var bmi=w/(h/100*h/100);
			var bmio=(bmi.toFixed(2));

			document.getElementById("result").innerHTML="Your BMI is " + bmio;

			if(bmio<18.5){
				document.getElementById("weightclass").innerHTML="You are underweight";
			} else if (bmio>=18.5 && bmio<=24.9){
				document.getElementById("weightclass").innerHTML="You're weight is Normal";
			} else if(bmio>24.9) {
				document.getElementById("weightclass").innerHTML="You are overweight";
			}
		}
	</script>
	<body>
		<!-- Nav Bar  -->
		
		<ul class="navbar">
			<li id="head">Wellness Tracker</li>
			<li style="padding-left: 20%;"><a class="active" href="#home">Home</a></li>
			<li><a href="calorie/index.php">Calorie</a></li>
			<li><a href="BMR.php">BMR</a></li>
			<li><a href="record.php">Records</a></li>
			<li>	 
				<a style="padding: 5px 16px"><select name="list" id="list" accesskey="target">
					<option value="">Diet Plans</option>
					<option value="dietplans/underweightplan.php">Underweight</option>
					<option value="dietplans/healthyplan.php">Normal</option>
					<option value="dietplans/obeseplan.php">Overweight</option>
				</select>
				<input type=button value="Go" onclick="goToNewPage()" /> </a>
			</li>
			<li><a href="#">About Us</a></li>
		 
			<li style="float:right; background-color:#2980B9;"><a href="logout.php">Log Out</a></li>
		</ul>
</body>
</html>

		<!-- Main Content ... -->
<?php session_start();
if($_SESSION["name"]==true)
{
 echo "<p style='color:white;font-size: 1.5em;font-family:Times New Roman'>"."Welcome"."  ".$_SESSION["name"];
}
else
{
	header('location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
	
		<div>
			<h2>BMI Calculator</h2>
			<p class="text">Height</p>
			<input type="text" id="h" placeholder="Height in [cm]">
			<p class="text">Weight</p>
			<input type="text" id="w" placeholder="Weight in [kg]">
			<p id="result"></p>
			<p id="weightclass" style="color: green; font-size: 18px;"></p>
			<button id="btn" onClick="BMI()">Calculate</button>
		</div>
		
	</body>

    <script type="text/javascript">
        function goToNewPage()
        {
            var url = document.getElementById('list').value;
            if(url != 'none') {
                window.location = url;
            }
        }
    </script>
</html>
