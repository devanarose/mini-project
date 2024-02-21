<?php 
    include 'customer_header.php';
    include 'stock_functions.php';

   $cid=$_SESSION['customer_ID'];
   extract($_GET);
                    

    $sql = "SELECT * FROM `tbl_bookingmaster` INNER JOIN `tbl_bookingchild` USING(`bp_id`) INNER JOIN `tbl_room_management` USING(`room_id`) WHERE `cus_id`='$cid' AND tbl_bookingmaster.status='Pending'";
    $rooms = $con->query($sql)->fetch_all(MYSQLI_ASSOC);

    foreach($rooms as $room) {
        if(getNoOfRooms($room['room_id']) < (int)$room['nor'] ){
            alert("Not enough rooms!");
            return redirect("bookingcart.php");
        }
    }

    if(isset($_POST['card'])){
        extract($_POST);
                    


     // $qc="INSERT INTO `tbl_card` VALUES (null,'$cid','$card_no','$card_name','$exp_date')";
     // $id=insert($qc);
       
    $q="INSERT INTO tbl_payment values(null,'$bp_id',curdate(),'pending','$id')";
        insert($q);

        $q="UPDATE tbl_bookingmaster set status='Booked' where cus_id=$cid";
        UPDATE($q);

        $q="UPDATE tbl_payment set p_status='PAID' where bp_id=$bp_id";
        UPDATE($q);
         alert('Payment successful');
         return redirect('viewbooking.php');
}

 ?>

<!-- main-slider -->
<!--  <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class=" owl-theme">
             <div class="item">
                 <li>
                  
                                                     <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg"> -->
                                    
        <br><br>
 
        <center>

    <h1 style="color: black"><b>PAYMENT</b></h1><br><br>

    <form method="post">
    <table align="center" class="dd" style="color: black" >

         <tr>
            <tr>
            <th>Amount</th>
            <td><input type="text" name="card_no" readonly="" value="<?php echo $price ?>" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Card Number</th>
            <td><select name="id">
                <option>Select</option>
                <?php 
               $q="select * from tbl_card where cus_id='$cid'";
               $res=select($q);
               foreach ($res as $key ) {?>
                    <option value="<?php echo $key['d_card_id'] ?>"><?php echo $key['card_no'] ?></option>
               <?php }
                 ?>
            </select></td>
            <td><a class="btn btn-success" href="card.php">Add Card</a></td>
        </tr>
       
        <tr>
            <tr>
            <th>CVV</th>
            <td><input type="password" name="cvv" maxlength="3" required="" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" name="card" value="Pay Now" class="btn btn-success"></center></td>
            <br><br>
        </tr>
    
    </table>
</font></form>

           <!--   <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Our new hotels will play a leading role in prompting the world peace.</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div> -->
             <!-- <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Most hotels train their people with the booklets. We take ours to the ballet.
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div> -->
         <!--     <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Good tourism will follow good hotels. Experience our luxury hotel rooms</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div> -->

 <!-- /main-slider -->
  </tr></table></form></center>  

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