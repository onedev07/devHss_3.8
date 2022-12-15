<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Retourpaiement $retourpaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Retourpaiement'), ['action' => 'edit', $retourpaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Retourpaiement'), ['action' => 'delete', $retourpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $retourpaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Retourpaiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Retourpaiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="retourpaiements view large-9 medium-8 columns content">
    <h3><?= h($retourpaiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Refpay') ?></th>
            <td><?= h($retourpaiement->refpay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Session') ?></th>
            <td><?= h($retourpaiement->session) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payid') ?></th>
            <td><?= h($retourpaiement->payid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Devi') ?></th>
            <td><?= $retourpaiement->has('devi') ? $this->Html->link($retourpaiement->devi->id, ['controller' => 'Devis', 'action' => 'view', $retourpaiement->devi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $retourpaiement->has('client') ? $this->Html->link($retourpaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $retourpaiement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($retourpaiement->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($retourpaiement->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($retourpaiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($retourpaiement->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepay') ?></th>
            <td><?= h($retourpaiement->datepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($retourpaiement->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timepay') ?></th>
            <td><?= h($retourpaiement->timepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($retourpaiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($retourpaiement->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($retourpaiement->description)); ?>
    </div>
</div>
