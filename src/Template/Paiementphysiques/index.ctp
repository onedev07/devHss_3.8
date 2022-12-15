<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique[]|\Cake\Collection\CollectionInterface $paiementphysiques
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['controller' => 'Physclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['controller' => 'Physclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiementphysiques index large-9 medium-8 columns content">
    <h3><?= __('Paiementphysiques') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('physclient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_debut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paiementphysiques as $paiementphysique): ?>
            <tr>
                <td><?= $this->Number->format($paiementphysique->id) ?></td>
                <td><?= $paiementphysique->has('physclient') ? $this->Html->link($paiementphysique->physclient->name, ['controller' => 'Physclients', 'action' => 'view', $paiementphysique->physclient->id]) : '' ?></td>
                <td><?= $paiementphysique->has('offre') ? $this->Html->link($paiementphysique->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiementphysique->offre->id]) : '' ?></td>
                <td><?= $paiementphysique->has('periode') ? $this->Html->link($paiementphysique->periode->name, ['controller' => 'Periodes', 'action' => 'view', $paiementphysique->periode->id]) : '' ?></td>
                <td><?= $this->Number->format($paiementphysique->montant) ?></td>
                <td><?= h($paiementphysique->date_debut) ?></td>
                <td><?= h($paiementphysique->date_fin) ?></td>
                <td><?= h($paiementphysique->created) ?></td>
                <td><?= h($paiementphysique->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paiementphysique->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiementphysique->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysique->id)]) ?>
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
