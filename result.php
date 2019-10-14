<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>result</title>
  <style>
 .imgcontainer{
  width:50%;
  }
  body {font-family:sans-serif;
  background-color:blue;}
form {align:center;}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 4px 4px;
    display: inline-block;
    box-sizing: boder-box;
}
button {
    background-color: #1E88E5;
    padding: 14px 20px;
    margin: 4px 4px;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}
.container {
    padding: 50px;
	text-align:center;
	width:100%;
}
span.psw {
    padding-top: 8px;
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
  <script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/F973EF22-2F4E-3C4F-9EA7-3EAC9FBFEF26/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


  <div class="container-fluid">
    <div class="col-sm-4">
      <a href="home.html"><img src="seventh.png" style="float:left;" height="60" width="330"></a>
    </div>
      <div class="col-sm-6"></div>
      <div class="col-sm-2"><h3><a href="practice1.php"> Back</a></h3></div>
  </div>

    
    
  <br>
  <br>
    
    <div class="container">
  <h1><?php echo "Your score is ".$_SESSION['total']."/5"; ?></h1>
    </div>
    
    
    <center><h1 style="color: #1e88e5">TEST SOLUTIONS</h1></center>
            
         <div class="container">    
     <h2 style="color: #1e88e5">Question 1</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" disabled>Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" checked>Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 4</h3>
    </label>
            </div> 

            
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 2</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" name="questions2" disabled>Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" checked>Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" disabled>Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" disabled>Option 4</h3>
    </label>
            </div> 
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 3</h2>
       
  <label class="radio-inline">
      <h3><input type="radio" name="questions3" disabled>Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" disabled>Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" checked>Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" disabled>Option 4</h3>
    </label>
            </div> 
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 4</h2>
      
  <label class="radio-inline">
      <h3><input type="radio" disabled>Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" checked>Option 4</h3>
    </label>
            </div> 
            
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 5</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" checked>Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" disabled>Option 4</h3>
    </label>
            </div> 
    
  

</body>
</html>
