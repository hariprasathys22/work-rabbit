<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
     
      $uname =$_POST['uname'];
      $email =$_POST['email'];
     
      $pas1 =$_POST['pas1'];
      $pas2 =$_POST['pas2'];
      
      if(!empty($email) && !empty($pas1))
      {
          $query = "SELECT * FROM register WHERE email = '$email' limit 1";
          $result = mysqli_query($con, $query);  
          if($result)
          {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pas1']=== $pas1)
                {
                    $_SESSION['email'] = $user_data['email'];
                    header("Location:homelogin.html");
                    die;
                }
            }
          }
          echo "<script>alert('mail id or password is wrong')</script>";
          
        }else{
        echo "please enter some valid information!";
      }

}


?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>E-mail</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pas1" required>
          <span></span>
          <label>Password</label>
        </div>
       <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register</a>
        </div>
      </form>
    </div>
  </body>
</html>
