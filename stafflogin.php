<?php 
    include 'admin_header.php';

    if (isset($_POST['sta'])) {
    extract($_POST);
    // extract($_GET);
    $s="SELECT * FROM tbl_login where username='$email' and password='$password'";
    $r=SELECT($s);
    if (sizeof($r)>0) {
        alert('already exists');

    }
    else
    {

     $s="INSERT INTO tbl_login VALUES('$emails','$password','staff')";
    insert($s);
    $s1="INSERT INTO tbl_staff VALUES(null,'$emails','$fname','$lname','$dob','$hno','$hname','$District','$pcode','$Gender','$phno','Active')";

    insert($s1);
    alert('registered successfully');
    // return redirect('stafflogin.php');
}

}
if (isset($_GET['aid'])) {
   extract($_GET);


   $q="update tbl_staff set staff_status='Active' where staff_ID='$aid'";
   update($q);
   // return  redirect('viewcus.php');
}

if (isset($_GET['iid'])) {
   extract($_GET);
   $q="update tbl_staff set staff_status='In Active' where staff_ID='$iid' ";
   update($q);
     // return  redirect('viewcus.php');
}
if (isset($_GET['upid'])) {
  extract($_GET);

  $q="select * from tbl_staff where staff_ID='$upid'";
  $res=select($q);

}


if (isset($_POST['update'])) {
    extract($_POST);

    $q="update tbl_staff set staff_fname='$fname',staff_lname='$lname',staff_dob='$dob',staff_hno='$hno',staff_hname='$hname',staff_district='$District',staff_pin='$pcode',staff_gender='$Gender',staff_phno='$phno' where staff_ID='$upid' ";
    update($q);
}



 ?>
<!-- main-slider -->
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class=" owl-theme">
             <div class="item">
                              <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    
    <center>
        <br><br><br><br><br>
    <h1 style="color: #64ff7e"><b>STAFF</b></h1><br><br><br>
    <form method="post">


        <?php 

if (isset($_GET['upid'])) {

         ?>
    <table table align="center" class="dd" style="color: black" >
        <!--tr>
            <th> Staff Username</th>
            <td><input type="text" name="" class="form-control"></td>
        </tr-->
       
        <tr>
            <th>First Name</th>
            <td><input type="text" name="fname" maxlength="15" class="form-control" value="<?php echo $res[0]['staff_fname'] ?>" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lname" maxlength="15" class="form-control" value="<?php echo $res[0]['staff_lname'] ?>" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Date Of Birth</th>
            <td><input type="Date" name="dob"  class="form-control" value="<?php echo $res[0]['staff_dob'] ?>" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>House Number</th>
            <td><input type="number" name="hno" maxlength="3" pattern=[0-9]{3} class="form-control" value="<?php echo $res[0]['staff_hno'] ?>" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>House Name</th>
            <td><input type="text" name="hname" maxlength="20" class="form-control" value="<?php echo $res[0]['staff_hname'] ?>" style="opacity: 0.7"></td>
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
            <td><input type="text" name="pcode" maxlength="6" pattern=[0-9]{6} class="form-control" value="<?php echo $res[0]['staff_pin'] ?>" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>
            <select name="Gender" id="Gender" class="form-control" style="opacity: 0.7">
                <option value="Select">Select Option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select></td>
        </tr>   
        <tr>
            <th>Phone number</th>
            <td><input type="number" name="phno" maxlength="10" pattern=[0-9]{10} class="form-control" value="<?php echo $res[0]['staff_phno'] ?>" style="opacity: 0.7"></td>
        </tr>
 
        
        <tr>
            <td colspan="2"><center><input type="submit" name="update" value="submit" class="btn btn-success"></center></td>
            
        </tr>
    
    </table>
<?php }else{ ?>
     <table table align="center" class="dd" style="color: black" >
        <!--tr>
            <th> Staff Username</th>
            <td><input type="text" name="" class="form-control"></td>
        </tr-->
        <tr>
            <th>Email ID</th>
            <td><input required="" type="email" name="emails" maxlength="25" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><input type="text" required="" name="fname" maxlength="15" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" required="" name="lname" maxlength="15" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Date Of Birth</th>
            <td><input type="Date" required="" name="dob" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>House Number</th>
            <td><input type="number" required="" name="hno" maxlength="3" pattern=[0-9]{3} class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>House Name</th>
            <td><input type="text" required="" name="hname" maxlength="10" class="form-control" style="opacity: 0.7"></td>
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
            <td><input type="number" required="" maxlength="6" pattern=[0-9]{6} name="pcode" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>
            <select name="Gender" id="Gender" class="form-control" style="opacity: 0.7">
                <option value="Select">Select Option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select></td>
        </tr>   
        <tr>
            <th>Phone number</th>
            <td><input type="number" required="" maxlength="10" name="phno" pattern=[0-9]{10} class="form-control" style="opacity: 0.7"></td>
        </tr>
 
         <tr>
            <th>staff password</th>
            <td><input type="password" required="" maxlength="10" name="password" class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" name="sta" value="Register" class="btn btn-success"></center></td>
            
        </tr>
    
    </table>
<?php } ?>
</font>
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
    
<br>
<center>
    <h1>STAFF DETAILS</h1> <br>
    <table class="table" style="width: 1200px;">
        <tr>
            <th>NAME</th>
            <th>DOB</th>
            <th>HOUSE NUMBER</th>
            <th>HOUSE NAME</th>
            <th>DISTRICT</th>
            <th>PINCODE</th>
            <th>GENDER</th>
            <th>STAFF PHONE</th>
            <th>STATUS</th>
            <th>EDIT</th>
        </tr>

        <?php 
            $q=" SELECT *,CONCAT(`staff_fname`,' ',`staff_lname`) AS st_name FROM `tbl_staff`";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) { ?>

                    <tr>
                        <td><?php echo $row['st_name']; ?></td>
                        <td><?php echo $row['staff_dob']; ?></td>
                        <td><?php echo $row['staff_hno']; ?></td>
                        <td><?php echo $row['staff_hname']; ?></td>
                        <td><?php echo $row['staff_district']; ?></td>
                        <td><?php echo $row['staff_pin']; ?></td>
                        <td><?php echo $row['staff_gender']; ?></td>
                        <td><?php echo $row['staff_phno']; ?></td>
                        <?php 

                       if ($row['staff_status']=="Active") {?>
                         <td><a class="btn btn-success" href="?iid=<?php echo $row['staff_ID'] ?>">Active</a></td>
                         
                      <?php }elseif ($row['staff_status']=="In Active") {?>
                         <td><a class="btn btn-danger" href="?aid=<?php echo $row['staff_ID'] ?>">In Active</a></td>
                     <?php }

                        
                        
                         ?>


                         <td><a href="?upid=<?php echo $row['staff_ID'] ?>">Update</a></td>
                        </tr>
                    
            <?php   }
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
