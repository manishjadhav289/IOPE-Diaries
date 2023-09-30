<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>IOPE Diaries Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <?php
  require("connection.php");
?>
    <div class="container">
      <form method="POST" action="#">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter USerID" required name="AdminName">
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" required name="AdminPassword">
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="Signin" value="Continue">
        </div>
      </form>
    </div>

    <?php 
    if(isset($_POST['Signin']))
    {
        $query = "SELECT * FROM `adminlogin` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
        $result=mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            header("location: event new/events.php");
        }
        else
        {
            echo "<script>
            alert('Incorrect Password');
            </script>";
        }
    }
    ?>

  </body>
</html>