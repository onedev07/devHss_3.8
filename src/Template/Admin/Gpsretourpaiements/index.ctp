<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsretourpaiement[]|\Cake\Collection\CollectionInterface $gpsretourpaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gpsretourpaiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpsretourpaiements index large-9 medium-8 columns content">
    <h3><?= __('Gpsretourpaiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refpay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('session') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gpsoffre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gpsretourpaiements as $gpsretourpaiement): ?>
            <tr>
                <td><?= $this->Number->format($gpsretourpaiement->id) ?></td>
                <td><?= h($gpsretourpaiement->refpay) ?></td>
                <td><?= h($gpsretourpaiement->session) ?></td>
                <td><?= h($gpsretourpaiement->payid) ?></td>
                <td><?= $gpsretourpaiement->has('gpsoffre') ? $this->Html->link($gpsretourpaiement->gpsoffre->name, ['controller' => 'Gpsoffres', 'action' => 'view', $gpsretourpaiement->gpsoffre->id]) : '' ?></td>
                <td><?= $gpsretourpaiement->has('client') ? $this->Html->link($gpsretourpaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $gpsretourpaiement->client->id]) : '' ?></td>
                <td><?= $this->Number->format($gpsretourpaiement->montant) ?></td>
                <td><?= h($gpsretourpaiement->tel) ?></td>
                <td><?= h($gpsretourpaiement->datepay) ?></td>
                <td><?= h($gpsretourpaiement->datefin) ?></td>
                <td><?= h($gpsretourpaiement->timepay) ?></td>
                <td><?= h($gpsretourpaiement->canal) ?></td>
                <td><?= h($gpsretourpaiement->created) ?></td>
                <td><?= h($gpsretourpaiement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gpsretourpaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gpsretourpaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gpsretourpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpsretourpaiement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
