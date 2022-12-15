<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpspayment $gpspayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gpspayment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gpspayment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gpspayments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['controller' => 'Gpsoffres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['controller' => 'Gpsoffres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpspayments form large-9 medium-8 columns content">
    <?= $this->Form->create($gpspayment) ?>
    <fieldset>
        <legend><?= __('Edit Gpspayment') ?></legend>
        <?php
            echo $this->Form->control('gpsoffre_id', ['options' => $gpsoffres, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('periode_id', ['options' => $periodes, 'empty' => true]);
            echo $this->Form->control('prixtotal');
            echo $this->Form->control('creadted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
