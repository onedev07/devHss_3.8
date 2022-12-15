<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsoffre $gpsoffre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gpsoffre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gpsoffre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gpspayments'), ['controller' => 'Gpspayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpspayment'), ['controller' => 'Gpspayments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gpsretourpaiements'), ['controller' => 'Gpsretourpaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gpsretourpaiement'), ['controller' => 'Gpsretourpaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gpsoffres form large-9 medium-8 columns content">
    <?= $this->Form->create($gpsoffre) ?>
    <fieldset>
        <legend><?= __('Edit Gpsoffre') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prix');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
