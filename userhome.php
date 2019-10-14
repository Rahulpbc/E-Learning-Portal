<?php include('server.php') 

?>
<!DOCTYPE html> 

<html lang="en">
<head>
  
      <script type = "text/javascript" >
    history.pushState(null, null, 'userhome.php');
    window.addEventListener('popstate', function(event)
    {
        history.pushState(null, null, 'userhome.php');
        alert("Logout to go back!");
    });
</script>
    
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        
        #section2 ul li a:hover{background-color: #187bd1;}
        
        
        
.fa {
  padding: 3px;
  font-size: 30px;
  width: 35px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: white;
  color:#1E88E5;
}

.fa-twitter {
  background: white;
  color: #1E88E5;
}
.fa-instagram {
  background: white;
  color: #1E88E5;
}
  
    
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color:#1E88E5;
      
    }
     
  
    
   
     .jumbotron {
      margin-bottom:0;
      background-color:white;
    }
   
    
button {
    background-color: #1E88E5;
    padding: 14px 20px;
    margin: 4px 4px;
    border: 3px;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.9;
}
     

    

    #section1 {padding-top:50px;height:300px;color: #fff; background-color: #fff;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section3 {padding-top:50px;height:300px;color: #1E88E5; background-color: #fff;}
  #section4 {padding-top:50px;height:150px;color: #fff; background-color: #1E88E5;}
      
      body {
      position: relative; 
  }
        
      #abc:hover{background-color: #187bd1;}
  </style>
    
  
  
 
 
  
</head>
<body>

<div class="jumbotron" style="background-color:white; padding:0%; min-height:1px;">
  <div class="container-fluid text-right">
  <img src="seventh.png" style="float:left;" height="60" width="330">
   <p>Hi, <?php echo $_SESSION['username']; ?>  |  <a href="home.html" style="color:#1E88E5; font-size:16px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></p>
    
  </div>
</div>

<div class="navbar navbar-default navbar-static-top" style="background-color:#1E88E5;">
		<ul class="nav navbar-nav">
			<li  id="abc"><a href="userhome.php" style="color:white;"> <span class="glyphicon glyphicon-home"></span> User home</a></li>
            <li  id="abc"><a href="lesson.php" style="color:white;"> <span class="glyphicon glyphicon-book"></span> Learn</a></li>
            <li  id="abc"><a href="practice1.php" style="color:white;"> <span class="glyphicon glyphicon-book"></span> Practice</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
        <li id="abc"><a href="buy.php"style="color:white ;"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Courses</a></li>
      </ul>
	</div>
    
    <div id="section1" class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        
        <div class="col-sm-7">
            <div class="container">
            <div class="table-responsive">          
  <table class="table">
      <tr><i><h2 style="color: #1E88E5;">Name: <?php echo $_SESSION['username']; ?></h2></i></tr>
      <tr><i><h2 style="color: #1E88E5;">Email: <?php echo $_SESSION['email']; ?></h2></i></tr>
      <tr><i><h2 style="color: #1E88E5;">Phone: <?php echo $_SESSION['phone']; ?></h2></i></tr>
                </table>
            </div>
            </div>
        </div>
    <div class="col-sm-4">
        <div class="container">
            <h1 style="color: #1E88E5;">Wallet balance: Rs. <?php echo $_SESSION['wallet']; ?></h1>
            <h4 style="color: #1E88E5;">Add Money to your wallet<br>in  order to  buy  courses.</h4>
         
             <a href="payment.php"><button type="button" class="btn btn-default" style="background-color:#1E88E5; color: white"><h4>Add to wallet</h4></button></a><br>
             <a href="samplequestions.html"><button type="button" class="btn btn-default" style="background-color:#1E88E5; color: white"><h4>Sample Question Paper</h4></button></a>
           
        </div></div></div></div>
  <br>
<br>
    
    <div id="section2" class="container-fluid">
      
<div class="container" style="margin-top:10px">
    <div class="row">
        <div class="col-sm-12"><H2><CENTER>COURSES OFFERED</CENTER></H2></div>
    </div><br>
    <br>
  <div class="row" align="center">
      <div class="col-sm-4">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="course.html"><h4 style="color: white">IBPS</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">MATHEMATICS</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">BIOLOGY</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">CHEMISTRY</h4></a>
        </li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">PHYSICS</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">C/C++</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">GRE</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">TOEFL</h4></a>
        </li>
      </ul>
    </div>
      <div class="col-sm-4">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">JAVA</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">PYTHON</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">HTML</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="userhome.php"><h4 style="color: white">VISUAL BASIC</h4></a>
        </li>
          </ul>
    </div>
    
</div>
    </div>
    </div>


 
<div id="section3" class="container-fluid">
    <h1><center>About us</center></h1><br>
    <p style="font-size: 19px">E-LEARNING GURU is an application that is the brainchild of three budding engineering students from BNMIT- Rahul Niranjan S, PB Rahul Choudhary and Pradyumna G. This is an online learning and E-Commerce Portal designed to help students score better grades in their examinations. This initiative will prove very useful for students who wish to study greater than what is taught as their curricula. The application contains well designed and closely scrutinized content which is aimed at serving the student to the best possible extent. This is just an honest attempt in solving the problem of education in this country and our small step towards Digital India.</p>
</div>
<div id="section4" class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <p style="font-size: 18px;"><h3><span class="glyphicon glyphicon-earphone">  Phone: 91-8123982680 </span></p></h3>
    </div>
    <div class="col-sm-4"><center>
  <h3>© E-LEARNING GURU<br> BNMIT, BENGALURU</h3>
        </center>
    </div>
    <div class="col-sm-4" style="align-items: right"><center>
    <a href="userhome.php" class="fa fa-facebook"></a>
<a href="userhome.php" class="fa fa-twitter"></a>
<a href="userhome.php" class="fa fa-instagram"></a>
        </center>
</div>
    </div>
    
    
        
        
    

</body>
</html>