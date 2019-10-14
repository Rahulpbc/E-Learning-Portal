<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    
    <style>
 .imgcontainer{
  width:50%;
  }


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
    border: 3px;
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
    
</head>
<body>
   
    <div class="jumbotron" style="background-color:white; padding:0%; min-height:1px;">
  <div class="container-fluid text-right">
      <a href="userhome.php" ><img src="seventh.png" style="float:left;" height="60" width="330"></a>
    <p style="color:#1e88e5 font_size:16px;"><?php echo "Hi ".$_SESSION['username']; ?> | <a href="home.html"style="color:#1E88E5; font-size:16px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></p>
    
  </div>
</div>
<hr>
    <center><h1 style="color: #1E88E5;">Buy Courses</h1></center><br>
 <form method="post" action="buy.php">
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr style="color: #1E88E5;">
          <th><center><h3>Courses</h3></center></th>
          <th><center><h3>Price(In Rupees)</h3></center></th>
          <th><center><h3>Buy</h3></center></th>
      </tr>
    </thead>
    <tbody>
      <tr style="color: #1E88E5;">
          <td><center><h3><br>Course 1</h3></center></td>          
          <?php
            $query = "SELECT * FROM buy WHERE course='course1'";
            $results = mysqli_query($db, $query);
            $row=mysqli_fetch_assoc($results);
            $price=$row["price"];
          ?>        
          <td><center><h3><br><?php echo $price; ?> </h3></center></td>
          <td style="color: white"><center><h3><button type="submit" class="btn1" name="c1" value="course1">Buy</button></h3></center></td>
      </tr>
    </tbody>
      <tr style="color: #1E88E5;">
          <td><center><h3><br>Course 2</h3></center></td>
          <?php
            $query = "SELECT * FROM buy WHERE course='course2'";
            $results = mysqli_query($db, $query);
            $row=mysqli_fetch_assoc($results);
            $price=$row["price"];
          ?>        
          <td><center><h3><br><?php echo $price; ?> </h3></center></td>
          <td style="color: white"><center><h3><button type="submit" class="btn2" name="c2" value="course2">Buy</button></h3></center></td>
      </tr>
      <tr style="color: #1E88E5;">
          <td><center><h3><br>Course 3</h3></center></td>
          <?php
            $query = "SELECT * FROM buy WHERE course='course3'";
            $results = mysqli_query($db, $query);
            $row=mysqli_fetch_assoc($results);
            $price=$row["price"];
          ?>        
          <td><center><h3><br><?php echo $price; ?> </h3></center></td>
          <td style="color: white"><center><h3><button type="submit" class="btn3" name= "c3" value="course3">Buy</button></h3></center></td>
      </tr>
      <tr style="color: #1E88E5;">
          <td><center><h3><br>Course 4</h3></center></td>
          <?php
            $query = "SELECT * FROM buy WHERE course='course4'";
            $results = mysqli_query($db, $query);
            $row=mysqli_fetch_assoc($results);
            $price=$row["price"];
          ?>        
          <td><center><h3><br><?php echo $price; ?> </h3></center></td>
          <td style="color: white"><center><h3><button type="submit" class="btn4" name="c4" value="course4">Buy</button></h3></center></td>
      </tr>
  </table>
  </div>
     

    
     
<br>
     </form>
    <center> <a href="userhome.php"><button type="button" class="btn btn-default" style="background-color:#1E88E5; color: white"><h2>Back</h2></button></a></center>
    
</body>
</html>
