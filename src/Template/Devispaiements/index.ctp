<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devispaiement[]|\Cake\Collection\CollectionInterface $devispaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Devispaiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="devispaiements index large-9 medium-8 columns content">
    <h3><?= __('Devispaiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('devi_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mttc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creadted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($devispaiements as $devispaiement): ?>
            <tr>
                <td><?= $this->Number->format($devispaiement->id) ?></td>
                <td><?= $devispaiement->has('devi') ? $this->Html->link($devispaiement->devi->id, ['controller' => 'Devis', 'action' => 'view', $devispaiement->devi->id]) : '' ?></td>
                <td><?= $devispaiement->has('client') ? $this->Html->link($devispaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $devispaiement->client->id]) : '' ?></td>
                <td><?= $this->Number->format($devispaiement->mttc) ?></td>
                <td><?= h($devispaiement->date) ?></td>
                <td><?= h($devispaiement->creadted) ?></td>
                <td><?= h($devispaiement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $devispaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $devispaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $devispaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devispaiement->id)]) ?>
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
