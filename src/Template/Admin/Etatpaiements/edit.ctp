<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement $etatpaiement
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etatpaiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etatpaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($etatpaiement) ?>
    <fieldset>
        <legend><?= __('Edit Etatpaiement') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des états de paiement</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'Etatpaiements', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des états de paiement</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cet élément', $etatpaiement->id],
                ['confirm' => __('Voulez-vous supprimer cet état? # {0}?', $etatpaiement->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'état</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($etatpaiement) ?>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom de l\'état:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>
