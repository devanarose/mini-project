<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include 'validation.php';
    include($_SERVER['DOCUMENT_ROOT'].'/miniproject/connection.php');
     $msg="";
    ?>
    <div class="container box">
        <h2>LOGIN</h2>
        <div class="form-group p-3">
            <?php echo emptyValidation(); ?>
            <form method="POST" action="">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="username" name="user">
                    <label for="floatingInput">username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-success btn-lg" type="submit" name="login">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>