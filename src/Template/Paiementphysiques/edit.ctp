<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique $paiementphysique
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paiementphysique->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysique->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['controller' => 'Physclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['controller' => 'Physclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiementphysiques form large-9 medium-8 columns content">
    <?= $this->Form->create($paiementphysique) ?>
    <fieldset>
        <legend><?= __('Edit Paiementphysique') ?></legend>
        <?php
            echo $this->Form->control('physclient_id', ['options' => $physclients]);
            echo $this->Form->control('offre_id', ['options' => $offres]);
            echo $this->Form->control('periode_id', ['options' => $periodes]);
            echo $this->Form->control('montant');
            echo $this->Form->control('date_debut');
            echo $this->Form->control('date_fin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
