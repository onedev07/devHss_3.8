<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenairepayment[]|\Cake\Collection\CollectionInterface $partenairepayments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Partenairepayment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partenaires'), ['controller' => 'Partenaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partenaire'), ['controller' => 'Partenaires', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partenairepayments index large-9 medium-8 columns content">
    <h3><?= __('Partenairepayments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('partenaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perioed_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prixtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partenairepayments as $partenairepayment): ?>
            <tr>
                <td><?= $this->Number->format($partenairepayment->id) ?></td>
                <td><?= $partenairepayment->has('offre') ? $this->Html->link($partenairepayment->offre->name, ['controller' => 'Offres', 'action' => 'view', $partenairepayment->offre->id]) : '' ?></td>
                <td><?= $partenairepayment->has('client') ? $this->Html->link($partenairepayment->client->name, ['controller' => 'Clients', 'action' => 'view', $partenairepayment->client->id]) : '' ?></td>
                <td><?= $partenairepayment->has('partenaire') ? $this->Html->link($partenairepayment->partenaire->id, ['controller' => 'Partenaires', 'action' => 'view', $partenairepayment->partenaire->id]) : '' ?></td>
                <td><?= h($partenairepayment->perioed_id) ?></td>
                <td><?= h($partenairepayment->prixtotal) ?></td>
                <td><?= h($partenairepayment->datedebut) ?></td>
                <td><?= h($partenairepayment->datefin) ?></td>
                <td><?= h($partenairepayment->created) ?></td>
                <td><?= h($partenairepayment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partenairepayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partenairepayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partenairepayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partenairepayment->id)]) ?>
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
