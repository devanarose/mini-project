<?php 
include 'staff_header.php'; 

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


?>
<br>
<center>
    <h1>STAFF DETAILS</h1> <br>
    <table class="table" style="width: 1340px;">
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
                         <td><a href="?iid=<?php echo $row['staff_ID'] ?>">InActive</a></td>
                         
                      <?php }elseif ($row['staff_status']=="In Active") {?>
                         <td><a href="?aid=<?php echo $row['staff_ID'] ?>">Active</a></td>
                     <?php }

                         ?>
                        
                       
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