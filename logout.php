<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.html');
endif;
?>
<!DOCTYPE html>
<html>
<body>
    <div style="width:250px;margin:auto;height:50px;margin-top:30px">

    <?php
     include('connection.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=login.html">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!...</span>';

    ?>
    </div>

</body>
</html>
          