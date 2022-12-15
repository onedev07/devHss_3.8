<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande $demande
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demande'), ['action' => 'edit', $demande->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demande'), ['action' => 'delete', $demande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demande->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demandes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demandes view large-9 medium-8 columns content">
    <h3><?= h($demande->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $demande->has('client') ? $this->Html->link($demande->client->name, ['controller' => 'Clients', 'action' => 'view', $demande->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $demande->has('offre') ? $this->Html->link($demande->offre->name, ['controller' => 'Offres', 'action' => 'view', $demande->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $demande->has('periode') ? $this->Html->link($demande->periode->name, ['controller' => 'Periodes', 'action' => 'view', $demande->periode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demande->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($demande->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($demande->modified) ?></td>
        </tr>
    </table>
</div>
