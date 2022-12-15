<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devispaiement $devispaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Devispaiement'), ['action' => 'edit', $devispaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Devispaiement'), ['action' => 'delete', $devispaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devispaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Devispaiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Devispaiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="devispaiements view large-9 medium-8 columns content">
    <h3><?= h($devispaiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Devi') ?></th>
            <td><?= $devispaiement->has('devi') ? $this->Html->link($devispaiement->devi->id, ['controller' => 'Devis', 'action' => 'view', $devispaiement->devi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $devispaiement->has('client') ? $this->Html->link($devispaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $devispaiement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($devispaiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mttc') ?></th>
            <td><?= $this->Number->format($devispaiement->mttc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($devispaiement->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creadted') ?></th>
            <td><?= h($devispaiement->creadted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($devispaiement->modified) ?></td>
        </tr>
    </table>
</div>
