 <?php 
include 'customer_header.php';
 $cid=$_SESSION['customer_ID'];
 extract($_GET);


 if (isset($_POST['room'])) {
    extract($_POST);

    $st=$stock;
    $q=$qty;

    if ($q > $stock) {
       alert('Sorry we do not have the quantity you require');
       redirect('demo.php');
  }else{



     $q=" select * from tbl_bookingmaster where cus_id='$cid' and status='pending'";
    $p=select($q);
    if (sizeof($p)>0) 
    {
        $cmm_id=$p[0]['bp_id'];

        $t="SELECT * FROM `tbl_bookingmaster` INNER JOIN `tbl_bookingchild` USING(`bp_id`) where room_id='$rid'";
        $o=select($t);
        if (sizeof($o)>0) 
        {
            $w1="update tbl_bookingmaster set totalprice=totalprice+'$total' where bp_id='$cmm_id' ";
            update($w1);
            $w2="update tbl_bookingchild set nor=nor+'$qty',price=price+'$total' where room_id='$rid'";
            update($w2);

        }else{

            $w1="update tbl_bookingmaster set totalprice=totalprice+'$total' where bp_id='$cmm_id' ";
            update($w1);
            $s1="INSERT INTO tbl_bookingchild VALUES(null,'$cmm_id','$rid','$qty','$total','$datee','$day')";
            insert($s1);
        }
    }else{
     $s="INSERT INTO tbl_bookingmaster VALUES(null,'$cid','$total','pending')";
     $id=insert($s);
     $s1="INSERT INTO tbl_bookingchild VALUES(null,'$id','$rid','$qty','$total','$datee','$day')";
     insert($s1);
    // alert('registered successfully');
}
}
return redirect('bookingcart.php');
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
                var z =document.getElementById("p_day").value;
                document.getElementById("t_amount").value = x * y * z;
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
            <td><input type="text" readonly="" id="p_amount" name="price" value="<?php echo $rv[0]['price'] ?>" class="form-control ree1" style="opacity: 0.9; font-size: 10px"></td> 
                <tr>
        
<tr>
            <th>No Of Rooms</th>
            <td><input type="text" name="qty" maxlength="1" required="" id="p_qnty" onchange="TextOnTextChange()" class="form-control" style="opacity: 0.9; font-size: 10px"></td> 
                
                    </tr>

                    <tr>
                        
            <th>CheckIn Date</th>
            <input type="hidden" id="todate" value="<?php echo date('d-m-y'); ?>">
            <td><input type="date" name="datee" id="chdate" required=""
             class="form-control" style="opacity: 0.9; font-size: 10px"></td> 
        </tr>
        <tr>
            <th>No Of Days</th>
            <td><input type="text" required="" name="day" min="0" maxlength="1"  id="p_day" class="form-control" onchange="TextOnTextChange()"  style="opacity: 0.9; font-size: 10px"></td> 
                
                    </tr>
           <tr>
               <th>Total</th>
               <td><input type="text" readonly="" id="t_amount" name="total" class="form-control" style="opacity: 0.9; font-size: 10px"></td>

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

         <script>
//getting todays date
            var today = new Date();
            var dd = today.getDate();
           
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            
            if (dd < 10) {
               dd = '0' + dd;
            }
            
            if (mm < 10) {
               mm = '0' + mm;
            } 
                
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("chdate").setAttribute("min", today);
            console.log("today:"+today);         
   

   //geting date after 60 days
            var dt = new Date();
            dt.setDate(dt.getDate() + 60);


            var dd1 = dt.getDate();
            console.log(dd1);
            var mm1 = dt.getMonth() + 1; //January is 0!
            var yyyy1 = dt.getFullYear();
            
            if (dd1 < 10) {
               dd1 = '0' + dd1;
            }
            
            if (mm1 < 10) {
               mm1 = '0' + mm1;
            } 
                
            futuredate = yyyy1 + '-' + mm1 + '-' + dd1;
            document.getElementById("chdate").setAttribute("max", futuredate);
            console.log("future date:"+futuredate); 

</script>
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