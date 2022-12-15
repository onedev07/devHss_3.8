<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsretourpaiement $gpsretourpaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gpsretourpaiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpsretourpaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($gpsretourpaiement) ?>
    <fieldset>
        <legend><?= __('Add Gpsretourpaiement') ?></legend>
        <?php
            echo $this->Form->control('refpay');
            echo $this->Form->control('session');
            echo $this->Form->control('payid');
            echo $this->Form->control('gpsoffre_id', ['options' => $gpsoffres, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('montant');
            echo $this->Form->control('tel');
            echo $this->Form->control('description');
            echo $this->Form->control('datepay');
            echo $this->Form->control('datefin', ['empty' => true]);
            echo $this->Form->control('timepay');
            echo $this->Form->control('canal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
