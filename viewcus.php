<?php
  include 'admin_header.php';

if (isset($_GET['aid'])) {
   extract($_GET);


   $q="update tbl_customer set status='Active' where cus_id='$aid'";
   update($q);
   // return  redirect('viewcus.php');
}

if (isset($_GET['iid'])) {
   extract($_GET);
   $q="update tbl_customer set status='In Active' where cus_id='$iid' ";
   update($q);
     // return  redirect('viewcus.php');
}





  ?>
<br>
<center>
    <h1>CUSTOMER DETAILS</h1> <br>

    <table class="table" style="width: 1200px;">

        <tr>
            <th>USERNAME</th>
            <th>NAME</th>
            <th>HOUSE NAME</th>
            <th>DISTRICT</th>
            <th>PINCODE</th>
            <th>PHONE PHONE</th>
            <th>STATUS</th>
           
        </tr>

        <?php 
            $q=" SELECT *,CONCAT(`cus_fname`,' ',`cus_lname`) AS cus_name FROM `tbl_customer`";
            $res11=select($q);
            if(sizeof($res11)>0){
                foreach ($res11 as $row) { ?>

                    <tr>
                        <td><?php echo $row['cus_username']; ?></td>
                        <td><?php echo $row['cus_name']; ?></td>
                        <td><?php echo $row['cus_hname']; ?></td>
                        <td><?php echo $row['cus_district']; ?></td>
                        <td><?php echo $row['cus_pin']; ?></td>
                        <td><?php echo $row['cus_phno']; ?></td>

                        <?php 

                       if ($row['status']=="Active") {?>
                         <td><a class="btn btn-success" href="?iid=<?php echo $row['cus_id'] ?>">Active</a></td>
                         
                      <?php }elseif ($row['status']=="In Active") {?>
                         <td><a  class="btn btn-danger" href="?aid=<?php echo $row['cus_id'] ?>">In Active</a></td>
                     <?php }

                         ?>
                        
                       
                      
                        
                        </tr>
                    
            <?php   }
            }
         ?>
    </table>
    <a style="width: 100px" class="btn btn-outline-info" href="cusreport.php"><b>Print Report</b></a>
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

