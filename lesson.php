<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learn</title>
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
          background-color: #1E88E5;
          border: 1px solid red;
          border-bottom-color: transparent;
       }
      
      #abc:hover{background-color: #187bd1;}
   
  </style>
</head>
<body>

<div class="jumbotron" style="background-color:white; padding:0%; min-height:1px;">
  <div class="container-fluid text-right">
      <a href="userhome.php" ><img src="seventh.png" style="float:left;" height="60" width="330"></a>
    <p style="color:#1e88e5 font_size:16px;"><?php echo "Hi ".$_SESSION['username']; ?> | <a href="home.html"style="color:#1E88E5; font-size:16px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></p>
    
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
	<ul class="nav nav-tabs nav-justified " style="background-color:#1e88e5; ">
    <li class="nav-item active">
        <a class="nav-link active" style="color:white;" data-toggle="tab" href="#panel1" role="tab"><h3>LESSONS</h3></a>
    </li>
	</ul>
  

<div class="tab-content card">
    
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <br>
        <div class="container">
  <div class="row-fluid">
    <div class="col-sm-3">
        <?php
        $username=$_SESSION['username'];
        $query="SELECT * FROM course1 WHERE username='$username'";
        $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) { ?>
        
         <h3><a href="numbers_lesson.html">Course 1</a></h3>
        
        <?php
        }
        else
        { ?>
        
        <a href="#" data-toggle="modal" data-target="#myModal"><h3>Course 1</h3></a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buy The Course</h4>
        </div>
        <div class="modal-body">
          <p>Click the button below to buy the course.</p>
        </div>
        <div class="modal-footer">
          <a href="buy.php" class="btn btn-info" role="button" style="background-color:#1e88e5; color:white;">Buy Now</a>
        </div>
      </div>
      
    </div>
  </div>
        
        <?php } ?>
        
      
	  <b>HCF LCM</b>
	  <br>
	  <b>Ratio and propotion</b>
	  <br>
	  <b>Divisibility</b>
    </div>
    <div class="col-sm-3">
        
        <?php
        $username=$_SESSION['username'];
        $query="SELECT * FROM course2 WHERE username='$username'";
        $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) { ?>
        
         <h3><a href="log_lesson.html">Course 2</a></h3>
        
        <?php
        }
        else
        { ?>
        
        <a href="#" data-toggle="modal" data-target="#myModal"><h3>Course 2</h3></a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buy The Course</h4>
        </div>
        <div class="modal-body">
          <p>Click the button below to buy the course.</p>
        </div>
        <div class="modal-footer">
          <a href="buy.php" class="btn btn-info" role="button" style="background-color:#1e88e5; color:white;">Buy Now</a>
        </div>
      </div>
      
    </div>
  </div>
        
        <?php } ?>
        
        
      <b>Logarithms</b>
	  <br>
	  <b>Profit loss</b>
    </div>
    <div class="col-sm-3">
      <?php
        $username=$_SESSION['username'];
        $query="SELECT * FROM course3 WHERE username='$username'";
        $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) { ?>
        
         <h3><a href="graphs.html">Course 3</a></h3>
        
        <?php
        }
        else
        { ?>
        
        <a href="#" data-toggle="modal" data-target="#myModal"><h3>Course 3</h3></a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buy The Course</h4>
        </div>
        <div class="modal-body">
          <p>Click the button below to buy the course.</p>
        </div>
        <div class="modal-footer">
          <a href="buy.php" class="btn btn-info" role="button" style="background-color:#1e88e5; color:white;">Buy Now</a>
        </div>
      </div>
      
    </div>
  </div>
        
        <?php } ?>      
     <b>Tables</b>
	 <br>
	 <b>Line graph</b>
	 <br>
	 <b>Bar graph</b>
	 <br>
	 <b>Multi graphs</b>
	  </div>
	 <div class="col-sm-3">
     <?php
        $username=$_SESSION['username'];
        $query="SELECT * FROM course4 WHERE username='$username'";
        $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) { ?>
        
         <h3><a href="analytical.html">Course 4</a></h3>
        
        <?php
        }
        else
        { ?>
        
        <a href="#" data-toggle="modal" data-target="#myModal"><h3>Course 4</h3></a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buy The Course</h4>
        </div>
        <div class="modal-body">
          <p>Click the button below to buy the course.</p>
        </div>
        <div class="modal-footer">
          <a href="buy.php" class="btn btn-info" role="button" style="background-color:#1e88e5; color:white;">Buy Now</a>
        </div>
      </div>
      
    </div>
  </div>
        
        <?php } ?>  
      <b>Direction sense</b>
	  <br>
	  <b>Analytical reasoning</b>
	  <br>
	  <b>Visual reasoning</b>
	  <br>
	  <b>Blood reasoning</b>
	  </div>

    </div>
  </div>
</div>
  </div>
</body>
</html>