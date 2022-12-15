<header>
    <div class="container ">
		<div class="row nomargin">
		
			<!-- <div class="span4 commercial">
				<span style="color:#9f090b; font-size:16px"><strong><i class="icon-phone"></i>SERVICE COMMERCIAL : 05 45 90 43 43 <br></strong></span>
			</div> -->
		
		
		
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

					<!-- Page Partenaires -->
					<!-- <li><a href="<?= $this->Url->build(['controller' => 'Partenaires', 'action' => 'index']); ?>">Partenaires</a></li> -->
					<li><a href="<?= $this->Url->build(['controller' => '', 'action' => '']); ?>">Partenaires</a></li>
					
					</ul>
					<i class="icon-phone-sign" style="color:#fc7a00; font-size:20px; font-width:bolder"></i><span style="color:#9f090b; font-size:16px"><strong>SERVICE COMMERCIAL : 27 22 59 57 21 / 05 45 90 43 43 / 01 72 61 86 09<br></strong></span>
				</div>
			
			</div>
			
			
			
			
			
			
		</div>
		<div class="row">
			<div class="span4">
				<div class="logo">
					<a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><?= $this->Html->image('New_logo.jpg', ['class' => 'logo', 'width' => '60%', 'height' => '60%']); ?></a>
					<!--<h1>Flat and trendy bootstrap template</h1>-->
					<!-- <strong><H5 style="color:#000000">PROTEGER - SERVIR - CONSEILLER</H5></strong> -->
				</div>
				<!-- <div class="slogan">
					<strong><H5 style="color:#000000">PROTEGER - SERVIR - CONSEILLER</H5></strong>
				</div> -->
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
