
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
     
      if(!empty($uname) && !empty($email) && !empty($pas1) && !empty($pas2))
      {
        if($pas1 == $pas2){
          $query = "SELECT * FROM register WHERE email= '$email' limit 1";
          $result = mysqli_query($con, $query);
          if(!$result->num_rows > 0){
        $query = "INSERT INTO register  (uname, email, pas1, pas2) values('$uname', '$email', '$pas1', '$pas2')";
          mysqli_query($con, $query);
         if($result)
         {
          echo "<script>alert('user registration sucess')</script>";
          header("Location: login.php");
            
             $uname = "";
             $email = "";
            
             $pas1 = "";
             $pas2 = "";
            
         }else{

          echo "<script>alert('user registration denied.. Try after 1 min')</script>";
          header("Location: login.php");
         }
        }else{
          echo "<script>alert('email already exists')</script>";
        }
         }else{
           echo "<script>alert('password is not matched')</script>";
         }
      } else{
        echo "please enter some valid information!";
      }

}


?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"  name="uname" required>
          <span></span>
          <label>Username</label>
        </div>
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
          <div class="txt_field">
            <input type="password" name="pas2" required>
            <span></span>
            <label>confirm password</label>
          </div>
        
        <a href="#"><input type="submit" value="Login"></a>
        <div class="signup_link">
          already member? <a href="login.php">login</a>
        </div>
      </form>
    </div>

  </body>
</html>
