<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];
    $gender=$_POST["gender"];
    $position=$_POST["position"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $password=$_POST["password"];
 
    $conn = mysqli_connect("localhost","root","","company");
    $query="INSERT INTO admin VALUES('','$name','$age','$contact','$email','$country','$gender','$position','$password')";
    mysqli_query($conn,$query);
    echo
    "
    <script>alert('Data Inserted Sucessfully'); </script>
    ";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Details</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        input[type="date"] {
        width: 200px;
        font-size: 16px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }
         select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
}
input[type="radio"] {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid #3498db;
  position: relative;
  margin-right: 10px;
}

button[type="clear"] {
  background-color: #f44336;
  color: #fff;
}
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
      <legend>Admin Details</legend>
      <form action="" method="post" >
      <div class="bottom-text" style="margin-left:600px;">
                     <a href="emp.php" style="background:red:">Employee</a>
        </div>
        <table>
            <tr>
                <td> Name :</td>
                 <td>
                 <input type="text" name="name"required value="">
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                 <td>
                 <input type="text" name="age"required value="">     
                </td>
            </tr>
            <tr>
                <td>Mobile No:</td>
                 <td>
                    <input type="text" name="contact"required value="">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                 <td>
                    <input type="text" name="email"required value="">
                </td>
            </tr>
            
            <tr>
                <td>Country:</td>
                 <td>
                 <select class=""name="country" required>
                       <option value=""select hidden>Select Country</option>
                        <option value="USA">USA</option>
                        <option value="India">India</option>
                        <option value="UK">UK</option>
                        <option value="Pakistan">Pakistan</option>

                </select>
                </td>
            </tr>
            <tr>
                <td>Gender :</td>
                 <td>
                 <input type="radio" name="gender" value="Male" required>Male
                 <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Position:</td>
                 <td>
                 <select class=""name="position" required>
                    <option value=""select hidden>Select Position</option>
                    <option value="MD">MD</option>
                    <option value="CEO">CEO</option>
                    <option value="Director">Director</option>
                    <option value="CTO">CTO</option>
                    <option value="CMO">CMO</option>
                    <option value="CFO">CFO</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                 <td>
                    <input type="password" name="password"required value="">
                </td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                 <td>
                    <input type="password" name="password1"required value="">
                </td>
            </tr>
            
            <tr>
                <td>
                    <button type="submit"name="submit">Submit</button>
                </td>
                <td><button type="clear" name="clear">Clear</button>
            </tr>
        </table>
        <br>
        <div class="bottom-text" style="margin-left:400px;">
                    <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>

      </form>
    </fieldset>
  </body>
</html>