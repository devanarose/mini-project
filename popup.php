
<?php include('connection.php');
include 'stock_functions.php';

        if(isset($_POST['confirm'])){
          $ariv=$_POST['arrival'];
          $dept=$_POST['departure'];
          if(!empty($ariv)&&!empty($dept)){
                redirect("demo.php?adate=$ariv&dept=$dept");    
            }
        }
            

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Hotel Reservation Form</title>
        <link rel="stylesheet" href="assets/css/style-starter.css">
<!--         <link rel="stylesheet" href="style.css">
 -->    <style>
html, body, div, input, span, a, select, textarea, option, h1, h2, h3, h4, main, aside, article, section, header, p, footer, nav, pre {
    box-sizing: border-box;
    font-family: Tahoma, Geneva, sans-serif;
}
html {
    background-color: #F8F9F9;
    background: linear-gradient(0deg, #f9f8f8 0%, #f9f8f8 80%, #cb5f51 80%, #cb5f51 100%);
    padding: 30px;
    height: 100%;
}
input,textarea,select {
    outline: 0;
}
h1 {
    margin: 0;
    padding: 25px;
    font-size: 20px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: #6a737f;
    font-weight: 600;
    background-color: #f9fbfc;
}
h1 i {
    padding-right: 10px;
    font-size: 24px;
}
.hotel-reservation-form {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
}
.hotel-reservation-form .fields {
    position: relative;
    padding: 20px;
}
.hotel-reservation-form select {
    appearance: none;
    background-image: linear-gradient(45deg, transparent 50%, #c7c9cb 50%), linear-gradient(135deg, #c7c9cb 50%, transparent 50%), linear-gradient(to right, #dfe0e0, #dfe0e0);
    background-position: calc(100% - 20px) 20px, calc(100% - 15px) 20px, calc(100% - 40px) 10px;
    background-size: 5px 5px, 5px 5px, 1px 25px;
    background-repeat: no-repeat;
}
.hotel-reservation-form select option:first-child {
    display: none;
 }
.hotel-reservation-form input[type="date"]::-webkit-calendar-picker-indicator {
    color: #ddd;
    filter: invert(0.8);
}
.hotel-reservation-form input[type="text"], 
.hotel-reservation-form input[type="email"],
.hotel-reservation-form input[type="date"],
.hotel-reservation-form input[type="tel"],
.hotel-reservation-form select {
    display: flex;
    margin-top: 10px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    flex-basis: 100%;
    height: 47px;
}
.hotel-reservation-form input[type="text"]:focus, 
.hotel-reservation-form input[type="email"]:focus,
.hotel-reservation-form input[type="tel"]:focus,
.hotel-reservation-form input[type="date"]:focus,
.hotel-reservation-form select:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="text"]::placeholder, 
.hotel-reservation-form input[type="email"]::placeholder, 
.hotel-reservation-form input[type="tel"]::placeholder, 
.hotel-reservation-form input[type="date"]:invalid, 
.hotel-reservation-form textarea::placeholder,
.hotel-reservation-form select:invalid {
    color: #858688;
}
.hotel-reservation-form textarea {
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    height: 150px;
}
.hotel-reservation-form textarea:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #cb5f51;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 100%;
}
.hotel-reservation-form input[type="submit"]:hover {
    background-color: #c15b4d;
}
.hotel-reservation-form input[name="email"] {
    position: relative;
    display: block;
}
.hotel-reservation-form .field {
    display: inline-flex;
    position: relative;
    width: 100%;
    padding-bottom: 20px;
}
.hotel-reservation-form label {
    font-size: 14px;
    font-weight: 600;
    color: #8e939b;
}
.hotel-reservation-form .field i {
    position: absolute;
    color: #dfe2e5;
    top: 25px;
    left: 15px;
    z-index: 10;
}
.hotel-reservation-form .field i ~ input {
    padding-left: 45px !important;
}
.hotel-reservation-form .responses {
    padding: 15px;
    margin: 0;
}
.hotel-reservation-form .fields .wrapper {
    display: flex;
    justify-content: space-between;
}
.hotel-reservation-form .fields .wrapper > div {
    width: 100%;
}
.hotel-reservation-form .fields .wrapper .gap {
    width: 35px;
}


</style>

    </head>
    <body>
        <div class="pop">
        <form class="hotel-reservation-form" method="post">
            <h1><i class="far fa-calendar-alt"></i>Check Availability</h1>
            <div class="fields">
                <!-- Input Elements -->
                <div class="wrapper">
    <div>
        <label for="arrival">CheckIn</label>
        <div class="field">
            <input  type="date" name="arrival" id="chdate" required>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="departure">Checkout</label>
        <div class="field">
            <input  type="date" name="departure" id="choutdate" required>

            

        </div>

    </div>
</div> <input type="submit" name="confirm" value="Confirm">
            </div>
        </div>
        </form>
        

<script>
//getting todays date
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            
            if (dd < 10) {
               dd = '0' + dd;
            }
            
            if (mm < 10) {
               mm = '0' + mm;
            } 
                
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("chdate").setAttribute("min", today);
            document.getElementById("choutdate").setAttribute("min", today );
            console.log("today:"+today);         
   

   //geting date after 60 days
            var dt = new Date();
            dt.setDate(dt.getDate() + 60);


            var dd1 = dt.getDate();
            console.log(dd1);
            var mm1 = dt.getMonth() + 1; //January is 0!
            var yyyy1 = dt.getFullYear();
            
            if (dd1 < 10) {
               dd1 = '0' + dd1;
            }
            
            if (mm1 < 10) {
               mm1 = '0' + mm1;
            } 
                
            futuredate = yyyy1 + '-' + mm1 + '-' + dd1;
            document.getElementById("choutdate").setAttribute("max", futuredate);
            document.getElementById("chdate").setAttribute("max", futuredate);
            console.log("future date:"+futuredate); 

</script>

    </body>
</html>

