 <?php 
include 'customer_header.php';
 $cid=$_SESSION['customer_ID'];
 extract($_GET);
 if (isset($_POST['room'])) {
    extract($_POST);
    // extract($_GET);

     echo$s="INSERT INTO tbl_bookingmaster VALUES(null,'$cid','$total','pending')";
    $id=insert($s);
    echo$s1="INSERT INTO tbl_bookingchild VALUES(null,'$bp_id','$room_id','$qty','$price')";
     
 insert($s1);
    // alert('registered successfully');
    redirect('bookingcart.php');
}
if (isset($_GET['rid'])) {
    extract($_GET);
     $r="select * from tbl_room_management inner join tbl_subcategory using (sc_id) inner join tbl_category using (c_id) where room_id=$rid";
    $rv=select($r);
}
 ?>
  <script type="text/javascript">
            function TextOnTextChange()
            {
                var x =document.getElementById("p_amount").value;
                var y =document.getElementById("p_qnty").value;
                document.getElementById("t_amount").value = x * y;
            }
        
        </script> 

  <!-- main-slider -->
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class=" owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <font size="6" color="">

        <form method="post" enctype="multipart/form-data" >
        <h1 align="center" style="color: #fff">BOOKING </h1>
    <table align="center" class="dd" style="color: #fff">
<br>   

        <tr>
            <th> Room name</th>

            <td><input type="text" class="ree" disabled="" name="roomname" value="<?php echo $rv[0]['cname'] ?> <?php echo $rv[0]['sc_name'] ?> "></td>
        </tr>
           <th>Price</th>
            <td><input type="text" readonly="" id="p_amount" name="price" value="<?php echo $rv[0]['price'] ?>" class="form-control ree1" style="opacity: 0.7; font-size: 10px"></td> 
                <tr>
        

            <th>Quantity</th>
            <td><input type="text" name="qty" id="p_qnty" onchange="TextOnTextChange()" class="form-control" style="opacity: 0.7; font-size: 10px"></td> 
                
                    </tr>
           <tr>
               <th>Total</th>
               <td><input type="text" disabled="" id="t_amount" name="total" class="form-control" style="opacity: 0.7; font-size: 10px"></td>

           </tr>
            <td colspan="2"><center><input type="submit" name="room" value="ADD" class="btn btn-success"></center></td>
            
        </tr>
    
    </table>
</font>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
         
            
         </div>
     </div>
 </section>
 

<?php 
include 'footer.php';
 ?>

<style type="text/css">
    .ree{
        color: white;
    }
    .ree1{
        color: red;
    }
</style>