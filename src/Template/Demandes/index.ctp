<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande[]|\Cake\Collection\CollectionInterface $demandes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demande'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandes index large-9 medium-8 columns content">
    <h3><?= __('Demandes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandes as $demande): ?>
            <tr>
                <td><?= $this->Number->format($demande->id) ?></td>
                <td><?= $demande->has('client') ? $this->Html->link($demande->client->name, ['controller' => 'Clients', 'action' => 'view', $demande->client->id]) : '' ?></td>
                <td><?= $demande->has('offre') ? $this->Html->link($demande->offre->name, ['controller' => 'Offres', 'action' => 'view', $demande->offre->id]) : '' ?></td>
                <td><?= $demande->has('periode') ? $this->Html->link($demande->periode->name, ['controller' => 'Periodes', 'action' => 'view', $demande->periode->id]) : '' ?></td>
                <td><?= h($demande->created) ?></td>
                <td><?= h($demande->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demande->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demande->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demande->id)]) ?>
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
