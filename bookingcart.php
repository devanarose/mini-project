 <?php 
 include 'customer_header.php';
 include 'stock_functions.php';
 $cid=$_SESSION['customer_ID'];
extract($_GET);


 $q1="SELECT * FROM `tbl_bookingmaster` INNER JOIN `tbl_bookingchild` USING(`bp_id`)  INNER JOIN `tbl_room_management` USING(`room_id`) WHERE `cus_id`='$cid' AND tbl_bookingmaster.status='Pending'";
$res1=select($q1);
 $qq="SELECT *,COUNT(`b_c_id`) AS cart_count,SUM(`price`) AS ttamount FROM `tbl_bookingmaster` INNER JOIN `tbl_bookingchild` USING(`bp_id`)  WHERE `cus_id`='$cid' AND tbl_bookingmaster.status='Pending'";
$rr=select($qq);

if(isset($_GET['remove_item'])){
    extract($_GET);
     $qu="UPDATE `tbl_bookingmaster` SET `totalprice`=`totalprice`-'$amount' WHERE `bp_id`='$cart_mid'";
    update($qu);
     $qd="DELETE FROM `tbl_bookingchild` WHERE `room_id`='$remove_item' AND `bp_id`='$cart_mid'";
    delete($qd);

     $g="select * from  tbl_bookingmaster where bp_id='$cart_mid' and totalprice='0'";
    $hg=select($g);
    if(sizeof($hg)>0)
    {
       $j="delete from tbl_bookingmaster where bp_id='$cart_mid'";
        delete($j);
        
    }


    alert("Successfully Removed");
    return redirect("bookingcart.php");

}
if (isset($_GET['rid'])) {
    extract($_GET);

	$sql = "SELECT * FROM `tbl_bookingmaster` INNER JOIN `tbl_bookingchild` USING(`bp_id`) INNER JOIN `tbl_room_management` USING(`room_id`) WHERE `cus_id`='$cid' AND tbl_bookingmaster.status='Pending'";
	$rooms = $con->query($sql)->fetch_all(MYSQLI_ASSOC);

	foreach($rooms as $room) {
		if(getNoOfRooms($room['room_id']) < (int)$room['nor'] ){
			alert("Not enough rooms!");
			return redirect("bookingcart.php");
		}
	}


    $qr="update tbl_bookingmaster set status='Booked' where bp_id='$rid' ";
    update($qr);

    $qw="INSERT INTO tbl_payment values(null,'$rid',curdate(),'Not Paid','0')";
    INSERT($qw);
    
	return redirect("viewbooking.php");
    
}


?>


<style>
	.ii {
		box-sizing: border-box;
		margin-left: 100px

	}
	body {
		height: 100%;
		width: 100vw;
		overflow-x: hidden;
	}
	.product-container {
		width: 80%;
		margin: 0 auto;

	}
	.product-item {
		width: 100%;
		padding: 20px;
		border-radius: 10px;
		font-family: arial;
		box-shadow: 0px 5px 10px 5px rgba(0,0,0,0.25);
		display: flex;
		height: 280px;
		margin-bottom: 20px;
	}
	.product-item img {
		margin-right: 20px;
		width: 300px;
		height: 100px;
		object-fit:cover;
	}
	.product-details{
		
		 box-sizing: border-box;
    margin-left: 100px;
	}

</style>






    <br>
    <h1 align="center">Booking Cart</h1> <br><br>
    <p></p>

	 <?php 
             $q="SELECT * FROM tbl_room_management INNER JOIN tbl_subcategory USING(`sc_id`)  INNER JOIN `tbl_category` USING (`c_id`) inner join tbl_bookingchild using(`room_id`) inner join tbl_bookingmaster using(`bp_id`) where cus_id='$cid' and tbl_bookingmaster.status='pending'";
            $res11=select($q);
            
                foreach ($res11 as $row) {
                 ?>

<div class="product-container">
	<div class="product-item">
		<img  src="<?php echo $row['image'] ?>" width="200" style="height:auto;object-fit:cover;" alt=""/> 
						
		<div class="ii">
	
			 <h4>Category name : <?php echo $row['cname']; ?><span> </span></h4>
                                        <p>Subcategory name: <?php echo $row['sc_name']; ?></p>
                                        <p>Price: <?php echo $row['price']; ?></p> 
                                        <p>No of Rooms: <?php echo $row['nor']; ?></p> 

                                        <br><br><br><br>

        <a type="button" href="?remove_item=<?php echo $row['room_id']; ?>&cart_mid=<?php echo $row['bp_id']; ?>&amount=<?php echo $row['price']; ?>"/>Remove</a>
      
      <!--  <td><?php echo $row['status'] ?></td> -->

        
                                        

		</div>


		<style type="text/css">
			
			.btn1{
				width: 100px;
				height: 30px;
				color: white
				
			}
		</style>
	</div>
	
</div>
         
            <?php  
             }
            

         ?>
         <div style="display: flex;">


<?php 

 if (sizeof($res11)>0) {

 	  

 	  	?>
 	<h3 style="padding-left: 150px" style="size: 20px">Total Price:<?php echo $res11[0]['totalprice']?></h3>
         <h4 style="padding-left: 500px"><a href="payment.php?&rid=<?php echo $row['room_id'] ?>&price=<?php echo $row['totalprice'] ?>&bp_id=<?php echo $row['bp_id'] ?>">Book Now</a></h4>

         <!--  <h4 style="padding-left: 40px"><a href="?&rid=<?php echo $row['bp_id'] ?>">Make Direct Payment</a></h4> -->
<?php  

}else{
	?>
<div style="width:100%;display:flex;justify-content:center;">
			<br><br>
            <h1 align="center" colspan="8" class="alert alert-danger" style="font-size: 25px; font-family: Times New Roman">Your Cart Is Empty....</h1>
</div>

<?php
}

 ?>

     	
         </div>
<?php 
include 'footer.php' ?>