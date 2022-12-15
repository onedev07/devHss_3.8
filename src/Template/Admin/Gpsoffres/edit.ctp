<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsoffre $gpsoffre
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</div> -->




<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des offres GPS</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'gpsoffres', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des offres GPS</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cette offre', $gpsoffre->id],
                ['confirm' => __('Voulez-vous supprimer cette offre GPS? # {0}?', $gpsoffre->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'offre GPS</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($gpsoffre) ?>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom de l\'offre GPS:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('prix', ['class' => 'form-control', 'label' => 'Prix de l\'offre GPS:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('description', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Description:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier l'offre GPS</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>
