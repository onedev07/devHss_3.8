<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devi[]|\Cake\Collection\CollectionInterface $devis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Devi'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etats'), ['controller' => 'Etats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etat'), ['controller' => 'Etats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="devis index large-9 medium-8 columns content">
    <h3><?= __('Devis') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codedevis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materielinclus_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serviceinclus_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montanttotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($devis as $devi): ?>
            <tr>
                <td><?= $this->Number->format($devi->id) ?></td>
                <td><?= h($devi->codedevis) ?></td>
                <td><?= $devi->has('user') ? $this->Html->link($devi->user->name, ['controller' => 'Users', 'action' => 'view', $devi->user->id]) : '' ?></td>
                <td><?= $devi->has('client') ? $this->Html->link($devi->client->name, ['controller' => 'Clients', 'action' => 'view', $devi->client->id]) : '' ?></td>
                <td><?= $devi->has('offre') ? $this->Html->link($devi->offre->name, ['controller' => 'Offres', 'action' => 'view', $devi->offre->id]) : '' ?></td>
                <td><?= h($devi->materielinclus_id) ?></td>
                <td><?= h($devi->serviceinclus_id) ?></td>
                <td><?= $devi->has('periode') ? $this->Html->link($devi->periode->name, ['controller' => 'Periodes', 'action' => 'view', $devi->periode->id]) : '' ?></td>
                <td><?= h($devi->montanttotal) ?></td>
                <td><?= h($devi->datedebut) ?></td>
                <td><?= h($devi->datefin) ?></td>
                <td><?= $devi->has('etat') ? $this->Html->link($devi->etat->name, ['controller' => 'Etats', 'action' => 'view', $devi->etat->id]) : '' ?></td>
                <td><?= h($devi->created) ?></td>
                <td><?= h($devi->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $devi->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $devi->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $devi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devi->id)]) ?>
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
