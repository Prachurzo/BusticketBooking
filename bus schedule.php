<!DOCTYPE html>
<html>
<head>
  <title>Bus schedule</title>
<style>

table, th, td {
   border: 1px solid red;
   color: red;
   font-size: 20px;
}
th, td{
  padding: 15px;
}

td{
  text-align: center;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: 10px;
  height: 700px;
}

.top {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: black;
}

.input-field3
{
  font-size: 20px;
}
.input-field4 {
  width:75%;
  padding: 10px;
  background:#EEEAE9;
  outline: none;
  border: 1px transparent;  
}
.input-field5 {
  width:67%;
  padding: 10px;
  background:#EEEAE9;
  outline: none;
  border: 1px transparent;  
}

.tmp{
  background-color: lightgrey;
}
.tmp2{
  
  margin-left: 500px;
  margin-right: 500px;
  margin-top: -160px;
  text-align: left;
}
.tmp3{
  margin-left: 10px;
  margin-right: 1000px;
  text-align: left;
}
.tmp4{
  
  margin-left: 1000px;
  margin-top: -160px;
  text-align: left;
}
.tmp5{
  background-color: lightblue;
  margin-bottom: 10px;
}

.tmp6{
  
  text-align: center;
}

body {
  background-image: url('.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
  
</style>


</head>
<body>

<ul class="top">
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="bus reservationn.php">Bus Reservation</a></li>
  <li><a href="make payment.php">Verify Payment Method</a></li>
  <li><a href="cancel ticket.php">Cancel Ticket</a></li>
  <li><a href="bus schedule.php">Bus Schedule</a></li>
  <li><a href="make complain.php">Make Complain</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="about.php">About</a></li>
</ul><br><br>
<div class="row">
  <div class="column" style="background-color:powderblue;">

<?php

 // echo $from. " ". $to. " ". $date. " ". $type. "<br>";


  $conn = mysqli_connect('localhost', 'root', '', 'web project');
  if(!$conn)
  {
    echo "Connection Failed";
  }
  else
  {
    //echo "Connection success<br>";

    $q0 = "SELECT * FROM buses ORDER BY bus_Id ";
    $r0 = mysqli_query($conn, $q0);
    if(mysqli_num_rows($r0)==0)
    {
      echo "<br><br><h2 style='text-align: center; color: red;'>No available buses at this date</h2>";
    }
    else
    {
      echo "<br><h1 style='text-align: center; color: red;'>Available buses</h1><br>";
      ?>
        <table width="50%" class="center">
        <tr>
        <th>
          Coach ID
        </th>
        <th>
            Coach Type
        </th>
        <th>
          Departure Time
        </th>
        <th>From</th>
        <th>To</th>
      </tr>
          <?php
             while($row=mysqli_fetch_assoc($r0))
             {
              $id = $row["bus_Id"];
              $type = $row["type"];
              $time = $row["time"];
              $frm = $row["from_city"];
              $to = $row["to_city"];
              ?>
              <tr>
              <td><?php echo $id ?></td>
              <td><?php echo $type ?></td>
              <td><?php echo $time ?></td>
              <td><?php echo $frm ?></td>
              <td><?php echo $to ?></td>
              
            </tr>
              <?php
             }
          ?>
      </table>

      <?php
    }
  }

?>
</div>

<div class="column" style="background-color:#aaa;">
    <img src="bus3.jpg" alt="LOGO" width="700" height="700">
  </div>

</div>


<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><hr>



<div class="tmp">
<a style="text-align: center;">


<br><h2>Availabe Bus Routes</h2>

<div class="tmp3">
  Dhaka To Chittagong<br>
  Dhaka To Rajshahi<br>
  Dhaka To Khulna<br>
  Dhaka To Barishal<br>
  Dhaka To Mymensingh<br>
  Dhaka To Rangpur<br>
  Dhaka To Chuadanga<br>
  Dhaka To Kushtia<br>
  Dhaka To Comilla<br> 
</div>

<div class="tmp2">
  Chittagong To Dhaka<br>
  Rajshahi To Dhaka<br>
  Khulna To Dhaka<br>
  Barishal To Dhaka<br>
  Mymensingh To Dhaka<br>
  Rangpur To Dhaka<br>
  Chuadanga To Dhaka<br>
  Kushtia To Dhaka<br>
  Comilla To Dhaka<br> 
</div>

<div class="tmp4">
  Rajshahi To Chittagong<br>
  Barishal To Rajshahi<br>
  Comilla To Khulna<br>
  Kushtia To Barishal<br>
  Chuadanga To Mymensingh<br>
  Rajshahi To Rangpur<br>
  Chittagong To Chuadanga<br>
  Bhola To Kushtia<br>
  Sylhet To Comilla<br> 
</div>


</a>
<br><br>
</div>

<hr>

<div class="tmp5">
  <br>

  <div class="tmp6">
    Developed and Maintained by <br><br>
    Saifuzzaman Saif <br>
    Md Shariful Islam<br><br>
  </div>

</div>
<hr>

</body>
</html>
