<?php include 'connection.php';
 $cid=$_SESSION['customer_ID'];
extract($_GET);

$qi=" SELECT * FROM tbl_customer where cus_id=$cid";
$qii=select($qi);

$q4=" SELECT *,CONCAT(`cus_hname`,', ',`cus_district`,', ',`cus_pin`) AS address FROM `tbl_customer` where cus_id=$cid";
            $q5=select($q4);


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
  <img src="assets/images/logo.png" alt="Your logo" style="height:100px; margin-top: 5px;" /> </a>
  <html>
<head>
  <title>Nikko</title>
</head>
</html>
<body onload="printDiv()">
  <div id="div_print" >


    

<div id=div_print align="right"><h6 style="margin-right: 1em;padding:2em;font-family: Centaur;">Date : <?php echo date("d-m-y") ?></h6></div>
<center>
<font style="font-family:Bookman Old Style">
  <h1 style="color: #ff5200; margin-top: -50px;"><b> Hotel Nikko Saigon<br></b></h1>
<p>
              near streetscape, 
              Rental & Paid rooms business, 
              Panampilly, 
               <br>
              <strong>Phone:</strong> +91 1234567890<br> 
              <strong>Email:</strong> hotelnikkosaigon@gmail.com<br> 
            </p> 

<h1 style="padding-top: 30px;font-family:Bookman Old Style;color:black;text-align: center;  ">Invoice</h1><br>
<table style="margin-left: -600px; color: black">
<tr>
  <th>Name: </th>
 <td> <?php echo $qii[0]['cus_fname']; ?></td><br>
</tr>
<tr>
<th>Address: </th>
<td><?php echo $q5[0]['address']; ?></td><br>
</tr>
<tr>
<th>Phone Number: </th>
<td> <?php echo $qii[0]['cus_phno']; ?></td><br>
</tr>
</table>
<!-- <h1>View Sales</h1> -->
<table border=1 class="table table-secondary table-striped " style="width: 1000px;color: black;background:white;opacity: 0.85;">
	 <tr align="left">
        <th>Slno</th>
    <th>Room Type</th>
    <th>Payment Date</th>
        <th>CheckIn Date</th>
        <th>Number Of Rooms</th>
        <th>Number Of Days</th>
        <th>Price</th>
        <th>Total</th>



        <!-- <th><a class="btn bg-white btn-light mx-1px text-95" href="" onclick="printDiv()" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                </a></th> -->
               <!--  <th>Status</th> -->
        
      </tr>
      <?php 

     $q="SELECT *, CONCAT (tbl_category.cname, ' ',tbl_subcategory.sc_name) AS  roomtype FROM tbl_bookingchild INNER JOIN tbl_bookingmaster USING(bp_id) INNER JOIN tbl_room_management USING(room_id) INNER JOIN tbl_subcategory USING(sc_id)INNER JOIN tbl_category USING(c_id) INNER JOIN tbl_customer USING(cus_id) inner join tbl_payment USING(bp_id) WHERE bp_id='$mid' and tbl_bookingmaster.status='Booked' and cus_id='$cid' ";
     $res=select($q);
     $slno=1;

    foreach ($res as $row) {?>
        <tr>
        <td><?php echo $slno++; ?></td>
      <td><?php echo $row['roomtype']?></td>
    


    <td><?php echo $row['date_pay']?></td>
  <!-- 
    <td><?php //echo $row['qty']?></td> -->

    
    <td><?php echo $row['checkin']?></td>
    <td><?php echo $row['nor']?></td>
    <td><?php echo $row['nod']?></td>
    <td><?php echo ($row['price'])?></td> 
    <td><?php echo number_format($row['price'] * $row['nor'] * $row['nod'])?></td>  
      </tr>
     <?php
       }
		 ?>
     <tr><td colspan="7"><h1>SubTotal</h1></td>
    <td ><?php echo $row['totalprice']?></td>
    </tr>
	</table>
  </font>
</center>
 <p style="padding-left: 1000px;color: black;"><b>Authorised Signature</b></p>
    <img style="padding-left: 1000px;" src="assets/images/nikkosig.png" height="100">
<!-- <img style="padding-left: 40px;" src="C:\wamp64\www\miniproject\image\nikkosig.png"> -->
</font>