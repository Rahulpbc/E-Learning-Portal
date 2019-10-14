<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <style>
 .imgcontainer{
  width:30%;
  }
  h1{
    text-align:center;
	}
  input[type=text]{
    width: 40%;
    padding: 12px 20px;
    margin: 4px 4px;
    display: inline-block;
    box-sizing: boder-box;
}
button {
    background-color: #1E88E5;
    color: white;
    padding: 14px 20px;
    margin: 4px 4px;
    border: none;
    cursor: pointer;
    width: 10%;
}
  p{
   text-align:center;
   }
.container {
    padding: 50px;
	text-align:center;
}
button:hover {
    opacity: 0.8;
}
.nav {
  padding:1%;
  background-color:white;
  min-height:5px;
  
}
.navbar{
 background-color:white;
 }
 .navbar-default {
    background-color: white;
    border-color:white;
     
}
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.html"><img src="seventh.png" style="float:left;" height="60" width="330"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php" style="color:white; background-color:#1E88E5;" ><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Login</a></li>
      <li><a href="signup.php" style="color:#1E88E5;"><span class="glyphicon glyphicon-user" style="color:#1E88E5;"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 
    
 <div class="container">
<h1>Security Question</h1>
<form method="post" action="pwd.php" bordercolor="#fff">
  	<?php include('errors.php'); ?>
     <label for "name"></label>
	<input type="text" placeholder="Enter Username" name="username" required>
<p>Please select your secret question and enter an answer</p>
<select style="width:40%;"> 
    <option value="0">first school name?</option> 
    <option value="1">your vehicle number?</option> 
    <option value="2">what was your childhood nick name?</option> 
</select> 
<br>
<br>
<input style="background-color:white;" 
       type="text" 
       name='answer'
       value="" 
	   placeholder="Enter your answer"
       size="60" 
       maxlength="60" /> 
<br />
<br>
<button type="submit" style="color:white" name='for_pwd'>Submit</button>
	</div>
	</form>
</body>
</html>