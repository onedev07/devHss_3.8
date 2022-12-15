<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenaire[]|\Cake\Collection\CollectionInterface $partenaires
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Partenaire'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partenaires index large-9 medium-8 columns content">
    <h3><?= __('Partenaires') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepartenaire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raisonsociale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partenaires as $partenaire): ?>
            <tr>
                <td><?= $this->Number->format($partenaire->id) ?></td>
                <td><?= h($partenaire->codepartenaire) ?></td>
                <td><?= h($partenaire->raisonsociale) ?></td>
                <td><?= h($partenaire->password) ?></td>
                <td><?= h($partenaire->tel) ?></td>
                <td><?= h($partenaire->cel) ?></td>
                <td><?= h($partenaire->email) ?></td>
                <td><?= h($partenaire->bp) ?></td>
                <td><?= h($partenaire->adresse) ?></td>
                <td><?= h($partenaire->created) ?></td>
                <td><?= h($partenaire->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partenaire->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partenaire->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partenaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partenaire->id)]) ?>
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
