<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comptes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comptes form large-9 medium-8 columns content">
    <?= $this->Form->create($compte) ?>
    <fieldset>
        <legend><?= __('Edit Compte') ?></legend>
        <?php
            echo $this->Form->control('login');
            echo $this->Form->control('password');
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des comptes clients</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                <a href=<?= $this->Url->build(['controller'=>'Comptes', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des comptes clients</span>
                </a>
                <?= $this->Form->postLink(
                __('Supprimer ce compte'),
                ['action' => 'delete', $compte->id],
                ['confirm' => __('Voulez-vous supprimer cet compte? # {0}?', $compte->id), 'class' => 'btn btn-danger']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le compte client</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($compte) ?>
                <div class="form-group">
                    <?= $this->Form->control('login', ['type'=>'text', 'class'=>'form-control', 'label'=>'Pseudo client:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password', ['type'=>'password', 'class'=>'form-control', 'label'=>'Mot de passe:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('client_id', ['options' => $clients, 'empty' => true, 'class'=>'form-control', 'label'=>'Client:']);?>
                </div> 

                <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
                </button>

                <button class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-times-circle "></i>
                </span>
                <span class="text">Annuler</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>




