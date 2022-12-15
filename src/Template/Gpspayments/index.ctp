<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpspayment[]|\Cake\Collection\CollectionInterface $gpspayments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gpspayment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpspayments index large-9 medium-8 columns content">
    <h3><?= __('Gpspayments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gpsoffre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prixtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creadted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gpspayments as $gpspayment): ?>
            <tr>
                <td><?= $this->Number->format($gpspayment->id) ?></td>
                <td><?= $gpspayment->has('gpsoffre') ? $this->Html->link($gpspayment->gpsoffre->name, ['controller' => 'Gpsoffres', 'action' => 'view', $gpspayment->gpsoffre->id]) : '' ?></td>
                <td><?= $gpspayment->has('client') ? $this->Html->link($gpspayment->client->name, ['controller' => 'Clients', 'action' => 'view', $gpspayment->client->id]) : '' ?></td>
                <td><?= $gpspayment->has('periode') ? $this->Html->link($gpspayment->periode->name, ['controller' => 'Periodes', 'action' => 'view', $gpspayment->periode->id]) : '' ?></td>
                <td><?= $this->Number->format($gpspayment->prixtotal) ?></td>
                <td><?= h($gpspayment->creadted) ?></td>
                <td><?= h($gpspayment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gpspayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gpspayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gpspayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpspayment->id)]) ?>
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
