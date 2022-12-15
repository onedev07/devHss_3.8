<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offres form large-9 medium-8 columns content">
    <?= $this->Form->create($offre) ?>
    <fieldset>
        <legend><?= __('Add Offre') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prix');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Offres</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des offres</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter une offre</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($offre) ?>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom de l\'offre:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('prix', ['class' => 'form-control', 'label' => 'Prix de l\'offre:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('description', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Description:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Ajouter</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>
