<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registeration Flow</title>
</head>

<body>
    <?php
    include "db.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center display-6">Register</h1>
                <div class="card p-2 px-3 mb-3">

                    <form action="process.php" method="post">
                
                        <div class="mb-1">
                            <label class="form-label" for="first_name">First Name :</label>
                            <input class="form-control" type="text" name="first_name">
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="last_name">Last Name :</label>
                            <input class="form-control" type="text" name="last_name">
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="username">Username :</label>
                            <input class="form-control" type="text" name="username">
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="email">Email :</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="">Gender :</label>
                            <select class="form-select" name="gender">
                                <option value="none">-- Select --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="psswd">Password :</label>
                            <input class="form-control" type="password" name="psswd">
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="psswd_confirm">Confirm password :</label>
                            <input class="form-control" type="password" name="psswd_confirm">
                        </div>
                
                        <input type="submit" class="btn btn-primary" value="Register" name="register_user">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>