<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devi $devi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Devis'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etats'), ['controller' => 'Etats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etat'), ['controller' => 'Etats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="devis form large-9 medium-8 columns content">
    <?= $this->Form->create($devi) ?>
    <fieldset>
        <legend><?= __('Add Devi') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
            echo $this->Form->control('materielinclus_id');
            echo $this->Form->control('serviceinclus_id');
            echo $this->Form->control('periode_id', ['options' => $periodes, 'empty' => true]);
            echo $this->Form->control('montanttotal');
            echo $this->Form->control('datedebut', ['empty' => true]);
            echo $this->Form->control('datefin', ['empty' => true]);
            echo $this->Form->control('etat_id', ['options' => $etats, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
