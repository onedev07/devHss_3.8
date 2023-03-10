<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HIGH STAR SECURITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/jcarousel.css" rel="stylesheet" />
    <link href="../css/flexslider.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />

    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('bootstrap-responsive') ?>
    <?= $this->Html->css('jquery.fancybox') ?>
    <?= $this->Html->css('jcarousel') ?>
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('style.css') ?>
    <!-- Theme skin -->
    <link href="../skins/default.css" rel="stylesheet" />
    <?= $this->Html->css('default.css') ?>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="../ico/HSS_ico.jpg" />

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>

<body>
    <div id="wrapper">
        <header>
            <div class="container ">
                <div class="row nomargin">
                    <div class="span12">
                        <div class="headnav">
                            <ul>
								<li><strong><i class="icon-user"></i><?= $this->request->getSession()->read('Auth.User.name') ?></strong></li>
								
								
								<!--<li><a href="#mySignin" data-toggle="modal">Connexion</a></li>-->
								<?php if($name): ?>
									<li><strong><a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'view', $this->request->getSession()->read('Auth.User.id')]); ?>"><i class=" icon-eye-open"></i>Profile</a></strong></li>
									<li><a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'logout']); ?>">D??connexion</a></li> 
								<?php endif ?>
								<?php if(empty($name)): ?>
								<li><a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'login']); ?>">Connexion</a></li>
								<?php endif ?>
								<!--<li><a href="#mySignin" data-toggle="modal">Se connecter</a></li>-->
							</ul>
							<i class=" icon-phone-sign" style="color:#fc7a00; font-size:20px; font-width:bolder"></i><span style="color:#9f090b; font-size:16px"><strong>SERVICE COMMERCIAL : 05 45 90 43 43 <br></strong></span>
                        </div>
                        <!-- Signup Modal -->
                        <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSignupPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSignupPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSignupPassword2" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Sign up</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signup modal -->
                        <!-- Sign in Modal -->
                        <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputText">Username</label>
                                        <div class="controls">
                                            <input type="text" id="inputText" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSigninPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSigninPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Sign in</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signin modal -->
                        <!-- Reset Modal -->
                        <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputResetEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputResetEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Reset password</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            We will send instructions on how to reset your password to your inbox
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end reset modal -->
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="logo">
                            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><img src="../img/New_logo.jpg" alt="" class="logo" width="60%" height="60%" /></a>
                            <!--<h1>Flat and trendy bootstrap template</h1>-->
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="active">
                                            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'prestation']); ?>">Nos prestations</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>">Nos Offres</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'index']); ?>">Blog</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'contact']); ?>">Contacts </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-media.js"></script>
    <script src="../js/google-code-prettify/prettify.js"></script>
    <script src="../js/portfolio/jquery.quicksand.js"></script>
    <script src="../js/portfolio/setting.js"></script>
    <script src="../js/jquery.flexslider.js"></script>
    <script src="../js/jquery.nivo.slider.js"></script>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/jquery.ba-cond.min.js"></script>
    <script src="../js/jquery.slitslider.js"></script>
    <script src="../js/animate.js"></script>

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


    <!-- Template Custom JavaScript File -->
    <script src="../js/custom.js"></script>
    <?= $this->Html->script('custom') ?>

    <!-- Calcul montant total -->
    <?= $this->Html->script('calcul') ?>
    <script src="../js/calcul.js"></script>
    <script>
        var prixoffre = document.getElementById('prix').elements['valprix'].value;
        var periode = document.getElementById('calcul').elements["periode"];

        if (periode.options[periode.selectedIndex].innerHTML === "Trimestre"){
            document.getElementById('calcul').elements["periode"].value = 3;
        }
        if (periode.options[periode.selectedIndex].innerHTML === "Semestre") {
            document.getElementById('calcul').elements["periode"].value = 6;
        }
        if (periode.options[periode.selectedIndex].innerHTML === "Annuel") {
            document.getElementById('calcul').elements["periode"].value = 12;
        }

        periode.addEventListener('change', function() {
            // On affiche le contenu de l'??l??ment <option> cibl?? par la propri??t?? selectedIndex
            // alert(periode.options[periode.selectedIndex].innerHTML);
            if (periode.options[periode.selectedIndex].innerHTML === "Trimestre") {
                // document.getElementById('calcul').elements["periode"].value = 3;
                periode.value = 3;
            }
            if (periode.options[periode.selectedIndex].innerHTML === "Semestre") {
                document.getElementById('calcul').elements["periode"].value = 6;
            }
            if (periode.options[periode.selectedIndex].innerHTML === "Annuel") {
                document.getElementById('calcul').elements["periode"].value = 12;
            }
            var montanttotal = prixoffre * periode;
            document.getElementById("calcul").elements["montanttotal"].value = montanttotal;
            montanttotal.textContent = montanttotal.toFixed(2);
        }, true);
    </script>


</body>

</html>