<?php include('server.php') ?>
<!DOCTYPE html>    
    
<head>
  <title>Questions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color:#1E88E5;
      
    }
    
   
     .jumbotron {
      margin-bottom:0;
      background-color:white;
    }
   
   .nav-tabs > li.active > a,
        .nav-tabs > li.active > a:hover,
        .nav-tabs > li.active > a:focus {
          color: #555555;
          cursor: default;
          background-color: #0039e6;
          border: 1px solid red;
          border-bottom-color: transparent;
          } 
		  ul.list-group 
		  {list-style-type: disc;}
		  

   
   .btn {
   background-color:#1E88E5;
   }
   .pane12
  {
  margin-top:20px;
  }
  
  
 
  
    </style>
</head>
    
    
<body>
    
    
    <div class="jumbotron" style="background-color:white; padding:0%; min-height:1px;">
  <div class="container-fluid text-right">
 <a href="userhome.php" ><img src="seventh.png" style="float:left;" height="60" width="330"></a>
 
   <p><a href="home.html" style="color:#1E88E5; font-size:16px;"><br><span class="glyphicon glyphicon-log-out"></span> Logout</a></p>
    
  </div>
</div>
<hr>
    
    
        <form method="post" action="result.php" bordercolor="#fff">
    
        
            <center><h1 style="color: #1e88e5">TEST</h1></center>
            
         <div class="container">    
     <h2 style="color: #1e88e5">Question 1</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" name="questions1" id="option1" value="A">Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions1" id="option2" value="B">Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions1" id="option3" value="C">Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions1" id="option4" value="D">Option 4</h3>
    </label>
            </div> 

            
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 2</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" name="questions2" id="option1" value="A">Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" id="option2" value="B">Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" id="option3" value="C">Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions2" id="option4" value="D">Option 4</h3>
    </label>
            </div> 
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 3</h2>
       
  <label class="radio-inline">
      <h3><input type="radio" name="questions3" id="option1" value="A">Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" id="option2" value="B">Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" id="option3" value="C">Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions3" id="option4" value="D">Option 4</h3>
    </label>
            </div> 
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 4</h2>
      
  <label class="radio-inline">
      <h3><input type="radio" name="questions4" id="option1" value="A">Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions4" id="option2" value="B">Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions4" id="option3" value="C">Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions4" id="option4" value="D">Option 4</h3>
    </label>
            </div> 
            
            <br>
            <div class="container">   
     <h2 style="color: #1e88e5">Question 5</h2>
        
  <label class="radio-inline">
      <h3><input type="radio" name="questions5" id="option1" value="A">Option 1</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions5" id="option2" value="B">Option 2</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions5" id="option3" value="C">Option 3</h3>
    </label>
    <label class="radio-inline">
        <h3><input type="radio" name="questions5" id="option4" value="D">Option 4</h3>
    </label>
            </div> 
  
            
            <br>
            <br>
            <div class="row"><div class="col-sm-8"></div><div class="col-sm-4"><a href="result.php"> <button name="ans_sub" type="submit" class="btn btn-default"><h4 style="color:white">Submit</h4></button></a></div></div>
     </form>
        
        
        
        
    </body>
</html>