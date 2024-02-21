<?php 
    include 'admin_header.php';
if (isset($_POST['rsubcat'])) {
    extract($_POST);
    extract($_GET);
    $s="SELECT * FROM tbl_subcategory where sc_name='$sc_name' and c_id='$c_id'";
    $r=SELECT($s);
    if (sizeof($r)>0) {
        alert('subcategory already exists');

    }

    else{

    $q1="INSERT INTO tbl_subcategory VALUES(null,'$sc_name','$c_id')";

    insert($q1);
    alert('subcategory added');
    return redirect('subcategory.php');
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
		<h1 align="center" style="color: #fff">SUB CATEGORY</h1>
	<table align="center" class="dd" style="color: #fff">
<br>               
		<tr>
			<th> Category</th>

			<td><select name="c_id" style="height: 50px; font-size: 20px; opacity: 0.7">
       <option>Select</option>     
       <?php 

        $q="select * from tbl_category";
        $res=select($q);
        foreach ($res as $row) {
            ?>
          <option  value="<?php echo $row['c_id'] ?>"><?php echo $row['cname'] ?></option>
       <?php 
        }

        ?>    
            </select></td>
		</tr>
        <tr>
            <th>SubCategory</th>
            <td><input type="text" name="sc_name" class="form-control" style="height: 50px; font-size: 20px; opacity: 0.7"></td> 
        </tr>

                <tr>
            <td colspan="2"><center><input type="submit" name="rsubcat" value="ADD" class="btn btn-success"></center></td>
            
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
  

  <center>
    <br>
    <h1>Subcategory details</h1> <br>
    <table class="table" style="width: 1200px">
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
</center>  
<?php 
    include 'footer.php';
?>