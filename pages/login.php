<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>    
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light p-5 mt-5">
                        <?php
                        $username = 'admin';
                        $password = 'bpsdmp';                        
                        if (isset($_POST['submit'])) {
                            if ($_POST['username'] == $username && $_POST['password'] == $password){
                                echo "<script type='text/javascript'>alert('Anda Berhasil Login!');</script>";                                
                                header('location:administrator.php');
                            } else { ?>
                            <div class="alert alert-danger">
                                Email atau password salah
                            </div>
                            <?php }
                        }                            
                        ?>                        
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>            
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                            </div>            
                            <input type="submit" class="form-control btn btn-primary" name="submit" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>