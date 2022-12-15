<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Retourpaiement[]|\Cake\Collection\CollectionInterface $retourpaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Retourpaiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="retourpaiements index large-9 medium-8 columns content">
    <h3><?= __('Retourpaiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refpay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('session') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('devi_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($retourpaiements as $retourpaiement): ?>
            <tr>
                <td><?= $this->Number->format($retourpaiement->id) ?></td>
                <td><?= h($retourpaiement->refpay) ?></td>
                <td><?= h($retourpaiement->session) ?></td>
                <td><?= h($retourpaiement->payid) ?></td>
                <td><?= $retourpaiement->has('devi') ? $this->Html->link($retourpaiement->devi->id, ['controller' => 'Devis', 'action' => 'view', $retourpaiement->devi->id]) : '' ?></td>
                <td><?= $retourpaiement->has('client') ? $this->Html->link($retourpaiement->client->name, ['controller' => 'Clients', 'action' => 'view', $retourpaiement->client->id]) : '' ?></td>
                <td><?= $this->Number->format($retourpaiement->montant) ?></td>
                <td><?= h($retourpaiement->tel) ?></td>
                <td><?= h($retourpaiement->datepay) ?></td>
                <td><?= h($retourpaiement->datefin) ?></td>
                <td><?= h($retourpaiement->timepay) ?></td>
                <td><?= h($retourpaiement->canal) ?></td>
                <td><?= h($retourpaiement->created) ?></td>
                <td><?= h($retourpaiement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $retourpaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $retourpaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $retourpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $retourpaiement->id)]) ?>
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
