<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>navi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
       .imgcontainer{
  width:50%;
  }
  body {font-family:sans-serif;
  background-color:white;}
  .nav {
  padding:1%;
  background-color:white;
  min-height:5px;
  
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
  body {font-family: sans-serif;}

input[type=text], input[type=email], input[type=password] {
    width: 30%;
    padding: 15px;
    margin: 10px 0 10px 0;
    display: inline-block;
    background: white;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
button {
    background-color:#1e88e5;
    color: white;
    padding: 14px 20px;
	margin:8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}
      
   

button:hover {
    opacity:1;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #1e88e5;
}

.cancelbtn, .signupbtn {
  float: center-right;
  width: 10%;
  
}
.container-fluid{
	text-align:center;
}
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;

    
}

  </style>
</head>
<body>
    
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.html"><img src="seventh.png" style="float:left;" height="60" width="330"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php" style="color:#1E88E5;"><span class="glyphicon glyphicon-log-in" style="color:#1E88E5;"></span> Login</a></li>
        <li class="active"><a href="signup.php" style="color:white; background-color:#1E88E5;" ><span class="glyphicon glyphicon-user" style="color:white;"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
    <br><br><br><br><br><br>
    
    
<div class="container-fluid"
    <b><h2>Create an account</h2></b>
    <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
    <br>

	<label for="username"></label>
	<input type="text" placeholder="Enter Username" name="username" required value="<?php echo $username; ?>">
	<br>
    
		<label for="phone"></label>
	<input type="text" placeholder="Enter phone number" pattern="(6|7|8|9)\d{9}" name="phone" required value="<?php echo $phone; ?>">
	<br>
    <label for="email"></label>
    <input type="email" placeholder="Enter Email" id="email_field" name="email" required value="<?php echo $email; ?>">
    <br>
	
    <label for="password1"></label>
    <input type="password" placeholder="Enter Password" minlength="8" name="password1" required value="<?php echo $password1; ?>">
    <br>
    <label for="password2"></label>
    <input type="password" placeholder="Confirm Password" name="password2" required value="<?php echo $password2; ?>">
    <br>
	<label for="answer"> 
    Please select a secret question and enter an answer. (required) 
</label> 

<br /> 

<select> 
    <option value="0">first school name?</option> 
    <option value="1">your vehicle number?</option> 
    <option value="2">what was your childhood nick name?</option> 
</select> 
<br>

<input style="background-color:white" 
       name="answer"
       type="text"  
       value="<?php echo $answer; ?>" 
       size="60" 
       maxlength="60" /> 

    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <a href="home.html"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    </div>
 
</form>
 </div>
</body>
</html>