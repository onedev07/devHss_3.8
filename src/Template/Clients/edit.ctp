<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commentaires'), ['controller' => 'Commentaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commentaire'), ['controller' => 'Commentaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Edit Client') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('cel');
            echo $this->Form->control('tel');
            echo $this->Form->control('web');
            echo $this->Form->control('bp');
            echo $this->Form->control('adresse');
            echo $this->Form->control('localisation_site');
            echo $this->Form->control('offre_id', ['options' => $offres]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->


<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>PROFILE</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Mon Profile</strong></h4>
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
        
        <!-- Menu du profile -->
        <div class="row">
            <div class="span12">
                <?= $this->Html->link(__('Mon profile'), ['action' => 'view', $client->id], ['class'=> 'btn btn-success']) ?>
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
                <h6> <strong>Modifier mon profile</strong></h6>
            </div>
            <div class="form-group">
                <?= $this->Form->create($client) ?>
                <div class="span4">
                    <?php
                        // echo $this->Form->control('offre_id', ['options' => $offres, 'id' => 'offre', 'empty' => true, 'type' => 'hidden']);
                        echo $this->Form->control('name', ['class' => 'form-control span4', 'type' => 'text', 'label' => 'Nom et Prénoms :']);
                        echo $this->Form->control('email', ['class' => 'form-control span4', 'type' => 'email', 'label' => 'Email :']);
                        echo $this->Form->control('password', ['class' => 'form-control span4', 'type' => 'password', 'label' => 'Mot de passe :']);
                        echo $this->Form->control('cel', ['class' => 'form-control span4', 'type' => 'text', 'label' => 'N° Cellulaire :']);
                        echo $this->Form->control('tel', ['class' => 'form-control span4',  'type' => 'text',  'label' => 'N° téléphone fixe :']);
                    ?>
                </div>
                <div class="span4">
                    <?php
                        echo $this->Form->control('web', ['class' => 'form-control span4', 'name' => 'web', 'type' => 'text', 'label' => 'Site web :']);
                        echo $this->Form->control('bp', ['class' => 'form-control span4', 'name' => 'bp', 'type' => 'text', 'label' => 'Boîte postale :']);
                        echo $this->Form->control('adresse', ['class' => 'form-control span4', 'name' => 'adresse', 'type' => 'text', 'label' => 'Adresse :']);
                        echo $this->Form->control('localisation_site', ['class' => 'form-control span4', 'name' => 'localisation_site', 'type' => 'textarea', 'label' => 'Adresse du site à sécuriser :']);
                    ?>
                    <?= $this->Form->button(__('Modifier votre profile'), ['class'=>'btn btn-large btn-theme btn-danger btn-rounded']) ?>                
                </div>
                <?= $this->Form->end() ?>
            </div>
            
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->

