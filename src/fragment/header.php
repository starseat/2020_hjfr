<?php require_once('./fragment/head.php'); ?>

<?php
// include('./common.php');
// include('./db_conn.php');
?>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" id="hjfr-navbar-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-2 col-xl-3  d-block">
                        <h1 class="mb-0 site-logo"><a href="./index.php" class="text-black h2 mb-0"><img src="./imgs/logo.svg" alt="logo"></img></a></h1>
                    </div>

                    <?php require_once('./fragment/navi.php'); ?>

                    <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>

        </header>