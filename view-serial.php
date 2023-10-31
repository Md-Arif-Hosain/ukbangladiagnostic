<?php  include('common/connection.php'); 
 ?>


<!DOCTYPE html>
<link rel="icon" href="logo/logo1-r.png" type="image">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View page</title>
  <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->

  <style>
  .profile .col-6 {
    text-align: center;
    background-color: #1b5895cc;
    color: white;
    margin: 0px 20%;
    padding: 40px 0px;
    line-height: 26px;
}
  </style>
</head>
<body>  
<!-- Header and Topbar link -->
<?php include('topbar.php'); ?>
<?php include('header.php'); ?>

<?php
    
// Veiw Query 
$data=[];
 //MSG Success
 if(isset($_GET['id']) && !empty ($_GET['id']) =='success'){
    $id= $_GET['id'];
 

//Select Tabale 
 $sql= "SELECT * FROM patientserial where id=$id";
 $result = $conn->query($sql);
 "$result->num_rows";

 if($result->num_rows==1){
    $data= $result->fetch_object();
 }

}
 ?>
    
     <div class="profile">
        <div class="col-12">
            <div class="img">
            <div class="col-6">
            <h1>Doctors Work List View</h1><br>
              <img src="img/logo4.png" alt="" srcset="">
            <h2>ID: <?php echo "$data->id"?></h2>
            <h2>Name: <?php echo "$data->name"?></h2>
            <h2>phone: <?php echo "$data->phone" ?></h2>
            <h2>date: <?php echo "$data->date" ?></h2>
            <h2>Testname: <?php echo "$data->testname" ?></h2>
            <h2>Subject:<?php echo "$data->subject" ?></h2>
           </div>
            </div>
        </div>
     </div>
             <!-- Footer Page Link -->
<?php include_once 'footer.php';?>


</body>
</html>