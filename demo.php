<?php 
include 'customer_header.php';
include 'stock_functions.php';

$dt = $_GET['adate'];

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
		width: 90%;
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
    <h1 align="center">Book Rooms</h1> <br><br>
    <p></p>

	 <?php 
            $q="SELECT * FROM tbl_room_management INNER JOIN tbl_subcategory USING(`sc_id`)  INNER JOIN `tbl_category` USING (`c_id`) ";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) {

                 ?>

<div class="product-container">
	<div class="product-item">
		<img  src="<?php echo $row['image'] ?>" height="200" width="400"alt=""/> 
						
		<div class="ii">
	
			 <h4>Category name : <?php echo $row['cname']; ?><span> </span></h4>
                    <?php // echo getNoOfRooms($row['room_id']) ?>                         
			 <p>Subcategory name: <?php echo $row['sc_name']; ?></p>
                                        <p>Price: <?php echo $row['price']; ?></p> 

										<?php if(getNoOfRoomsav($row['room_id'],$dt) > 0 ) { ?>
											<p>Rooms Left: <?php echo $no = getNoOfRoomsav($row['room_id'],$dt); ?></p>
											<br><br><br><br>
											<div style="display: flex;">
											<h4 style="padding-left: 2px"><a href="bookdescription.php?&rid=<?php echo $row['room_id'] ?>">Room Details</a></h4>
											<h4 style="padding-left: 100px"><a href="viewroom.php?&rid=<?php echo $row['room_id'] ?>&stock=<?php echo $row['qty'] ?>">Booking</a></h4>
											</div>
										<?php } else { ?>
											<p>No rooms left</p>
											<br><br><br><br>
										<?php } ?>

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
         
            <?php   }
            }
         ?>
<?php
include 'footer.php'
?>