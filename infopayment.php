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
				<li><a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'logout']); ?>">Déconnexion</a></li> 
            <?php endif ?>
			<?php if(empty($name)): ?>
			<li><a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'login']); ?>">Connexion</a></li>
			<?php endif ?>
			<!--<li><a href="#mySignin" data-toggle="modal">Se connecter</a></li>-->
            </ul>
        </div>
        <!-- Signup Modal -->
        <!-- <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
        </div> -->
        <!-- end signup modal -->
        <!-- Sign in Modal -->
        <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="mySigninModalLabel">Connectez-vous à votre compte</h4>
            </div>
            <div class="modal-body">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create('$client', ['class' => 'form-horizontal', 'url' => ['controller' => 'Clients', 'action' => 'login']]) ?>
            <!-- <form class="form-horizontal"> -->
                <div class="control-group">
                <label class="control-label" for="inputText">Email</label>
                <div class="controls">
                    <input type="email" name="email" id="inputText" placeholder="Entrez votre adresse email...">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="inputSigninPassword">Mot de passe</label>
                <div class="controls">
                    <input type="password" name="password" id="inputSigninPassword" placeholder="Entrez votre mot de passe...">
                </div>
                </div>
                <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Se connecter</button>
                </div>
                <p class="aligncenter margintop20">
                    Vous avez oublié votre mot de passe? Contactez <strong> HIGH STAR SECURITY</strong>.
                    <!-- <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a> -->
                </p>
                </div>
            <!-- </form> -->
            <?= $this->Form->end() ?>
            </div>
        </div>
        <!-- end signin modal -->
        <!-- Reset Modal -->
        <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
            <a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><?= $this->Html->image('logo.jpg', ['class' => 'logo', 'width' => '200', 'height' => '21']); ?></a>
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



<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>ABONNEMENT</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Abonnement</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Paiement</strong></h4>
            </div>
        </div>

        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->


        <div class="row">
            <div>
                <h6> <strong>Succès du paiement - Vos détails de paiement</strong></h6>
                <div class="span4">
					<table class="table table-striped">
                    <tr>
                        <th scope="row"><?= __('Référence de la commande:') ?></th>
                        <td><?= h($commande) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('ID de la session:') ?></th>
                        <td><?= h($sessionid) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Montant:') ?></th>
                        <td><?= h($montant) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('ID du paiement:') ?></th>
                        <td><?= h($ref) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('N° de téléphone:') ?></th>
                        <td><?= h($telephone) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Date de paiement:') ?></th>
                        <td><?= h($date) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Heure:') ?></th>
                        <td><?= h($time) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Opérateur mobile:') ?></th>
                        <td><?= h($channel) ?></td>
                    </tr>
                    
                </table>
                    <?php 
						
						/* echo $commande = $_GET['purchaseref'];
						echo $sessionid = $_GET['sessionid'];
						echo $montant = $_GET['amount'];
						echo $ref = $_GET['payid'];
						echo $telephone = $_GET['telephone'];
						echo $description = $_GET['description'];
						echo $date = $_GET['date'];
						echo $time = $_GET['time'];
						echo $channel = $_GET['channel']; */
					?>
				</div>
				
				<div class="span4">
				
					<?= $this->Form->create($paiement) ?>
					<fieldset>
						<legend><?= __('Add Paiement') ?></legend>
						<?php
							echo $this->Form->control('refpay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $commande]);
							echo $this->Form->control('session', ['type' => 'hidden', 'class' => 'form-control', 'value' => $sessionid]);
							echo $this->Form->control('payid', ['type' => 'hidden', 'class' => 'form-control', 'value' => $ref]);
							echo $this->Form->control('souscription_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription]);
							echo $this->Form->control('client_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $clientid]);
							echo $this->Form->control('montant', ['type' => 'hidden', 'class' => 'form-control', 'value' => $montant]);
							echo $this->Form->control('tel', ['type' => 'hidden', 'class' => 'form-control', 'value' => $telephone]);
							echo $this->Form->control('description', ['type' => 'hidden', 'class' => 'form-control', 'value' => $description]);
							echo $this->Form->control('datepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $date]);
							echo $this->Form->control('datefin', ['type' => 'hidden', 'class' => 'form-control', 'value' => $datefin]);
							echo $this->Form->control('timepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $time]);
							echo $this->Form->control('canal', ['type' => 'hidden', 'class' => 'form-control', 'value' => $channel]);
							echo $this->Form->control('etatpaiement_id', ['type' => 'hidden','options' => $etatpaiements, 'empty' => true]);
						?>
					</fieldset>
					<p>* Cliquez sur le bouton <strong>'Achever le paiement'</strong> pour votre abonnement soit pris en compte.</p>
					<?= $this->Form->button(__('Achever le paiement'), ['class'=> 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
					<?= $this->Form->end() ?>
				
				</div>
				
            </div>
            
            <div class="span8">		
                
            </div>

        </div>
    </div>
</section>



<footer>
    <div class="container">
    <div class="row">
        <div class="span3">
        <div class="widget">
            <h5 class="widgetheading">Pages</h5>
            <ul class="link-list">
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>">Accueil</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'prestation']); ?>">Nos prestations</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>">Nos offres</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'index']); ?>">Notre blog</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'contact']); ?>">Nos contacts</a></li>
            </ul>
        </div>
        </div>
        <div class="span3">
        <div class="widget">
            <h5 class="widgetheading">Clauses</h5>
            <ul class="link-list">
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'reference']); ?>">Références</a></li>
            <li><a href="#">Termes et conditions</a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'contrat']); ?>">Contrats de sousription</a></li>
            </ul>
        </div>
        </div>
        <div class="span3">
        <div class="widget">
            <h5 class="widgetheading">Nous joindre</h5>
            <address>
                            <strong>High Star Security</strong><br>
                            Marcory Résidentiel, 26 Bp 772 Abidjan 26<br>
                                Abidjan-Côte d'Ivoire
                        </address>
            <p>
            <i class="icon-phone"></i> Tél: 21 26 73 60 / fax: 21 00 50 30/29 <br>
            <i class="icon-envelope-alt"></i> infos.hss2012@gmail.com
            </p>
        </div>
        </div>
    </div>
    </div>
    <div id="sub-footer">
    <div class="container">
        <div class="row">
        <div class="span6">
            <div class="copyright">
            <p>
                <span>&copy; High Star Security - Tout droit réservé.</span>
                Développé par <a href="#">KENLO Business And Technologies</a>
            </p>
            <!--<div class="credits">
                Développé par <a href="#">KENLO Business And Technologies</a>
            </div>-->
            </div>
        </div>
        <!--<div class="span6">
            <ul class="social-network">
            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
            </ul>
        </div>-->
        </div>
    </div>
    </div>
</footer>


<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->
