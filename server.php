<?php
session_start();

// initializing variables
$username="";
$phone="";
$email="";
$password1="";
$password2="";
$answer="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'seventhsense');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $answer=mysqli_real_escape_string($db, $_POST['answer']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
if (empty($password2)) { array_push($errors, "Password confirmation is required"); }    
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($answer)) { array_push($errors, "Please select a security question and answer"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE username='$username' OR email='$email' OR phone='$phone' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
      if ($user['phone'] === $phone) {
      array_push($errors, "Phone number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password1;//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (username,phone, email, password, answer) 
  			  VALUES('$username','$phone', '$email', '$password','$answer')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['phone'] = $phone;
      $_SESSION['wallet']=0;
  	header('location: userhome.php');
  }
}

//login

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	     $_SESSION['username'] = $username;
         $_SESSION['success'] = "You are now logged in";
  	     header('location: userhome.php');
        
        
        $query = "SELECT * FROM signup WHERE username='$username'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $_SESSION['email']=$row["email"];
        $_SESSION['phone']=$row["phone"];
        $_SESSION['wallet']=$row["wallet"];

  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//pwd
//session_start();
if (isset($_POST['for_pwd'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $answer = mysqli_real_escape_string($db, $_POST['answer']);

    if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($answer)) {
  	array_push($errors, "Answer is required");
  }
    
    if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM signup WHERE username='$username' AND answer='$answer'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
        
        $_SESSION['username'] = $username;    
        header('location: reset.php');
    }
        else {
  		array_push($errors, "Wrong username-answer combination");
  	}
    }
}

//reset

//session_start();
if (isset($_POST['reset_pass'])) {
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    
    if (empty($password1)) { array_push($errors, "Password is required"); }
    if (empty($password2)) { array_push($errors, "Password confirmation is required"); }

    if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }
    if (count($errors) == 0) {
  	$password = $password1;//encrypt the password before saving in the database
    $username=$_SESSION['username'];
  	$query1 = "UPDATE signup SET password='$password' WHERE username='$username'";
  	mysqli_query($db, $query1);
  	
  	  	header('location: confirm.html');
        //session_unset();
  
}
}

//questions

if (isset($_POST['ans_sub'])) {
    $answer=array();
    //$aflag=array();
    $answer[0] = mysqli_real_escape_string($db, $_POST['questions1']);
    $answer[1] = mysqli_real_escape_string($db, $_POST['questions2']);
    $answer[2] = mysqli_real_escape_string($db, $_POST['questions3']);
    $answer[3] = mysqli_real_escape_string($db, $_POST['questions4']);
    $answer[4] = mysqli_real_escape_string($db, $_POST['questions5']);
    
    
    $total=0;
    for($i=0;$i<5;$i++)
    {
       $query = "SELECT * FROM course1q WHERE qno='$i' AND qans='$answer[$i]'"; 
        $results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
        //aflag[$i]=1;
        $total++;
    }
        
   //else
    //aflag[i]=0;
        
    }
    $_SESSION['total'] = $total;
    header('location: result.php');
    }
    

//buy


if (isset($_POST['c1'])) {
    $username=$_SESSION['username'];
    
    $query = "SELECT * FROM course1 WHERE username='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 0) {
        $query = "SELECT * FROM buy WHERE course='course1'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $course=$row["course"];
        $price=$row["price"];
        $query="SELECT * from signup where username='$username'";
        $results1=mysqli_query($db, $query);
        $row1=mysqli_fetch_assoc($results1);
        $wamount=$row1["wallet"];
        if($wamount>=$price){
            $query = "INSERT INTO course1 (username) VALUES ('$username')";
            mysqli_query($db, $query);
            $wamount=$wamount-$price;
            $_SESSION['wallet']=$wamount;
            $query = "UPDATE signup SET wallet='$wamount' WHERE username='$username'";
            mysqli_query($db, $query);
            echo '<script type="text/javascript">alert("Success! Course bought!");</script>';
                        
            
        }
        else{
    
        
      echo '<script type="text/javascript">alert("Insufficient balance in the wallet!");</script>';       

        }
    }
    else
    {        
        echo '<script type="text/javascript">alert("Course already bought!");</script>';       
    }
        
    }

if (isset($_POST['c2'])) {
    $username=$_SESSION['username'];
    
    $query = "SELECT * FROM course2 WHERE username='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 0) {
        $query = "SELECT * FROM buy WHERE course='course2'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $course=$row["course"];
        $price=$row["price"];
        $query="SELECT * from signup where username='$username'";
        $results1=mysqli_query($db, $query);
        $row1=mysqli_fetch_assoc($results1);
        $wamount=$row1["wallet"];
        if($wamount>=$price){
            $query = "INSERT INTO course2 (username) VALUES ('$username')";
            mysqli_query($db, $query);
            $wamount=$wamount-$price;
            $_SESSION['wallet']=$wamount;
            $query = "UPDATE signup SET wallet='$wamount' WHERE username='$username'";
            mysqli_query($db, $query);
             echo '<script type="text/javascript">alert("Success! Course bought!");</script>';
                        
        }
        else{
            echo '<script type="text/javascript">alert("Insufficient balance in the wallet!");</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Course already bought!");</script>'; 
    }
        
    }if (isset($_POST['c3'])) {
    $username=$_SESSION['username'];
    
    $query = "SELECT * FROM course3 WHERE username='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 0) {
        $query = "SELECT * FROM buy WHERE course='course3'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $course=$row["course"];
        $price=$row["price"];
        $query="SELECT * from signup where username='$username'";
        $results1=mysqli_query($db, $query);
        $row1=mysqli_fetch_assoc($results1);
        $wamount=$row1["wallet"];
        if($wamount>=$price){
            $query = "INSERT INTO course3 (username) VALUES ('$username')";
            mysqli_query($db, $query);
            $wamount=$wamount-$price;
            $_SESSION['wallet']=$wamount;
            $query = "UPDATE signup SET wallet='$wamount' WHERE username='$username'";
            mysqli_query($db, $query);
            echo '<script type="text/javascript">alert("Success! Course bought!");</script>';
                        

        }
        else{
            echo '<script type="text/javascript">alert("Insufficient balance in the wallet!");</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Course already bought!");</script>'; 
    }
        
    }if (isset($_POST['c4'])) {
    $username=$_SESSION['username'];
    
    $query = "SELECT * FROM course4 WHERE username='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 0) {
        $query = "SELECT * FROM buy WHERE course='course4'";
        $results = mysqli_query($db, $query);
        $row=mysqli_fetch_assoc($results);
        $course=$row["course"];
        $price=$row["price"];
        $query="SELECT * from signup where username='$username'";
        $results1=mysqli_query($db, $query);
        $row1=mysqli_fetch_assoc($results1);
        $wamount=$row1["wallet"];
        if($wamount>=$price){
            $query = "INSERT INTO course4 (username) VALUES ('$username')";
            mysqli_query($db, $query);
            $wamount=$wamount-$price;
            $_SESSION['wallet']=$wamount;
            $query = "UPDATE signup SET wallet='$wamount' WHERE username='$username'";
            mysqli_query($db, $query);
            echo '<script type="text/javascript">alert("Success! Course bought!");</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Insufficient balance in the wallet!");</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Course already bought!");</script>'; 
    }
        
    }


//wallet

if (isset($_POST['sub_wallet'])) {
    $wallet = mysqli_real_escape_string($db, $_POST['wallet']);
    $username=$_SESSION['username'];
    $wallet1=(int)$wallet;
        
    
    $query="SELECT * from signup where username='$username'";
    $results1=mysqli_query($db, $query);
    $row1=mysqli_fetch_assoc($results1);
    $wamount=$row1["wallet"];
    $wallet2=$wallet1+$wamount;
    
    
    $query = "UPDATE signup SET wallet='$wallet2' WHERE username='$username'";
    mysqli_query($db, $query);
    $_SESSION['wallet']=$wallet2;
    
    
    echo '<script type="text/javascript">alert("Added Rs '.$wallet1.' wallet successfully!");</script>'; 
    
    
    
    
}
    


    




    
    



    
        

?>