
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Task Manager - <?php echo $title; ?></title>

        <script>
            window.menu = '<?php echo $title; ?>';
        </script>

        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url(); ?>assets/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Header -->
        <?php include_once 'shared/header.php'; ?>

        <div id="wrapper">

            <!-- Sidebar -->
            <?php include_once 'shared/sidebar.php'; ?>

            <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <?php include_once 'shared/breadcrumb.php'; ?>

                    <!-- Content -->
                    <?php
                    if (isset($userClickHome) && $userClickHome == TRUE) {
                        include_once 'home.php';
                    } elseif (isset($userClickAdmin) && $userClickAdmin == TRUE) {
                        include_once 'admin.php';
                    }
                    ?>

                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php include_once 'shared/footer.php'; ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fas fa-undo"></i> Cancel</button>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>/Login"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url(); ?>assets/js/sb-admin.min.js"></script>

        <!-- Custom scripts for this application-->
        <script src="<?php echo base_url(); ?>assets/js/task.js"></script>

        <!-- Demo scripts for this page-->
        <script src="<?php echo base_url(); ?>assets/js/datatables-demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/chart-area-demo.js"></script>

    </body>

</html>
