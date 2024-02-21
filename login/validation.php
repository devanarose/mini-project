<?php
    function emptyValidation(){
     if (isset($_POST["login"])) {
       if(empty($_POST["user"]) || empty($_POST["password"])){
           return "<div class='alert alert-danger' role='alert'>please enter username/password </div>";
       }
       else{
         return "";
       }
     }
    }
?>