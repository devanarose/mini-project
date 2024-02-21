<?php include 'connection.php';
extract($_GET);
 $r=$_SESSION['res'];

 ?>
<img src="assets/images/logo.png" alt="Your logo" style="height:100px; margin-top: 9px; text-align: center;" /> </a>

<script> 
    function printDiv() { 
      var divContents = document.getElementById("div_print").innerHTML; 
      var a = window.open('', '', 'height=500, width=500'); 
      a.document.write(divContents); 
      a.document.close(); 
      a.print(); 
    } 
  </script> 


  <body onload="printDiv()">
  <div id="div_print" >
<center>

<link rel="stylesheet" href="assets/css/style-starter.css">
<div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          
        </div>
        <div class="col-xl-3 float-end">
       
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
   <!--          <p class="pt-0">Hotel Nikko Saigon</p> -->
          </div>
<p style="color: #e37618;font-size: 50px;"> <strong>HOTEL NIKKO SAIGON</strong></p>
        </div>
<br><br>
<p style="text-align: left;">Address: Nikko Saigon,<br>
 near streetscape,<br>
  Rental & Paid rooms business, <br>
Panampilly.<br><br>
phone:+91 1234567890</p>
       
        </div>
<br><br><br>
        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#e37618 ;" class="text-white">
              
              <tr>
  
                <th scope="col">#</th>
                <th scope="col">Customer name</th>
                <th scope="col">Room Type</th>
                <th scope="col">Price of Room</th>
                <th scope="col">No of Rooms</th>
                 <th scope="col">CheckIn Date</th>
                <th scope="col">CheckOut Within</th>
                <th scope="col">Date Of Pay</th>
                <th scope="col">Payment Status</th>
              </tr>
            </thead>

              <?php 

       
      $res=$r;
       $slno=1;
       foreach ($res as $row) {
      ?>
        
            <tbody>
              <tr>
                <th scope="row"><?php echo $slno++; ?></th>
                 <td><?php echo $row['cusname']; ?></td>
                         <td><?php echo $row['roomtype']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                           <td><?php echo $row['nor']; ?></td>
                           <td><?php echo $row['checkin']; ?></td>
                            <td><?php echo $row['nod'] ?><?php echo " Days" ?></td>
                            <td><?php echo $row['date_pay']; ?></td>
                          <td><?php echo $row['p_status']; ?></td>
              </tr>
              
            </tbody>

             <?php
       }


     ?>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
           

          </div>
          <div class="col-xl-3">
           
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
           
          </div>
          <div class="col-xl-2">
           
          </div>
        </div>

      </div>
    </div>
  </div>
</div></center></div></body>
</li></ul></div></div></div></div></div></center></div></body>