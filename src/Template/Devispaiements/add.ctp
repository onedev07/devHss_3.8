<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devispaiement $devispaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Devispaiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Devis'), ['controller' => 'Devis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Devi'), ['controller' => 'Devis', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="devispaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($devispaiement) ?>
    <fieldset>
        <legend><?= __('Add Devispaiement') ?></legend>
        <?php
            echo $this->Form->control('devi_id', ['options' => $devis, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('mttc');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('creadted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
