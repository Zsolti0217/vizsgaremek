<?php include('../config/server.php'); ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../res/logo.png" type="image/x-icon">
    <title>Bejelentkezés</title>

     <!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
 <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form class="p-5 rounded shadow" style="max-width: 30rem; width: 100%"
    method="POST"
    action="login.php">

    <h1 class="text-center display-4 pb-4">Bejelentkezés</h1>
     <?php include('../config/errors.php'); ?>
    <div class="mb-3">
        <label for="loginmail"
            class="form-label">Email</label>  
         <input type="email" 
        class="form-control" 
        name="email" 
        id="loginmail" 
        aria-describedby="emailHelp">

    <div class="mb-3">
        <label for="loginpass" 
        class="form-label">Jelszó</label>
        
        <input type="password" 
        class="form-control" 
        name="pass"
        id="loginpass">
    </div>
    <button type="submit" 
        class="btn btn-primary" name="login_user">Bejelentkezés</button>
        <button type="submit" 
        class="btn btn-primary" name="register_user">Regisztráció</button>
    </form>
 </div>
</body>
</html>