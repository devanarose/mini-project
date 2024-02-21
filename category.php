 <?php 
    include 'admin_header.php';

if (isset($_POST['rcat'])) {
    extract($_POST);
    extract($_GET);
    $s="SELECT * FROM tbl_category where cname='$cname'";
    $r=SELECT($s);
    if (sizeof($r)>0) {
        alert('already exists');

    }
    else{


    $q1="INSERT INTO tbl_category VALUES(null,'$cname')";

    insert($q1);
    alert('category added');
    return redirect('category.php');
}
}
?>
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

		<form method="post" >
		<h1 align="center" style="color: #fff">CATEGORY</h1>
	<table align="center" class="dd" style="color: #fff">
<br>               
		<tr>
			<th>CATEGORY NAME </th>

			<td><input type="text" name="cname" class="form-control" style="height: 50px; font-size: 20px; opacity: 0.7"></td>
		</tr>

                <tr>
            <td colspan="2"><center><input type="submit" name="rcat" value="ADD" class="btn btn-success"></center></td>
            
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
 <!-- /main-slider -->
    
<?php 
    include 'footer.php';
?>