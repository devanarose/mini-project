<?php 
    include 'public_header.php';


     if (isset($_POST['button'])) {
    extract($_POST);
    // extract($_GET);
    $q="select * from tbl_login where username='$uname' and password='$password'";
    $res=select($q);

    if (sizeof($res)>0) {
        $_SESSION['username']=$res[0]['username'];
        $uid=$_SESSION['username'];
        if ($res[0]['usertype']=="admin") {
            return redirect('admin.php');
        }
        elseif ($res[0]['usertype']=="staff") {


            $q3="SELECT * FROM tbl_staff inner join  tbl_login  ON `staff_username`=`username`  where username='$uid' AND staff_status='Active'";
            $ress=select($q3);
        
            if(sizeof($ress)>0)
            {
                $_SESSION['staff_ID']=$ress[0]['staff_ID'];
                $sid=$_SESSION['staff_ID'];
            } 
           
           else {
                alert('Inactive staff');
                 return redirect('login.php');
        }
        return redirect('staff_home.php'); 
    }
        elseif ($res[0]['usertype']=="customer") {
            $q="SELECT * FROM tbl_customer inner join  tbl_login  ON `cus_username`=`username`  where username='$uid' AND status='Active'";
            $res=select($q);
        
            if(sizeof($res)>0)
            {
                $_SESSION['customer_ID']=$res[0]['cus_id'];
                $cid=$_SESSION['customer_ID'];
            }   else {
                alert('Inactive customer');
                return redirect('login.php');

            }   
           
           return redirect('customer_home.php');
        }

        else{
            alert("Invalid Username or Password");
            return redirect("login.php");
             


   }    
    
    }else{
        alert('invalid username and password');
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
        <h1 align="center" style="color: #fff">LOGIN</h1>
    <table align="center" class="dd" style="color: #fff">
<br>               
        <tr>
            <th>USERNAME</th>
            <td><input type="text" name="uname" class="form-control" style="opacity: 0.7"></td>
        </tr>
    

        <tr>
            <th>PASSWORD</th>
            <td><input type="password" name="password" class="form-control" style="opacity: 0.7"></td>
        </tr>
    
    
        <tr>
            <td colspan="2"><center><input type="submit" name="button" value="LOGIN" class="btn btn-success"></center></td>
            
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