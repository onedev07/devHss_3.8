<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient $physclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Physclient'), ['action' => 'edit', $physclient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Physclient'), ['action' => 'delete', $physclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Physclients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Physclient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="physclients view large-9 medium-8 columns content">
    <h3><?= h($physclient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($physclient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenoms') ?></th>
            <td><?= h($physclient->prenoms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($physclient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cel') ?></th>
            <td><?= h($physclient->cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($physclient->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($physclient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($physclient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($physclient->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Adresse') ?></h4>
        <?= $this->Text->autoParagraph(h($physclient->adresse)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paiementphysiques') ?></h4>
        <?php if (!empty($physclient->paiementphysiques)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Physclient Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Montant') ?></th>
                <th scope="col"><?= __('Date Debut') ?></th>
                <th scope="col"><?= __('Date Fin') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($physclient->paiementphysiques as $paiementphysiques): ?>
            <tr>
                <td><?= h($paiementphysiques->id) ?></td>
                <td><?= h($paiementphysiques->physclient_id) ?></td>
                <td><?= h($paiementphysiques->offre_id) ?></td>
                <td><?= h($paiementphysiques->periode_id) ?></td>
                <td><?= h($paiementphysiques->montant) ?></td>
                <td><?= h($paiementphysiques->date_debut) ?></td>
                <td><?= h($paiementphysiques->date_fin) ?></td>
                <td><?= h($paiementphysiques->created) ?></td>
                <td><?= h($paiementphysiques->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiementphysiques', 'action' => 'view', $paiementphysiques->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiementphysiques', 'action' => 'edit', $paiementphysiques->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiementphysiques', 'action' => 'delete', $paiementphysiques->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysiques->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
