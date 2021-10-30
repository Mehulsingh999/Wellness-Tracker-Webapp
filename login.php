<?php session_start();

include('connection.php');

if(isset($_POST['signin']));
{
    $user_unsafe=$_POST['name'];
    $pass_unsafe=$_POST['password'];

    $name = mysqli_real_escape_string($con,$user_unsafe);
    $password = mysqli_real_escape_string($con,$pass_unsafe);

    $query=mysqli_query($con,"select * from registration where name='$name' and password='$password'")or die(mysqli_error($con));

    $row=mysqli_fetch_array($query);

         $name=$row['name'];
         $counter=mysqli_num_rows($query);
         $id=$row['id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid Username or Password!');
            document.location='login.html'</script>";
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['name']=$name;

            echo "<script type='text/javascript'>document.location='3.php'</script>";
         }

}

?>
          