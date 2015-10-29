<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koda - <?php echo $view; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/main.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <div class="container hidden">
        <div class="col-lg-3 col-md-3 col-xs-3">
            <a href="/">
                <img class="logo" src="/public/images/kodalogo.png" width="40px" alt="the koda bear logo" />
                <span class="branding">KODA</span>
            </a>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-9">
            <div class="hamburger hide"><i class="fa fa-bars"></i></div>
            <ul class="pull-right show-nav">
                <li><a href="/portfolio" class="<?php echo (strtolower($view) == "portfolio" ? "active" : "") ?>">PORTFOLIO</a></li>
                <li><a href="/services" class="<?php echo (strtolower($view) == "services" ? "active" : "") ?>">SERVICES</a></li>
                <li><a href="/contact" class="<?php echo (strtolower($view) == "contact" ? "active" : "") ?>">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default gray">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="logo" src="/public/images/kodalogo.png" width="40px" alt="the koda bear logo" />KODA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="/portfolio" class="<?php echo (strtolower($view) == "portfolio" ? "active" : "") ?>">PORTFOLIO</a></li>
                    <li><a href="/services" class="<?php echo (strtolower($view) == "services" ? "active" : "") ?>">SERVICES</a></li>
                    <li><a href="/contact" class="<?php echo (strtolower($view) == "contact" ? "active" : "") ?>">CONTACT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>