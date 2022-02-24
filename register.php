<?php
header('Content-Type: text/html; charset=UTF-8');
$db = mysqli_connect ("localhost","dertop", "assassin125", "anuardb");
//registration
if (isset($_POST['submit'])) {
$username = $_POST['username'];                              
$password = $_POST['password'];
$r_password = $_POST['r_password'];
$age = $_POST['age'];
  //cheacink is password mach with confirmed password
  if ($password==$r_password)
      {
      //adding data to database
      $result2 = mysqli_query ($db, "INSERT INTO user(username, password, age) VALUES ('$username','$password' , '$age')"); 
    if ($result2=='TRUE')
               {                     
    echo "<script>alert(\"You have successfully registered! Now you can go to the site.\");</script>";
          header('Location: enter.php'); 
               }
    else {
      echo  "<script>alert(\"Error! This username is already chosen.\");</script>";
           }
         }

  else { 
      echo  "<script>alert(\"Error! Passwords do not match!\");</script>";
  }
}
?>
<html>
  <head>
    <title>Be Your Own Teacher</title>
    <link rel="icon" type="image/x-icon" href="faviconS.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
       html {
    height: 100%; /* Высота веб-страницы */
    background: #000 url(Gifka.gif) 
          no-repeat;
background-size: 100%;  /* Путь к графическому файлу с фоном */
    color: #fff; /* Белый цвет текста */
   }
      body {
        display: flex;
        justify-content: center;
        height: 100%;
      }
      body, div, h1, form, input, p { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        color: #666;
      }
      hr {
        color: #a9a9a9;
        opacity: 0.3;
      }
      h1 {
        padding: 10px 0;
        font-size: 32px;
        font-weight: 300;
        text-align: center;
      }
      p {
        font-size: 12px;
      }
      .main-block {
        max-width: 340px; 
        min-height: auto; 
        padding: 10px 0;
        margin: auto;
        border-radius: 5px; 
        border: solid 1px #ccc;
        box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
        background: #ebebeb; 
      }
      .select select {
        width: 100%;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        margin: 5px auto;
        height: 36px;
        color: #666;
        padding-left: 10px; 
        border-radius: 0 5px 5px 0;
        border: solid 1px #cbc9c9; 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        background: #fff; 
      }
      form {
        margin: 0 30px;
      }
      .age {
        width: 100%;
        margin: 5px auto;
        height: 36px;
        color: #666;
        padding-left: 10px; 
        border-radius: 0 5px 5px 0;
        border: solid 1px #cbc9c9; 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        background: #fff; 
      }
      input[type=text], input[type=password] {
        width: 100%;
        height: 36px;
        margin: 5px auto;
        padding-left: 10px; 
        border-radius: 0 5px 5px 0;
        border: solid 1px #cbc9c9; 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        background: #fff; 
      }
        .btn-block {
        margin-top: 10px;
        text-align: center;
      }
      button {
        width: 100%;
        padding: 10px 0;
        margin: 10px auto;
        border-radius: 5px; 
        border: none;
        background: #1c87c9; 
        font-size: 14px;
        font-weight: 600;
        color: #fff;
      }
      button:hover {
        background: #26a9e0;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <form method="post" action="register.php">  
        <h1>Sign up</h1>
        <hr>
        <input type="text" name="username" id="name" placeholder="Username" required/>
        <input type="password" name="password" id="name" placeholder="Password" required/> 
        <input type="password" name="r_password" id="name" placeholder="Confirm Password" required/> 
        <input class="age" type="number" id="quantity" name="age" min="1" max="99" placeholder="Your Age">
        <div class="btn-block">       
          <button name="submit" type="submit">Submit</button>     
        </div>
        <hr>
        <p>Already have an account?  <a href="enter.php">Sign in</a></p>
      </form>
    </div>
  </body>
</html>  