<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient $physclient
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $physclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="physclients form large-9 medium-8 columns content">
    <?= $this->Form->create($physclient) ?>
    <fieldset>
        <legend><?= __('Edit Physclient') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prenoms');
            echo $this->Form->control('email');
            echo $this->Form->control('cel');
            echo $this->Form->control('tel');
            echo $this->Form->control('adresse');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Clients Physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!-- <a href=<?= $this->Url->build(['controller' => 'Physclients', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des paiements physiques</span>
            </a> -->
			<a href=<?= $this->Url->build(['controller' => 'Physclients', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des clients physiques</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cette offre', $physclient->id],
                ['confirm' => __('Voulez-vous supprimer ce client? # {0}?', $physclient->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le client physique</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($physclient) ?>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('prenoms', ['tyte' => 'hidden', 'class' => 'form-control', 'label' => 'Prénoms:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('email', ['tyte' => 'email', 'class' => 'form-control', 'label' => 'Email:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('cel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N°Cellulaire:']); ?>
            </div>			
			<div class="form-group">
                <?= $this->Form->control('tel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N° Téléphone:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('adresse', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Adresse:']); ?>
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


