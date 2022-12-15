<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsoffre[]|\Cake\Collection\CollectionInterface $gpsoffres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gpspayments'), ['controller' => 'Gpspayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpspayment'), ['controller' => 'Gpspayments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gpsretourpaiements'), ['controller' => 'Gpsretourpaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsretourpaiement'), ['controller' => 'Gpsretourpaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpsoffres index large-9 medium-8 columns content">
    <h3><?= __('Gpsoffres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gpsoffres as $gpsoffre): ?>
            <tr>
                <td><?= $this->Number->format($gpsoffre->id) ?></td>
                <td><?= h($gpsoffre->name) ?></td>
                <td><?= $this->Number->format($gpsoffre->prix) ?></td>
                <td><?= h($gpsoffre->created) ?></td>
                <td><?= h($gpsoffre->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gpsoffre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gpsoffre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gpsoffre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpsoffre->id)]) ?>
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
