<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devi $devi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Devi'), ['action' => 'edit', $devi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Devi'), ['action' => 'delete', $devi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Devis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Devi'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etats'), ['controller' => 'Etats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etat'), ['controller' => 'Etats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="devis view large-9 medium-8 columns content">
    <h3><?= h($devi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codedevis') ?></th>
            <td><?= h($devi->codedevis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $devi->has('user') ? $this->Html->link($devi->user->name, ['controller' => 'Users', 'action' => 'view', $devi->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $devi->has('client') ? $this->Html->link($devi->client->name, ['controller' => 'Clients', 'action' => 'view', $devi->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $devi->has('offre') ? $this->Html->link($devi->offre->name, ['controller' => 'Offres', 'action' => 'view', $devi->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materielinclus Id') ?></th>
            <td><?= h($devi->materielinclus_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serviceinclus Id') ?></th>
            <td><?= h($devi->serviceinclus_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $devi->has('periode') ? $this->Html->link($devi->periode->name, ['controller' => 'Periodes', 'action' => 'view', $devi->periode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montanttotal') ?></th>
            <td><?= h($devi->montanttotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat') ?></th>
            <td><?= $devi->has('etat') ? $this->Html->link($devi->etat->name, ['controller' => 'Etats', 'action' => 'view', $devi->etat->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($devi->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($devi->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($devi->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($devi->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($devi->modified) ?></td>
        </tr>
    </table>
</div>
