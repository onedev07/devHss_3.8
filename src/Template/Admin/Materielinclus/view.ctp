<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materielinclus'), ['action' => 'edit', $materielinclus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materielinclus'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materielinclus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materielinclus view large-9 medium-8 columns content">
    <h3><?= h($materielinclus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($materielinclus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materielinclus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($materielinclus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($materielinclus->modified) ?></td>
        </tr>
    </table>
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des matériels inclus</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des matériels inclus'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Créer un matériel'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $materielinclus->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Voulez-vous supprimer cet matériel? # {0}?', $materielinclus->id), 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($materielinclus->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($materielinclus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($materielinclus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($materielinclus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($materielinclus->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>


</div>
