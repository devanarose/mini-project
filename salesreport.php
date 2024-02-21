<?php include 'admin_header.php';
 
extract($_GET);



 ?>
 <link rel="stylesheet" href="assets/css/style-starter.css">
<center>
  <h1>Room Report </h1> <br><br>
  <form method="post">
    <table border="5" style="color: black;width: 100px">

  
       <td style="color: white"><input type="date" name="daily" > daily </td>
        <td  style="color: white"> <input type="month" name="monthly"> monthly</td>

     <tr>
       <td align="center" colspan="2"><input type="submit" name="sale" class="btn btn-success" value="submit"></td>
      </tr>
    

      </tr>
    </table>
  </form>
</center>


 




<center>
  <h1 style="color: white">View Report</h1>
  <h2><a class="btn btn-success" href="temp.php">print</a></h2> <br><br>
  <table class="table" style="width: 1200px;color: black">
    <tr>
        <th style="background-color: #e37618">Customer name</th>
          <th style="background-color: #e37618">Room Type</th>
          <th style="background-color: #e37618">Price of Room</th>
          <th style="background-color: #e37618">No of Rooms</th>
          <th style="background-color: #e37618">CheckIn Date</th>
          <th style="background-color: #e37618">CheckOut Within</th>
          <th style="background-color: #e37618">Date Of Pay</th>
          <th style="background-color: #e37618">Payment Status</th>              
    </tr>
    <?php 
         if (isset($_POST['sale'])) {
           extract($_POST);
           // echo $monthly;
           if ($daily!="") {
             // "hi";
           $q="SELECT *, CONCAT (tbl_customer.cus_fname, ' ',tbl_customer.cus_lname) AS cusname, CONCAT (tbl_category.cname, ' ',tbl_subcategory.sc_name) AS roomtype FROM tbl_bookingchild INNER JOIN tbl_bookingmaster USING(bp_id) INNER JOIN tbl_room_management USING(room_id) INNER JOIN tbl_subcategory USING(sc_id)INNER JOIN tbl_category USING(c_id) INNER JOIN tbl_customer USING(cus_id) inner join tbl_payment USING(bp_id) where checkin='$daily' and tbl_bookingmaster.status='Booked' ";
           }
            else if ($monthly!="") {

            
             $q="SELECT *, CONCAT (tbl_customer.cus_fname, ' ',tbl_customer.cus_lname) AS cusname, CONCAT (tbl_category.cname, ' ',tbl_subcategory.sc_name) AS roomtype FROM tbl_bookingchild INNER JOIN tbl_bookingmaster USING(bp_id) INNER JOIN tbl_room_management USING(room_id) INNER JOIN tbl_subcategory USING(sc_id)INNER JOIN tbl_category USING(c_id) INNER JOIN tbl_customer USING(cus_id) inner join tbl_payment USING(bp_id)  where checkin like '$monthly%' and tbl_bookingmaster.status='Booked' ";

             }
           }
             else{
            $q="SELECT *, CONCAT (tbl_customer.cus_fname, ' ',tbl_customer.cus_lname) AS cusname, CONCAT (tbl_category.cname, ' ',tbl_subcategory.sc_name) AS roomtype FROM tbl_bookingchild INNER JOIN tbl_bookingmaster USING(bp_id) INNER JOIN tbl_room_management USING(room_id) INNER JOIN tbl_subcategory USING(sc_id)INNER JOIN tbl_category USING(c_id) INNER JOIN tbl_customer USING(cus_id) inner join tbl_payment USING(bp_id) where tbl_bookingmaster.status='Booked' ";
            }

                $res=select($q);
                $_SESSION['res']=$res;
                $r=$_SESSION['res'];

       $slno=1;
       foreach ($res as $row) {
        ?>
    <tr>
       <td><?php echo $row['cusname']; ?></td>
                         <td><?php echo $row['roomtype']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                           <td><?php echo $row['nor']; ?></td>
                           <td><?php echo $row['checkin']; ?></td>
                            <td><?php echo $row['nod'] ?><?php echo " Days" ?></td>
                            <td><?php echo $row['date_pay']; ?></td>
                          <td><?php echo $row['p_status']; ?></td>
      
        
    </tr>
  
     <?php
       }


     ?>
  </table>
</center>
<?php include 'footer.php' ?>