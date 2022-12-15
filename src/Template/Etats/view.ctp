<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etat $etat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etat'), ['action' => 'edit', $etat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etat'), ['action' => 'delete', $etat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etat'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etats view large-9 medium-8 columns content">
    <h3><?= h($etat->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($etat->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etat->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($etat->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($etat->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Devis') ?></h4>
        <?php if (!empty($etat->devis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Codedevis') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Materielinclus Id') ?></th>
                <th scope="col"><?= __('Serviceinclus Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Montanttotal') ?></th>
                <th scope="col"><?= __('Datedebut') ?></th>
                <th scope="col"><?= __('Datefin') ?></th>
                <th scope="col"><?= __('Etat Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($etat->devis as $devis): ?>
            <tr>
                <td><?= h($devis->id) ?></td>
                <td><?= h($devis->codedevis) ?></td>
                <td><?= h($devis->user_id) ?></td>
                <td><?= h($devis->client_id) ?></td>
                <td><?= h($devis->offre_id) ?></td>
                <td><?= h($devis->materielinclus_id) ?></td>
                <td><?= h($devis->serviceinclus_id) ?></td>
                <td><?= h($devis->periode_id) ?></td>
                <td><?= h($devis->montanttotal) ?></td>
                <td><?= h($devis->datedebut) ?></td>
                <td><?= h($devis->datefin) ?></td>
                <td><?= h($devis->etat_id) ?></td>
                <td><?= h($devis->created) ?></td>
                <td><?= h($devis->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Devis', 'action' => 'view', $devis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Devis', 'action' => 'edit', $devis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Devis', 'action' => 'delete', $devis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
