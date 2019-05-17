
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Login</title>

        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url(); ?>assets/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="bg-success">

        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">
                    <?php
                    if ($this->session->flashdata('msg') != '') {
                        ?>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <?php
                    } else {
                        ?>
                        Login
                    <?php } ?>
                </div>

                <div class="card-body">
                    <form action="Login/authenticate" class="form-horizontal" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                <label for="inputEmail">Email address</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>  
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                            <i class="fas fa-sign-in-alt"></i>
                            Sign in
                        </button>
                    </form>
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>

    </body>

</html>
