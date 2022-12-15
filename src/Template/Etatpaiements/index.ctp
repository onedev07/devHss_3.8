<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement[]|\Cake\Collection\CollectionInterface $etatpaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etatpaiements index large-9 medium-8 columns content">
    <h3><?= __('Etatpaiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etatpaiements as $etatpaiement): ?>
            <tr>
                <td><?= $this->Number->format($etatpaiement->id) ?></td>
                <td><?= h($etatpaiement->name) ?></td>
                <td><?= h($etatpaiement->created) ?></td>
                <td><?= h($etatpaiement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etatpaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etatpaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]) ?>
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
