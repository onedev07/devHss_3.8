<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partenaire $partenaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $partenaire->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partenaire->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Partenaires'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="partenaires form large-9 medium-8 columns content">
    <?= $this->Form->create($partenaire) ?>
    <fieldset>
        <legend><?= __('Edit Partenaire') ?></legend>
        <?php
            echo $this->Form->control('raisonsociale');
            echo $this->Form->control('password');
            echo $this->Form->control('tel');
            echo $this->Form->control('cel');
            echo $this->Form->control('email');
            echo $this->Form->control('bp');
            echo $this->Form->control('adresse');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
