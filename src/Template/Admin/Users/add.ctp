<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usergroups'), ['controller' => 'Usergroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usergroup'), ['controller' => 'Usergroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('usergroup_id', ['options' => $usergroups, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('cel');
            echo $this->Form->control('tel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des utilisateurs</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des utilisateurs</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ajouter un utilisateur</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($user) ?>
            <div class="form-group">
                <?= $this->Form->control('usergroup_id', ['options' => $usergroups, 'empty' => true, 'class' => 'form-control', 'label' => 'Nom du groupe:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom et pr??noms:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('username', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom d\'utilisateur:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'label' => 'Email:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('password', ['type' => 'password', 'class' => 'form-control', 'label' => 'Mot de passe:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('cel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N?? Cellulaire:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('tel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N?? Fixe:']); ?>
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
