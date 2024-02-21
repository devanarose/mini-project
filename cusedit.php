<?php 
	include 'customer_header.php';
     $cid=$_SESSION['customer_ID'];
     extract($_GET);


  $q="select * from tbl_customer where cus_id='$cid'";
  $res=select($q);



if (isset($_POST['update'])) {
    extract($_POST);

    $q="update tbl_customer set cus_fname='$fname',cus_lname='$lname',cus_hname='$hname',cus_district='$District',cus_pin='$pincode',cus_phno='$phno' where cus_id='$cid' ";
    update($q);
}





 ?>
<!-- main-slider -->
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class=" owl-theme">
             <div class="item">
                 <li>
                  
                                     	             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                 	
		<br><br>
	
		<br>
		
	<h1 style="color: white"><b><u>PROFILE</u></b></h1><br><br>

	<form method="post">
	<table align="center" class="dd" style="color: #eaff76" >
		
		<!-- <tr>
			<th>Email ID</th>
			<td><input type="text" required="" name="email" maxlength="20" class="form-control" style="opacity: 0.7"></td>
		</tr> -->
		<tr>
			<th>First Name</th>
			<td><input type="text" required="" name="fname" value="<?php echo $res[0]['cus_fname'] ?>" maxlength="15" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" required="" value="<?php echo $res[0]['cus_lname'] ?>" name="lname" maxlength="15" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>House Name</th>
			<td><input type="text" required="" name="hname" value="<?php echo $res[0]['cus_hname'] ?>" class="form-control" style="opacity: 0.7"></td>
		</tr>
			<th>District</th>
			<td>
			<select name="District" id="district" class="form-control" style="opacity: 0.7">
				<option value="Select">Select Option</option>
				<option value="Ernakulam">Ernakulam</option>
                <option value="TVM">Trivandrum</option>
                <option value="TCR">Thrissur</option>
                <option value="Alappuzha">Alappuzha</option>
                <option value="Kasaragod">Kasaragod</option>
                      <option value="Kozhikode">Kozhikode</option>
                         <option value="Kannur">Kannur</option>
                            <option value="Wayanad">Wayanad</option>
                               <option value="Palakkad">Palakkad</option>
                               <option value="Idukki">Idukki</option>
                               <option value="Kottayam">Kottayam</option>
                               <option value="Pathanamthitta">Pathanamthitta</option>
                               <option value="Malappuram">Malappuram</option>
                               <option value="Kollam">Kollam</option>
			</select></td>
		</tr>
		<tr>
			<th>Pin Code</th>
			<td><input type="number" pattern=[0-9]{6} required="" value="<?php echo $res[0]['cus_pin'] ?>" name="pincode" class="form-control" style="opacity: 0.7"></td>
		</tr>	
		<tr>
			<th>Phone number</th>
			<td><input type="number" value="<?php echo $res[0]['cus_phno'] ?>" required="" name="phno" class="form-control" style="opacity: 0.7"></td>
		</tr>
		
		<tr>
			<!--th>Date of check in</th>
			<td><input type="Date" name="" class="form-control"></td>
		</tr>
		<tr>
			<th>Date of check out</th>
			<td><input type="Date" name="" class="form-control"></td>
		</tr-->
		<tr>
			<td colspan="2"><center><input type="submit" name="update" value="update" class="btn btn-success"></center></td>
			
		</tr>
	
	</table>
</font></form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
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
         </div>
     </div>
 </section>
 <!-- /main-slider -->
<!--  <center>
    <br>
    <h1></h1> <br>
    <table class="table" style="width: 1340px">
        <tr>
            <th>Category</th>
            <th>SubCategory</th>

        </tr>

        <?php 
            $q="SELECT * FROM tbl_subcategory INNER JOIN `tbl_category` USING(`c_id`) ";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) { ?>

                    <tr>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['sc_name']; ?></td>
                        
                        
                        </tr>
                    
            <?php   }
            }
         ?>
    </table>
</center>  	 -->

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