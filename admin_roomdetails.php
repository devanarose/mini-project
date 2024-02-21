<?php 
    include 'admin_header.php';

if (isset($_POST['room'])) {
    extract($_POST);
    extract($_GET);
    $s="SELECT *,CONCAT(`cname`,' ',`sc_name`) AS room_name FROM `tbl_category` INNER JOIN `tbl_subcategory` ON tbl_category.c_id = tbl_subcategory.c_id ";
    $r=SELECT($s);
    // if (sizeof($r)>0) {
    //     alert('already exists');

    // }
    // else{
    $dir = "image/";
    $file = basename($_FILES['imgg']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target = $dir.uniqid("image_").".".$file_type;
    if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
    {
          $q1="INSERT INTO tbl_room_management VALUES(null,'$sc_id','0','AVAILABLE','$price','$target','$quantity')";

    insert($q1);
    alert('room added');
    return redirect('room_details.php');

    
    }
        else
        {
            echo "file uploading error occured";
        }
    
    

}

//}  

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

        <form method="post" enctype="multipart/form-data" >
        <h1 align="center" style="color: #fff">ROOM MANAGEMENT </h1>
    <table align="center" class="dd" style="color: #fff">
<br>   

        <tr>
            <th> Room name</th>

            <td><select name="sc_id" style="height: 50px; font-size: 20px; opacity: 0.7">
       <option>Select</option>     
       <?php 

        $q="SELECT *,CONCAT(`cname`,' ',`sc_name`) AS room_name FROM `tbl_category` INNER JOIN `tbl_subcategory` ON tbl_category.c_id = tbl_subcategory.c_id ";
        $res=select($q);
        foreach ($res as $row) {
            ?>
          <option  value="<?php echo $row['sc_id'] ?>"><?php echo $row['cname'] . " " . $row['sc_name']; ?></option>
       <?php 
        }

        ?>    
            </select></td>
        </tr>
           <th>Price</th>
            <td><input type="text" required="" name="price" class="form-control" style="opacity: 0.7; height: 45; font-size: 10px; font-size: 10px"></td> 
                <tr>
                    </tr>
            <th>Quantity</th>
            <td><input type="number" required="" name="quantity" class="form-control" style="opacity: 0.7;height: 45; font-size: 10px"></td> 
                <tr>
                    </tr>
           <th>Image</th>
            <td><input type="file" required="" name="imgg" class="form-control" style="opacity: 0.7;height: 45px; font-size: 10px"></td> 
                <tr>
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
     </div>
 </section>
 <!-- /main-slider -->
  <center>
    <br>
    <h1>Room details</h1> <br>
    <table class="table" style="width: 1000px">
        <tr>
             <th>Category name</th>
            <th>Subcategory name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Quantity</th>
            

        </tr>

        <?php 
            $q="SELECT * FROM tbl_room_management INNER JOIN tbl_subcategory USING(`sc_id`)  INNER JOIN `tbl_category` USING (`c_id`) ";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) { ?>

                    <tr>
                       <td><?php echo $row['cname']; ?></td> 
                        <td><?php echo $row['sc_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><img src="<?php echo $row['image']; ?>" width="200" height="200"></td>
                        <td><?php echo $row['qty']; ?></td>
                        
                        
                        </tr>
                    
            <?php   }
            }
         ?>
         </table>
</center> 
    
<?php 
    include 'footer.php';
?>