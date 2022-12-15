<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenaire $partenaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partenaire'), ['action' => 'edit', $partenaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partenaire'), ['action' => 'delete', $partenaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partenaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partenaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partenaire'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partenaires view large-9 medium-8 columns content">
    <h3><?= h($partenaire->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codepartenaire') ?></th>
            <td><?= h($partenaire->codepartenaire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raisonsociale') ?></th>
            <td><?= h($partenaire->raisonsociale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($partenaire->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($partenaire->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cel') ?></th>
            <td><?= h($partenaire->cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($partenaire->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bp') ?></th>
            <td><?= h($partenaire->bp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($partenaire->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partenaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partenaire->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partenaire->modified) ?></td>
        </tr>
    </table>
</div>
