<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsretourpaiement $gpsretourpaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gpsretourpaiement'), ['action' => 'edit', $gpsretourpaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gpsretourpaiement'), ['action' => 'delete', $gpsretourpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpsretourpaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gpsretourpaiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpsretourpaiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gpsretourpaiements view large-9 medium-8 columns content">
    <h3><?= h($gpsretourpaiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Refpay') ?></th>
            <td><?= h($gpsretourpaiement->refpay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Session') ?></th>
            <td><?= h($gpsretourpaiement->session) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payid') ?></th>
            <td><?= h($gpsretourpaiement->payid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gpsoffre') ?></th>
            <td><?= $gpsretourpaiement->has('gpsoffre') ? $this->Html->link($gpsretourpaiement->gpsoffre->name, ['controller' => 'Gpsoffres', 'action' => 'view', $gpsretourpaiement->gpsoffre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $gpsretourpaiement->has('client') ? $this->Html->link($gpsretourpaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $gpsretourpaiement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($gpsretourpaiement->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($gpsretourpaiement->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gpsretourpaiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($gpsretourpaiement->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepay') ?></th>
            <td><?= h($gpsretourpaiement->datepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($gpsretourpaiement->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timepay') ?></th>
            <td><?= h($gpsretourpaiement->timepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gpsretourpaiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gpsretourpaiement->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($gpsretourpaiement->description)); ?>
    </div>
</div>
