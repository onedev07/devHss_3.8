<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compte'), ['action' => 'edit', $compte->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compte'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comptes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compte'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comptes view large-9 medium-8 columns content">
    <h3><?= h($compte->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($compte->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($compte->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $compte->has('client') ? $this->Html->link($compte->client->name, ['controller' => 'Clients', 'action' => 'view', $compte->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compte->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($compte->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($compte->modified) ?></td>
        </tr>
    </table>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des groupes d'utilisateurs</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12">
            <?= $this->Html->link(__('Liste des Comptes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Créer un Compte'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $compte->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $compte->id], ['confirm' => __('Voulez-vous supprimer le compte? # {0}?', $compte->id), 'class' => 'btn btn-danger']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($compte->id) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Pseudo') ?></th>
                    <td><?= h($compte->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mot de passe') ?></th>
                    <td><?= h($compte->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $compte->has('client') ? $this->Html->link($compte->client->name, ['controller' => 'Clients', 'action' => 'view', $compte->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($compte->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($compte->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($compte->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>


</div>




