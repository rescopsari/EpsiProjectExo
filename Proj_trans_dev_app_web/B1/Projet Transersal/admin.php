<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDE SWIPE Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/grayscale.css" rel="stylesheet">
    <!-- Scripts -->
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/admin.js"></script>
</head>

<body id="page-top" class="bg-img">

    <?php
        $file_name = basename(__FILE__);
        include 'includes/front/nav.php';
    ?>
    <!-- <section class="masthead"> -->


        <div>
                <div class=" well admin-content" id="home">
                    <!-- Header -->
                    <header class="masthead">
                        <div class="container d-flex h-100 align-items-center">
                        <div class="mx-auto text-center">
                            <h1 class="mx-auto my-0 text-uppercase">BDE SWIPE</h1>
                            <h2 class="text-white-50 mx-auto mt-2 mb-5">Panel Administrateur</h2>
                        </div>
                        </div>
                    </header>
                </div>
                <div class=" well admin-content" id="widgets">
                    <?php include 'includes/front/create_event.php'; ?>
                </div>
                <div class="well admin-content" id="pages">
                    <?php include 'includes/front/newsletter.php'; ?>
                </div>
                <div class="well admin-content" id="charts">
                    <?php include 'includes/front/disp_events.php'; ?>
                </div>
                <div class="well admin-content" id="table">
                    Table
                </div>
                                
            </div>
        <!-- </div> -->


    <?php
        include 'includes/front/footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/grayscale.min.js"></script>
</body>
