
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>BMR</title>
  <style media="screen">
    body{
      background-color:#323757;
      text-align: center;
    }
    div{
      border-radius: 10px;
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

<body>
  <ul class="navbar">
      <li id="head">Wellness Tracker</li>
      <li style="padding-left: 20%;"><a href="3.php">Home</a></li>
      <li><a href="calorie/index.php">Calorie</a></li>
      <li><a class="active" href="#BMR">BMR</a></li>
      <li><a href="record.php">Records</a></li> 
      <li><a href="#">About Us</a></li>
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
  <div class="container">
    <div class="row p-3 mb-2 bg-light text-dark">
      <div class="col-6 text-center ">
        <form method="POST" name="bmrform">
          <br>
          <h2>BMR Calculations</h2>
          <br>
          <div class="form-check form-check-inline">
            <input type="radio" aria-label="Radio button for following text input" name="Male" id="Male"/>Male
            <input type="radio" aria-label="Radio button for following text input" name="Female" id="Female"/>Female
          </div>
          <p></p>

          <div class="form-inline">
            <label class="col-sm-6 col-form-label">Enter Weight in Kgs </label>
            <input type="text" class="form-control" id="weight" value="" size="20" placeholder="Enter weight in Kgs"
              name="weight" required>
          </div>
          <br>
          <div class="form-inline">
            <label class="col-sm-6 col-form-label">Enter Height in Cms </label>
            <input type="text" class="form-control" id="height" value="" size="20" placeholder="Enter height in Cms"
              name="height" required>
          </div>
          <br>
          <div class="form-inline">
            <label class="col-sm-6 col-form-label">Enter Age in Years </label>
            <input type="text" class="form-control" id="age" value="" size="20" placeholder="Enter age in Years"
              name="age" required> <br>
          </div>
          <br>

          <input type="reset" class="btn btn-outline-secondary" value="Reset">
          <input type="button" class="btn btn-outline-success" value="Calculate BMR" onclick="calBMR();" id="cal"><br>
          <br>
          <div class="form-inline">
            <label class="col-sm-6 col-form-label">BMR : </label>
            <input type="text" class="form-control" value="" size="20" placeholder="Result - BMR" name="bmr" id="bmr"
              readonly>
          </div>
          <br>

        
      </div>

      <div class="col-6">
          <br>
          <h2 class="text-center">TDEE Calculations</h2>
          <br>

          <input type="button" name="TDEE_1" id="TDEE_1" class="btn btn-block btn-outline-secondary" onclick="calTDEE_1(document.getElementById('bmr').value);" value="Sedentary">
          <input type="button" name="TDEE_2" id="TDEE_2" class="btn btn-block btn-outline-primary" onclick="calTDEE_2(document.getElementById('bmr').value);" value="Light exercise 1-2 days">
          <input type="button" name="TDEE_3" id="TDEE_3" class="btn btn-block btn-outline-success" onclick="calTDEE_3(document.getElementById('bmr').value);" value="Moderate exercise 3-5 days">
          <input type="button" name="TDEE_4" id="TDEE_4" class="btn btn-block btn-outline-warning" onclick="calTDEE_4(document.getElementById('bmr').value);" value="Heavy exercise 6-7 days">
          <input type="button" name="TDEE_5" id="TDEE_5" class="btn btn-block btn-outline-danger" onclick="calTDEE_5(document.getElementById('bmr').value);" value="Athelete">
          <p></p><br>
          <div class="form-inline">
            <label class="col-sm-6 col-form-label">TDEE : </label>
            <input type="text" class="form-control" value="" size="20" placeholder="Result - TDEE" name="tdee" id="tdee"
              readonly>
          </div>
        </form>


        
      </div>
    </div>
    <br>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="bmr.js"></script>
</body>

</html>