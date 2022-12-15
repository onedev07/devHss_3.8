<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele $offretele
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offretele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offreteles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Elementteles'), ['controller' => 'Elementteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementtele'), ['controller' => 'Elementteles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offreteles form large-9 medium-8 columns content">
    <?= $this->Form->create($offretele) ?>
    <fieldset>
        <legend><?= __('Edit Offretele') ?></legend>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres télésurveillances</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                <a href=<?= $this->Url->build(['controller'=>'Offreteles', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des offres télésurveillances</span>
                </a>
                <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Supprimer cette offre', $offretele->id],
                ['confirm' => __('Voulez-vous supprimer cette offre? # {0}?', $offretele->id), 'class' => 'btn btn-danger']
                ) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'offre</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($offretele) ?>
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
                <span class="text">Modifier</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>







