<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient[]|\Cake\Collection\CollectionInterface $physclients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="physclients index large-9 medium-8 columns content">
    <h3><?= __('Physclients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenoms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($physclients as $physclient): ?>
            <tr>
                <td><?= $this->Number->format($physclient->id) ?></td>
                <td><?= h($physclient->name) ?></td>
                <td><?= h($physclient->prenoms) ?></td>
                <td><?= h($physclient->email) ?></td>
                <td><?= h($physclient->cel) ?></td>
                <td><?= h($physclient->tel) ?></td>
                <td><?= h($physclient->created) ?></td>
                <td><?= h($physclient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $physclient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $physclient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $physclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]) ?>
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
