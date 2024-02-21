<?php include 'customer_header.php' ?>
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
		width: 85%;
		height: 400px;
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
		height: 100px
		object-fit:cover;
	}
	.product-details{
		
		 box-sizing: border-box;
    margin-left: 100px;
	}

</style>






    <br>
    <!-- <h1 align="center">Book Rooms</h1> <br><br> -->
    <p></p>

	 <?php 
            $q="SELECT * FROM tbl_room_management INNER JOIN tbl_subcategory USING(`sc_id`)  INNER JOIN `tbl_category` USING (`c_id`) where room_id=$rid";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) { ?>

<div class="product-container">
	<div class="product-item" style="height: 350px">
		<img  src="<?php echo $row['image'] ?>" height="270" width="350"alt=""/> 
						
		<div class="ii">
	
			 <h4>Category name : <?php echo $row['cname']; ?><span> </span></h4>
                                        <p>Subcategory name: <?php echo $row['sc_name']; ?></p>
                                        <p>Price: <?php echo $row['price']; ?></p> 
                                        <br>
                                        <h3>Description</h3>
                                        <p>Sleep peacefully in a separate bedroom with a king or two double room, single room, suite room or deluxe room The marble bathroom is decked with a soaking tub, plush robes and slippers. Our Daily Amenity Fee includes access to our fitness center and glass-enclosed swimming pool. Our suites have access to our Imperial Lounge which is open from 7am to 10am for breakfast and then 5pm to 7pm for a wine and cheese reception.
                                        except single room, all rooms can only accomodate minimum 2 to maximum 4 people respectively.</p>	

                                        <h4 style="padding-left: 300px"><a href="viewroom.php?&rid=<?php echo $row['room_id'] ?>">Booking</a></h4>
                                       

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