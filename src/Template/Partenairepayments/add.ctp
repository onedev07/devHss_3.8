<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenairepayment $partenairepayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Partenairepayments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partenaires'), ['controller' => 'Partenaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partenaire'), ['controller' => 'Partenaires', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partenairepayments form large-9 medium-8 columns content">
    <?= $this->Form->create($partenairepayment) ?>
    <fieldset>
        <legend><?= __('Add Partenairepayment') ?></legend>
        <?php
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('partenaire_id', ['options' => $partenaires, 'empty' => true]);
            echo $this->Form->control('perioed_id');
            echo $this->Form->control('prixtotal');
            echo $this->Form->control('datedebut', ['empty' => true]);
            echo $this->Form->control('datefin', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
