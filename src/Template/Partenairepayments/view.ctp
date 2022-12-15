<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenairepayment $partenairepayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partenairepayment'), ['action' => 'edit', $partenairepayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partenairepayment'), ['action' => 'delete', $partenairepayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partenairepayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partenairepayments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partenairepayment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partenaires'), ['controller' => 'Partenaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partenaire'), ['controller' => 'Partenaires', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partenairepayments view large-9 medium-8 columns content">
    <h3><?= h($partenairepayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $partenairepayment->has('offre') ? $this->Html->link($partenairepayment->offre->name, ['controller' => 'Offres', 'action' => 'view', $partenairepayment->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $partenairepayment->has('client') ? $this->Html->link($partenairepayment->client->name, ['controller' => 'Clients', 'action' => 'view', $partenairepayment->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partenaire') ?></th>
            <td><?= $partenairepayment->has('partenaire') ? $this->Html->link($partenairepayment->partenaire->id, ['controller' => 'Partenaires', 'action' => 'view', $partenairepayment->partenaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perioed Id') ?></th>
            <td><?= h($partenairepayment->perioed_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prixtotal') ?></th>
            <td><?= h($partenairepayment->prixtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partenairepayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($partenairepayment->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($partenairepayment->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partenairepayment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partenairepayment->modified) ?></td>
        </tr>
    </table>
</div>
