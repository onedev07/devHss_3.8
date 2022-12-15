<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart $offresmart
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offresmarts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Elementsmarts'), ['controller' => 'Elementsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementsmart'), ['controller' => 'Elementsmarts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionsmarts'), ['controller' => 'Souscriptionsmarts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptionsmart'), ['controller' => 'Souscriptionsmarts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresmarts form large-9 medium-8 columns content">
    <?= $this->Form->create($offresmart) ?>
    <fieldset>
        <legend><?= __('Add Offresmart') ?></legend>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des Offres smart protection</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Offresmarts', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des offres smart protection</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Créer une offre</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($offresmart) ?>
                <div class="form-group">
                    <?= $this->Form->control('name', ['type'=>'text', 'class'=>'form-control', 'label'=>'Nom de l\'offre:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('prix', ['type'=>'text', 'class'=>'form-control', 'label'=>'Prix de l\'offre:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('description', ['type'=>'textarea', 'class'=>'form-control', 'label'=>'Description:']);?>
                </div>

                <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Créer</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>




