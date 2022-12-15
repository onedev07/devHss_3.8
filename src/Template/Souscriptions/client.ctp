<?= $this->element('header'); ?>

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
                <h4><strong>Souscrire à un abonnement</strong></h4>
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
                <h6> <strong>Informations du client</strong></h6>
            </div>
            <?= $this->Form->create($client) ?>
            <div class="span6 form-group">
                <?php
                echo $this->Form->control('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre nom et prénoms...', 'label' => 'Nom et Prénoms :']);
                echo $this->Form->control('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Entrez votre adresse email...', 'label' => 'Email :']);
                echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Entrez votre mot de passe...', 'label' => 'Mot de passe :']);
                echo $this->Form->control('cel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro cellulaire...', 'label' => 'N° Cellulaire :']);
                echo $this->Form->control('tel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro de téléphone fixe...', 'label' => 'N° téléphone fixe :']);
                echo $this->Form->control('web', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre site web...', 'label' => 'Site web :']);
                ?>
            </div>
            <div class="span6 form-group">
                <?php
                echo $this->Form->control('bp', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre boîte postale...', 'label' => 'Boîte postale :']);
                echo $this->Form->control('adresse', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre adresse...', 'label' => 'Adresse :']);
                echo $this->Form->control('localisation_site', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => 'Entrez votre la localisation du site à sécuriser...', 'label' => 'Localisation du site :']);
                ?>
            <?= $this->Form->button(__('Valider vos informations')) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>

<?php echo $this->Html->script('/js/calcul.js'); ?>