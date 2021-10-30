<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<style>
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    #body {
        padding: 10px;
        padding-bottom: 60px;
        /* Height of the footer */
    }


    button {
        padding: 0;
        border: none;
        background: none;
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
</style>

<body>
         <!-- Nav Bar  -->
		
		<ul class="navbar">
			<li id="head">Wellness Tracker</li>
			<li style="padding-left: 25%;"><a href="../3.php">Home</a></li>
            <li><a href="../calorie/index.php">Calorie</a></li>
            <li><a href="../BMR.php">BMR</a></li>
            <li><a href="../record.php">Records</a></li>
            <li>     
                <a class="active" style="padding: 5px 16px"><select name="list" id="list" accesskey="target">
                    <option value="">Diet Plans</option>
                    <option value="underweightplan.php">Underweight</option>
                    <option value="healthyplan.php">Normal</option>
                    <option value="obeseplan.php">Overweight</option>
                </select>
                <input type=button value="Go" onclick="goToNewPage()" /> </a>
            </li>
            <li><a href="#">About Us</a></li>
         
            <li style="float:right; background-color:#2980B9;"><a href="../logout.php">Log Out</a></li>
		</ul>
<?php session_start();
include('connection.php');
if($_SESSION["name"]==true)
{
 echo "<p style='color:black;font-size:20px;font-family:Times New Roman'>"."Welcome"."  ".$_SESSION["name"];
}
else
{
  header('location:login.html');
}
?>
            <div class="container-fluid" id="dietId">
                <main role="main" class="container">
                    <div class="row">
                        <div class="col-md-8 blog-main">
                            <h3 class="pb-3 mb-4 font-italic border-bottom">
                                <a href="https://www.healthifyme.com/blog/best-indian-diet-plan-weight-loss/"></a>
                            </h3>

                            <div class="blog-post">
                                <h2 class="blog-post-title">Weight Gain Diet Plan</h2>
                                <br>
                                <img class="img-fluid rounded"
                                    src="https://ukhealthcare.uky.edu/sites/default/files/styles/news_hero/public/2018-10/raw-salmon-with-vegetables.jpg?itok=lCg4WcCB"
                                    alt="">
                                
                                <p>We have put together a diet plan for weight loss with Indian food. This 7 day diet
                                    plan, 1200 calorie diet
                                    plan
                                    is a sample, and should not be followed by any individual without consulting with a
                                    nutritionist.
                                    <br><br>
                                <p class="h5">
                                    Day 1:
                                </p>
                                After starting your day with cucumber water, have oats porridge and mixed nuts for
                                breakfast.
                                Have a roti with dal and gajar matar sabzi for lunch.
                                Follow that up with dal and lauki sabzi to go with a roti for dinner.</p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p> 6:30 AM Cucumber Detox Water(1 glass)<br><br>
                                    8:00 AM Oats Porridge in Skimmed Milk(1 bowl)<br>
                                    Mixed Nuts(25 grams)<br><br>
                                    12:00 PM Skimmed Milk Paneer(100 grams)<br><br>
                                    2:00 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    2:10 PM Dal(1 katori)Gajar Matar Sabzi(1 katori)<br>
                                    Roti (1 roti/chapati)<br><br>
                                    4:00 PM Cut Fruits(1 cup)Buttermilk(1 glass)<br><br>
                                    5:30 PM Tea with Less Sugar and Milk(1 teacup)<br><br>
                                    8:50 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    9:00 PM Dal(1 katori)Lauki Sabzi(1 katori)<br>
                                    Roti (1 roti/chapati) <br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 2:
                                </p> On the second day, eat a mixed vegetable stuffed roti with curd for breakfast.
                                For lunch, have half a katori of methi rice along with lentil curry.
                                End your day with sauteed vegetables and green chutney.
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass)<br><br>
                                    8:00 AM Curd(1.5 katori)Mixed Vegetable Stuffed Roti(2 piece)<br><br>
                                    12:00 PM Skimmed Milk Paneer(100 grams)<br><br>
                                    2:00 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    2:10 PM Lentil Curry(0.75 bowl)Methi Rice(0.5 katori)<br><br>
                                    4:00 PM Apple(0.5 small (2-3/4″ dia))Buttermilk(1 glass)<br><br>
                                    5:30 PM Coffee with Milk and Less Sugar(0.5 tea cup)<br><br>
                                    8:50 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    9:00 PM Sauteed Vegetables with Paneer(1 katori)Roti (1 roti/chapati)<br>

                                    Green Chutney(2 tablespoon)<br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 3:
                                </p> Breakfast on day 3 would include Multigrain Toast and Skim Milk Yogurt.
                                In the afternoon, have sauteed vegetables with paneer and some green chutney.
                                Half a katori of methi rice and some lentil curry to make sure you end the day on a
                                healthy note.
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass) <br><br>
                                    8:00 AM Skim Milk Yoghurt(1 cup (8 fl oz))Multigrain Toast(2 toast)<br><br>
                                    12:00 PM Skimmed Milk Paneer(100 grams)<br><br>
                                    2:00 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    2:10 PM Sauteed Vegetables with Paneer(1 katori)Roti (1 roti/chapati)<br>

                                    Green Chutney(2 tablespoon)<br><br>
                                    4:00 PM Banana(0.5 small (6″ to 6-7/8″ long))Buttermilk(1 glass)<br><br>
                                    5:30 PM Tea with Less Sugar and Milk(1 teacup)<br><br>
                                    8:50 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    9:00 PM Lentil Curry(0.75 bowl)Methi Rice(0.5 katori)<br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 4:
                                </p> Start Day 4 with a Fruit and Nuts Yogurt Smoothie and Egg Omelette
                                Follow that up with Moong Dal, Bhindi Sabzi, and roti.
                                Complete the day’s food intake with steamed rice and palak chole.
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass) <br><br>
                                    8:00 AM Fruit and Nuts Yogurt Smoothie(0.75 glass) <br>

                                    Egg Omelette(1 serve(one egg))<br><br>
                                    12:00 PM Skimmed Milk Paneer(100 grams)<br><br>
                                    2:00 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    2:10 PM Green Gram Whole Dal Cooked(1 katori)Bhindi sabzi(1 katori)<br>

                                    Roti (1 roti/chapati)<br><br>
                                    4:00 PM Orange(1 fruit (2-5/8″ dia))Buttermilk(1 glass)<br><br>
                                    5:30 PM Coffee with Milk and Less Sugar(0.5 tea cup)<br><br>
                                    8:50 PM Mixed Vegetable Salad(1 katori)<br><br>
                                    9:00 PM Palak Chole(1 bowl)Steamed Rice(0.5 katori)<br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 5:
                                </p> Have a glass of skimmed milk and peas poha for breakfast on the fifth day.
                                Eat a missi roti with low fat paneer curry in the afternoon.
                                End the day with roti, curd and aloo baingan tamatar ki sabzi.
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass)
                                    <br><br> 8:00 AM Skimmed Milk(1 glass)Peas Poha(1.5 katori)
                                    <br><br>12:00 PM Skimmed Milk Paneer(100 grams)
                                    <br><br> 2:00 PM Mixed Vegetable Salad(1 katori)
                                    <br><br> 2:10 PM Low Fat Paneer Curry(1.5 katori)Missi Roti(1 roti)
                                    <br><br> 4:00 PM Papaya(1 cup 1″ pieces)Buttermilk(1 glass)
                                    <br><br> 5:30 PM Tea with Less Sugar and Milk(1 teacup)
                                    <br><br> 8:50 PM Mixed Vegetable Salad(1 katori)
                                    <br><br> 9:00 PM Curd(1.5 katori)Aloo Baingan Tamatar Ki Sabzi(1 katori)
                                    <br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 6:
                                </p> On Day 6, have idli with sambar for breakfast
                                For lunch, roti with curd and aloo baingan tamatar ki sabzi
                                To end Day 6, eat green gram with roti and bhindi sabzi
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass)
                                    <br><br> 8:00 AM Mixed Sambar(1 bowl)Idli(2 idli)
                                    <br><br>12:00 PM Skimmed Milk Paneer(100 grams)
                                    <br><br>2:00 PM Mixed Vegetable Salad(1 katori)
                                    <br><br>2:10 PM Curd(1.5 katori)Aloo Baingan Tamatar Ki Sabzi(1 katori)

                                    Roti (1 roti/chapati)
                                    <br><br>4:00 PM Cut Fruits(1 cup)Buttermilk(1 glass)
                                    <br><br>5:30 PM Coffee with Milk and Less Sugar(0.5 tea cup)
                                    <br><br> 8:50 PM Mixed Vegetable Salad(1 katori)
                                    <br><br> 9:00 PM Green Gram Whole Dal Cooked(1 katori)Bhindi sabzi(1 katori)

                                    Roti (1 roti/chapati)<br><br>
                                </p>
                                <hr>
                                <p class="h5">
                                    Day 7:
                                </p> On the seventh day, start with besan chilla and green garlic chutney.
                                Have steamed rice and palak chole for lunch.
                                End the week on a healthy note with low fat paneer curry and missi roti.
                                </p>
                                <hr>
                                <p class="h5">Diet Chart</p> <br><br>
                                <p>
                                    6:30 AM Cucumber Detox Water(1 glass)
                                    <br><br>8:00 AM Besan Chilla(2 cheela)Green Garlic Chutney(3 tablespoon)
                                    <br><br>12:00 PM Skimmed Milk Paneer(100 grams)
                                    <br><br>2:00 PM Mixed Vegetable Salad(1 katori)
                                    <br><br> 2:10 PM Palak Chole(1 bowl)Steamed Rice(0.5 katori)
                                    <br><br> 4:00 PM Apple(0.5 small (2-3/4″ dia))Buttermilk(1 glass)
                                    <br><br> 5:30 PM Tea with Less Sugar and Milk(1 teacup)
                                    <br><br>8:50 PM Mixed Vegetable Salad(1 katori)
                                    <br><br> 9:00 PM Low Fat Paneer Curry(1 katori)Missi Roti(1 roti)<br><br>
                                </p>
                            </div><!-- /.blog-post -->
                        </div><!-- /.blog-main -->

            

                    </div><!-- /.row -->

                </main><!-- /.container -->

                <footer class="blog-footer">
                    <p>
                        <a href="#">Back to top</a>
                    </p>
                </footer>

                <!-- Bootstrap core JavaScript
                        ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                <script src="../../assets/js/vendor/popper.min.js"></script>
                <script src="../../dist/js/bootstrap.min.js"></script>
                <script src="../../assets/js/vendor/holder.min.js"></script>
            </div>
            
        </div>
        <script>
            var bmi = "0.002197133585722012";
            bmi = parseFloat(bmi, 10);
            bmi = bmi.toFixed(2);
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function goToNewPage()
        {
            var url = document.getElementById('list').value;
            if(url != 'none') {
                window.location = url;
            }
        }
    </script>
    </div>
</body>

</html>