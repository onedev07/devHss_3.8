<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande $demande
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Demandes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandes form large-9 medium-8 columns content">
    <?= $this->Form->create($demande) ?>
    <fieldset>
        <legend><?= __('Add Demande') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('periode_id', ['options' => $periodes, 'empty' => true]);
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
                    <h2>DEMANDE</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Demande de devis</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Etape 1</strong></h4>
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
                <h6> <strong>Ouvrez un compte</strong></h6>
            </div>
            <div class="form-group">
            <?= $this->Form->create($client) ?>
                <div class="span3">
                    <?php
                    echo $this->Form->control('offre_id', ['type' => 'hidden', 'id' => 'offre', 'value' => $offre->id]);
                    echo $this->Form->control('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre nom et prénoms...', 'label' => 'Nom et Prénoms :']);
                    echo $this->Form->control('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Entrez votre adresse email...', 'label' => 'Email :']);
                    echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Entrez votre mot de passe...', 'label' => 'Mot de passe :']);
                    echo $this->Form->control('cel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro cellulaire...', 'label' => 'N° Cellulaire :']);
                    echo $this->Form->control('tel', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre numéro de téléphone fixe...', 'label' => 'N° téléphone fixe :']);
                    echo $this->Form->control('web', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre site web...', 'label' => 'Site web :']);
                    ?>
                </div>
                <div class="span3">
                    <?php
                    echo $this->Form->control('bp', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre boîte postale...', 'label' => 'Boîte postale :']);
                    echo $this->Form->control('adresse', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Entrez votre adresse...', 'label' => 'Adresse :']);
                    echo $this->Form->control('localisation_site', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => 'Entrez votre la localisation du site à sécuriser...', 'label' => 'Localisation du site :']);
                    ?>
                    <?= $this->Form->button(__('Valider votre compte'), ['class'=>'btn btn-large btn-theme btn-danger btn-rounded']) ?>                    
                </div>            
            </div>
            <?= $this->Form->end() ?>
            <div class="span6">
                <table class="table table-striped">
                    <!-- <thead class="thead-dark">
                        <tr>
                            <th>
                                <h5><strong>Informations sur l'offre </strong></h5>
                            </th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                            <td>
                                <h4><strong>OFFRE SMART PROTECT</strong></h4>
                            </td>
                        </tr>
                        <tr>
                            <td name="offre">
                                <h3><strong style="color:#a00a0c" ><?= @h($offre->name) ?></strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <h6 style="color:#000000"> A partir de <strong><?= $this->Number->format($offre->prix) ?> FCFA / Mois</strong></h6>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>

<?php echo $this->Html->script('/js/calcul.js'); ?>



















