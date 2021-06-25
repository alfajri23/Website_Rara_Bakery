<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- homemade -->
    <script src="../asset/jquery-3.5.1.slim.js"></script>
    <script src="../asset/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    
    <!--Headline-->
    <div class="row d-flex justify-content-sm-center flex-column my-3">
        <h2 class="headline mx-auto text-center">Admin Rara Bakery</h2>
        <p class="mx-auto text-center ">Kelola tokomu disini ! </p>
    </div>
    <!--Headline-end-->

    <!--form-->
    <div class="container d-flex justify-content-center align-content-center mb-n5 ">
        <div class="col-7">
        <form action="../control/login-control.php" method="POST">
            <div class="form-group ">
            <label class="pl-3" for="exampleInputEmail1">Username</label>
            <input type="text" class="radius form-control " id="exampleInputEmail1" placeholder="Masukkan username" name="username" required>
            </div>
            <div class="form-group">
                <label class="pl-3" for="exampleInputPassword1">Kata Sandi</label>
                <div class="mata ">
                    <input type="password" class="radius form-control " id="exampleInputPassword1" placeholder="Masukkan password" name="password" required="">             
                    <!-- <input id="input_form" type="password" class="form-control p-4" id="exampleInputPassword1" placeholder="Masukkan kata sandi">-->
                </div>
            </div>
            <!--button-->
            <div class="row mt-2 d-flex justify-content-center align-content-center flex-column">
              <button type="submit" id="button-action" class="btn btn-secondary mx-auto px-4"><h5>Masuk</h5></button>
              
            </div>
            <!--button-end-->
        </form>
        </div>
    </div>
    <!--form-end-->

</div>

</body>
  
</html>