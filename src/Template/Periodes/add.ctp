<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periode $periode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodes form large-9 medium-8 columns content">
    <?= $this->Form->create($periode) ?>
    <fieldset>
        <legend><?= __('Add Periode') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('nbmois');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
