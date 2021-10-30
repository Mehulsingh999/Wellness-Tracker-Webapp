
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calorie Calculator</title>

    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
      #loading, #results {
        display: none;
      }
      #loading {
        width: 100%;
      }
body{
      margin: 0;
      padding: 0;
      text-align: center;
      font-family: sans-serif;
      background-color:#323757;
      min-height: 100vh;
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
      <span style="display:flex">
        <li style="padding-left: 10%;"><a href="../3.php">Home</a></li>
        <li><a class="active" href="#calorie">Calorie</a></li>
        <li><a href="../BMR.php">BMR</a></li>
        <li><a href="../record.php">Records</a></li>
        <li><a href="#">About</a></li>
      </span>
      <li style="float:right; background-color:#2980B9;"><a href="../logout.php">Log Out</a></li>
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


    <div class="container justify-content-center">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Calorie Calculator</h1>
            <form id="calorie-form">

              <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="age" placeholder="Ages 15-80">
                </div>
              </div>

              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10" id="form-radio">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male" name="customRadioInline1" class="custom-control-input" checked="checked">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>  
                  </div>
                </div> 
              </fieldset> 

              <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="weight" placeholder="In kilograms">
                </div>
              </div>

              <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="height" placeholder="In centimeters">
                </div>
              </div>
              
              <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0">Activity</legend>
                <select class="custom-select col-sm-10" id="list">
                  <option selected value="1">Sedentary (little or no exercise)</option>
                  <option value="2">Lightly active (light exercise/sports 1-3 days/week)</option>
                  <option value="3">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                  <option value="4">Very active (hard exercise/sports 6-7 days a week)</option>
                  <option value="5">Extra active (very hard exercise/sports & physical job or 2x training)</option>
                </select>
              </div>

              <div class="form-group">
                <input type="submit" id="btn" value="Calculate"style="margin: auto">
              </div>

            </form>

            <div id="loading">
              <img src="./img/Loading.gif" alt="">
            </div>

            <div id="results" class="pt-4">
              <h5>Total Calories</h5>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" class="form-control" id="total-calories" disabled>
                </div>
              </div>                       
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>