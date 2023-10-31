<?php  include('common/connection.php'); 
error_reporting(0); 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Appointment</title>
  <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
  <style>
    .form form input{
    width: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    background-color:white;
    color:black;
    margin-top:10px;
      }
      .form form select{
    width: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    background-color:white;
    color:black;
    margin-top:10px;
      }
      .form {
    background-color: #354F8E;
    overflow: hidden;
    border-radius: 5px;
}
.form form  h2 {
    width: 50%;
    padding: 12px 20px;
    background-color: #203364;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 20px;
    color: white;
}
   .form form [type=submit]:hover {
    background-color: aqua;
    color: black; 
  }
  .form form {
    margin-left: 399px;
}
      .form form  [type=submit]{
        background-color: #203364;
        color: white;
      }
      .form form  button{
        background-color: #203364;
        width: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top:10px;
      }
      .form form  button a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    margin-left: 6px;
}
    .form form button:hover{
       background-color: aqua;
       color: black; 
      }
      .form form button:hover a{
       background-color: aqua;
       color: black; 
      }
      .form form a{
      margin-left:190px;
      font-size:25px;
     } 
     .form form  textarea#subject {
    width: 48%;
    border-radius: 21px;
    padding: 11px;
    background: white;
}
  .form form [type=submit]{
    margin-bottom: 10px;
  }
  .form h3 {
    color: #FFFFFF;
}
  </style>
</head>
<body>
    <!-- Topbar Page Link -->
    <?php include_once 'topbar.php';?>

    <!-- Header Page Link -->
  <?php include_once 'header.php';?>
  
<div class="form">
<div class="container">  
<form method="POST" action="add-test.php" enctype="multipart/form-data"> 

<!-- PHP Code For Insart Data for Database -->
<?php 

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['date'])){
        
       $roles_id= $_POST ['roles_id'];
       $name= $_POST ['name'];
       $phone= $_POST ['phone'];
       $testname= $_POST ['testname'];
       $date= $_POST ['date'];
       $subject= $_POST ['subject'];
       $password = md5($_POST['password']??"12345");

       // User Tabale
       $user_data = "INSERT INTO users(roles_id,name,phone,password) VALUES(3,'$name','$phone','$password' )";
       if( $conn -> query( $user_data ) === TRUE ) {
           $usersid = $conn -> insert_id;
        
        // Insert Data into Table
         $sql="INSERT INTO patientserial (roles_id, name, phone, testname, date, subject,password) VALUES
         (3,'$name','$phone', '$testname', '$date', '$subject','$password')";

if($conn->query($sql) === TRUE){
       echo "Submit data successfully";
  }
  else{
    echo ( "Data Insert Error!" . $conn -> error);
  }  
}
}
?>

<legend><h2>Booking Form</h2></legend><br>

 <label for="name"><h3>Patient Name:</h3></label>
  <input type="text" name="name" placeholder="Enter Your Name">
  <br><br>
  <label for="phone"><h3>Phone Number:</h3></label>
   <input type="number" name="phone" placeholder="Enter your Phone number"><br>

   <label for="testname"><h3>Test Name:</h3></label>
  <select type="text" name="testname">
    <option value="volvo">Select Here</option>
    <option value="Cardiology">Cardiology</option>
    <option value="Neurology">Neurology</option>
    <option value="Diagnostics">Diagnostics</option>
    <option value="Dental">Dental</option>
    <option value="Orthopedics">Orthopedics</option>
    <option value="ICU Department">ICU Department</option>
    <option value="Emergency">Emergency</option>
    <option value="Laboratory Medicine">Laboratory Medicine</option>
  </select>

   <label for="date"><h3>Date:</h3></label>
   <input type="date" name="date" placeholder="Enter your Date"><br>
   <label for="subject"><h3>Subject:</h3></label>
  <textarea id="subject" name="subject" placeholder="Write your Subject..." style="height:77px"></textarea>
    <br>

    <label for="password"><h3>Password:</h3></label>
   <input type="password" name="password" placeholder="Enter Your Password"><br>

  <input type="submit" name="submit" value="submit"><br>
  <button> <a href="serial-list.php">Visit-Serial-list</a> </button>
 
  <!-- <a href="login.php">Login now</a> -->
</form>
</div>
</div> 

<!-- Header Page Link -->
<?php include_once 'footer.php';?>
</body>
</html>