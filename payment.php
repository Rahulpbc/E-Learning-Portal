<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=email], input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #1e88e5;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #55acee;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<h2>Add to wallet</h2>
   
  
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="payment.php">
      
        <div class="row">
          <div class="col-50"><br>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="ABC" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="email@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="#123, 4th street, Bangalore" required>
            
            <!--pattern="[0-9]{5}"-->
              <label for="wallet">Amount</label>
                <input type="text" id="wallet" name="wallet"  placeholder="In Indian rupees" required>

            <div class="row">
              <div class="col-50">
                <input type="submit" name="sub_wallet" value="Add to wallet" class="btn" required>
                </div>
              </div>
                <div class="row">
              <div class="col-50">
<a href="userhome.php"><input type="button" value="Exit" class="btn" required></a>              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name" required>
            <label for="ccnum">Credit/Debit Card number</label>
            <input type="text" id="ccnum" name="cardnumber" minlength="16" maxlength="16" placeholder="1111-2222-3333-4444" required>
                  
  <div class="form-group form-group-lg">
  <label for="month">Exp Month</label>
  <select class="form-control" id="month">
    <option>January</option>
    <option>February</option>
    <option>March</option>
    <option>April</option>
      <option>May</option>
    <option>June</option>
    <option>July</option>
    <option>August</option>
      <option>September</option>
    <option>October</option>
    <option>November</option>
    <option>December</option>
  </select>
</div>
            <div class="row">
              <div class="col-50">
                <div class="form-group form-group-lg">
  <label for="year">Exp Year</label>
  <select class="form-control" id="year">
    <option>2018</option>
       <option>2019</option>
       <option>2020</option>
       <option>2021</option>
       <option>2022</option>
       <option>2023</option>
       <option>2024</option>
       <option>2025</option>
       <option>2026</option>
       <option>2027</option>
       <option>2028</option>
       <option>2029</option>
       <option>2030</option>
       <option>2031</option>
       <option>2032</option>
  </select>
</div>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" minlength="3" maxlength="3" id="cvv" name="cvv" pattern="[0-9]{3}" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        
          
      </form>
        
    </div>
  </div>
  
</div>

</body>
</html>