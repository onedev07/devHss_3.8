<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique $paiementphysique
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paiementphysique->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysique->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['controller' => 'Physclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['controller' => 'Physclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiementphysiques form large-9 medium-8 columns content">
    <?= $this->Form->create($paiementphysique) ?>
    <fieldset>
        <legend><?= __('Edit Paiementphysique') ?></legend>
        <?php
            echo $this->Form->control('physclient_id', ['options' => $physclients]);
            echo $this->Form->control('offre_id', ['options' => $offres]);
            echo $this->Form->control('periode_id', ['options' => $periodes]);
            echo $this->Form->control('montant');
            echo $this->Form->control('date_debut');
            echo $this->Form->control('date_fin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Paiements Physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!-- <a href=<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des paiements physiques</span>
            </a> -->
			<a href=<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des paiements physiques</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cette offre', $paiementphysique->id],
                ['confirm' => __('Voulez-vous supprimer ce paiement? # {0}?', $paiementphysique->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">MODIFIER LE PAIEMENT PHYSIQUE</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($paiementphysique) ?>
            <div class="form-group">
                <?= $this->Form->control('physclient_id', ['options' => $physclients, 'class' => 'form-control', 'label' => 'Nom et Prénoms du Client:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('offre_id', ['options' => $offres, 'class' => 'form-control', 'label' => 'Offre:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('periode_id', ['options' => $periodes, 'class' => 'form-control', 'label' => 'Durée de l\'offre:']); ?>
            </div>			
			<div class="form-group">
                <?= $this->Form->control('montant', ['class' => 'form-control', 'label' => 'Montant:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('date_debut', ['type' => 'text', 'class' => 'form-control', 'label' => 'Date de début:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('date_fin', ['type' => 'text', 'class' => 'form-control', 'label' => 'Date de fin:']); ?>
            </div>			

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>

