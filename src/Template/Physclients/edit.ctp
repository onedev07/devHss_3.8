<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient $physclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $physclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="physclients form large-9 medium-8 columns content">
    <?= $this->Form->create($physclient) ?>
    <fieldset>
        <legend><?= __('Edit Physclient') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prenoms');
            echo $this->Form->control('email');
            echo $this->Form->control('cel');
            echo $this->Form->control('tel');
            echo $this->Form->control('adresse');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
