<?php include 'connection.php';
extract($_GET);

 // $r=$_SESSION['res'];

 ?>
<script> 
    function printDiv() { 
      var divContents = document.getElementById("div_print").innerHTML; 
      var a = window.open('', '', 'height=500, width=500'); 
      a.document.write(divContents); 
      a.document.close(); 
      a.print(); 
    } 
  </script> 
     <link rel="stylesheet" href="assets/css/style-starter.css">

<body onload="printDiv()">
  <div id="div_print" >
    <!-- <img src="images\logo.jpg" style="height: 50px; width: 150px"></img> -->

<center>
  <font style="font-family:Bookman Old Style">
  <h1 style="color: #ff5200;"><b>Hotel Nikko Saigon<b></h1>
<p>
        Nikko Saigon, 
        near streetscape
         Rental & Paid rooms business 
         Panampilly. <br><br>
              <strong>Phone:</strong> +911234567890<br> 
              <strong>Email:</strong> hotelnikkosaigon@mail.com<br> 
            </p> 
<h1 style="padding-top: 30px;font-size: 60px;">Customer Report</h1><br>`

<!-- <h1>View Sales</h1> -->
<table border=1 class="table table-secondary table-striped " style="width: 1000px;color: black;background:white;opacity: 0.85;">
  <tr align="left">
      <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>House Name</th>
        <th>District</th>
        <th>Pincode</th>
        <th>Phone</th>
        
    </tr>
    <?php 
    $q="select * from tbl_customer";
    $res=select($q);
       
      //$res=$r;
       $slno=1;
       foreach ($res as $row) {
      ?>
        
        
  <td><?php echo $slno++; ?></td>
        <td><?php echo $row['cus_fname'] ?></td>
        <td><?php echo $row['cus_lname'] ?></td>
        <td><?php echo $row['cus_hname'] ?></td>
        <td><?php echo $row['cus_district']?></td>
        <td><?php echo $row['cus_pin']?></td>
        <td><?php echo $row['cus_phno'] ?></td>
        
    </tr>
     <?php
       }


     ?>
  </table>
</center>