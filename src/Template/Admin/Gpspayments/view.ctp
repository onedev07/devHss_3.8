<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpspayment $gpspayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gpspayment'), ['action' => 'edit', $gpspayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gpspayment'), ['action' => 'delete', $gpspayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpspayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gpspayments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpspayment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gpspayments view large-9 medium-8 columns content">
    <h3><?= h($gpspayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Gpsoffre') ?></th>
            <td><?= $gpspayment->has('gpsoffre') ? $this->Html->link($gpspayment->gpsoffre->name, ['controller' => 'Gpsoffres', 'action' => 'view', $gpspayment->gpsoffre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $gpspayment->has('client') ? $this->Html->link($gpspayment->client->name, ['controller' => 'Clients', 'action' => 'view', $gpspayment->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $gpspayment->has('periode') ? $this->Html->link($gpspayment->periode->name, ['controller' => 'Periodes', 'action' => 'view', $gpspayment->periode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gpspayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prixtotal') ?></th>
            <td><?= $this->Number->format($gpspayment->prixtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creadted') ?></th>
            <td><?= h($gpspayment->creadted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gpspayment->modified) ?></td>
        </tr>
    </table>
</div>
