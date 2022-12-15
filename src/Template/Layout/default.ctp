<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HIGH STAR SECURITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?= $this->Html->charset() ?>

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-responsive.css') ?>
    <?= $this->Html->css('jquery.fancybox.css') ?>
    <?= $this->Html->css('jcarousel.css') ?>
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('default.css') ?>
    <?= $this->Html->css('overwrite.css') ?>
	<?= $this->Html->css('radio.css') ?>

    <!-- TOAST AFFICHE -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	
	
	<script  src ="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="ico/HSS_ico.jpg" />
    <?= $this->Html->meta('ico/HSS_ico.jpg') ?>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>

<body>
    <div id="wrapper">
        <!-- <?= $this->Flash->render() ?> -->
        <?= $this->fetch('content') ?>
    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/animate.js"></script>

    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('jquery.easing.1.3') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?= $this->Html->script('jquery.jcarousel.min.js') ?>
    <?= $this->Html->script('jquery.fancybox.pack') ?>
    <?= $this->Html->script('jquery.fancybox-media.js') ?>
    <?= $this->Html->script('prettify.js') ?>
    <?= $this->Html->script('jquery.quicksand.js') ?>
    <?= $this->Html->script('setting.js') ?>
    <?= $this->Html->script('jquery.flexslider') ?>
    <?= $this->Html->script('jquery.nivo.slider') ?>
    <?= $this->Html->script('modernizr.custom') ?>
    <?= $this->Html->script('jquery.ba-cond.min') ?>
    <?= $this->Html->script('jquery.slitslider') ?>
    <?= $this->Html->script('animate') ?>
	
	<!-- Génération de PDF -->
	<script src="js/html2pdf.bundle.min.js"></script>
	<script src="js/jspdf.umd.min.js"></script>
	<script src="js/es6-promise.auto.min.js"></script>
	<script src="js/jspdf.min.js"></script>
	<script src="js/html2canvas.min.js"></script>
	<script src="js/html2pdf.min.js"></script>
	
	<?= $this->Html->script('html2pdf.bundle.min.js') ?>
	<?= $this->Html->script('jspdf.umd.min.js') ?>
	<?= $this->Html->script('es6-promise.auto.min.js') ?>
	<?= $this->Html->script('jspdf.min.js') ?>
	<?= $this->Html->script('html2canvas.min.js') ?>
	<?= $this->Html->script('html2pdf.min.js') ?>


    <!-- Template Custom JavaScript File -->
    <script src="js/custom.js"></script>
    <?= $this->Html->script('custom') ?>

</body>

</html>