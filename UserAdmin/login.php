<?php

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

   
    $conn = mysqli_connect("localhost","root","","company");
    $sql="SELECT * FROM employee where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);
    if($count==1){
      echo
      "
      <script>alert('Login Sucessfully'); </script>
      ";
     header("location:homeA.php");
    }
    else{
      echo '<script>
      window.location.href="login.php";
      alert("Login Failed. Invalid email or password");
      
      </script>';
    }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Employee</title>
    <link rel="stylesheet" href="style.css" />
    <style>  
  input[type="password"]{
    height:36px;
    width:60%;
    border-radius: 30px;
    margin: 10px;
    padding-left: 20px;
    border: none;
    background: rgba(223, 221, 221, 0.822);
  }
    </style>
  </head>
  <body>
    <fieldset>
      <legend>Login Employee</legend>
      <form action="" method="post" >
      <div class="bottom-text" style="margin-left:600px;">
                     <a href="loginA.php" style="background:red:">Admin</a>
        </div>
        <table>
            <tr>
                <td> Email :</td>
                 <td>
                 <input type="text" name="email"required value="">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                 <td>
                    <input type="password" name="password"required value="">
                </td>
            </tr>
        </table>
        <button type="submit"name="submit">Log in</button>
        <div class="bottom-text">
                    <p>Don't have an account? <a href="emp.php">Sign up</a></p>
        </div>

      </form>
    </fieldset>
  </body>
</html>