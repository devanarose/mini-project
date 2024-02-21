<?php
include 'customer_header.php';
?>

<br>
    <h1 align="center">YOUR BOOKING DETAILS</h1> <br>
    <p></p>


<br>
<center>
   
    <table class="table" style="width: 1200px;">
        <tr>
        	<!-- <th>Customer name</th> -->
        	<th>Room Type</th>
        	<th>Price of Room</th>
            <th>No of Rooms</th>
            <th>CheckIn</th>
            <th>CheckOut Within</th>
            <th>Date Of Pay</th>
            <th>Bill</th>	
           
        </tr>

        <?php 
           $q1="SELECT *, CONCAT (tbl_category.cname, ' ',tbl_subcategory.sc_name) AS roomtype FROM tbl_bookingchild INNER JOIN tbl_bookingmaster USING(bp_id) INNER JOIN tbl_room_management USING(room_id) INNER JOIN tbl_subcategory USING(sc_id)INNER JOIN tbl_category USING(c_id) INNER JOIN tbl_customer USING(cus_id) inner join tbl_payment USING(bp_id) WHERE tbl_bookingmaster.status='Booked' and cus_id=$cid";
             $res1=select($q1);  
                foreach ($res1 as $row) { ?>

                    <tr>

                       
                        <!-- <td><?php echo $row['cusname']; ?></td> -->
                         <td><?php echo $row['roomtype']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                           <td><?php echo $row['nor']; ?></td>
                           <td><?php echo $row['checkin']; ?></td>
                           <td><?php echo $row['nod']; ?><?php echo " Days" ?></td>
                            <td><?php echo $row['date_pay'] ?></td> 
                       <td colspan="2"><a style="width: 100px" class="btn btn-outline-info" href="bill.php?&mid=<?php echo $row['bp_id'] ?>">Print Bill</td>
  
                        </tr>
                    
                           
            
                    
            <?php   
            }
         ?>
          
         
    </table>
</center>

<?php 
    include 'footer.php';

 ?>

 <style type="text/css">
     .dd{
        text-decoration: none;
        border-top: none !important;
        width: 900px;

     }
     td{
        padding-top: 20px;
     }
     th{
        padding-top: 20px;
     }
 </style>

 