<?php 
	include 'public_header.php';


if (isset($_POST['cus'])) {
	extract($_POST);
	extract($_GET);
    $s="SELECT * FROM tbl_login where username='$email' and password='$password'";
    $r=SELECT($s);
    if (sizeof($r)>0) {
        alert('already exists');

    }
    else
    {

	echo$q="insert into tbl_login values('$email','$password','customer')";
	insert($q);
	echo$q1="insert into tbl_customer values(null,'$email','$fname','$lname','$hname','$District','$pincode','$phno','Active')";

	insert($q1);
	alert('successfully');
	return redirect('addcus.php');
}

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
		
	<h1 style="color: white"><b><u>REGISTRATION</u></b></h1><br><br>

	<form method="post">
	<table align="center" class="dd" style="color: #eaff76" >
		
		<tr>
			<th>Email ID</th>
			<td><input type="email" required=""  name="email" maxlength="30" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>First Name</th>
			<td><input type="text" required="" pattern="{a-z}{A-Z}" name="fname" maxlength="15" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" required="" name="lname" maxlength="15" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>House Name</th>
			<td><input type="text" required="" maxlength="30" name="hname" class="form-control" style="opacity: 0.7"></td>
		</tr>
			<th>District</th>
			<td>
			<select name="District" id="district" class="form-control" style="opacity: 0.7">
				<option value="Select">Select Option</option>
				<option value="Ernakulam">Ernakulam</option>
                <option value="Trivandrum">Trivandrum</option>
                <option value="Thrissur">Thrissur</option>
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
			<td><input type="text" pattern=[0-9]{6} required="" name="pincode" maxlength="6" class="form-control" style="opacity: 0.7"></td>
		</tr>	
		<tr>
			<th>Phone number</th>
			<td><input type="text" pattern=[0-9]{10} required="" name="phno" maxlength="10" class="form-control" style="opacity: 0.7"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" maxlength="10" name="password" required="" class="form-control" style="opacity: 0.7"></td>
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
			<td colspan="2"><center><input type="submit" name="cus" value="Register" class="btn btn-success"></center></td>
			
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