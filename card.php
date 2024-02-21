<?php 
	include 'customer_header.php';
    include 'stock_functions.php';

   $cid=$_SESSION['customer_ID'];
   extract($_GET);
    
                



	if(isset($_POST['card'])){
		extract($_POST);

        echo $date=$exp_date;
                   echo $today=date("Y-m");

                    if ($date < $today) {
                       alert('card expired');
                    }else{
                    


	echo $qc="INSERT INTO `tbl_card` VALUES (null,'$cid','$card_no','$card_name','$exp_date')";
	 $id=insert($qc);
	   
	
		  alert('Add Card successful');
		return redirect('bookingcart.php');
}
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
            
    <h1 style="color: black"><b>Add Card</b></h1><br><br>

    <form method="post">
    <table align="center" class="dd" style="color: black" >

    	
        <tr>
            <th>Card Number</th>
            <td><input type="text" name="card_no" required="" placeholder="1234567890123456" maxlength="16" pattern=[0-9]{16} class="form-control" style="opacity: 0.7"></td>
        </tr>
        <tr>
            <th>Card Name</th>
            <td><input type="text" name="card_name" required="" class="form-control" style="opacity: 0.7"></td>
        </tr>
      
        
          
<tr>
            <th>Expiry Date</th>
            <td><input type="month" name="exp_date" required="" class="form-control" style="opacity: 0.7"></td>
        </tr>
       
        <tr>
            <td colspan="2"><center><input type="submit" name="card" value="Add Card" class="btn btn-success"></center></td>
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