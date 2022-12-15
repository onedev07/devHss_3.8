<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['controller' => 'Etatpaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['controller' => 'Etatpaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiements form large-9 medium-8 columns content">
    <?= $this->Form->create($paiement) ?>
    <fieldset>
        <legend><?= __('Edit Paiement') ?></legend>
        <?php
            echo $this->Form->control('refpay');
            echo $this->Form->control('session');
            echo $this->Form->control('payid');
            echo $this->Form->control('souscription_id', ['options' => $souscriptions, 'empty' => true]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('montant');
            echo $this->Form->control('tel');
            echo $this->Form->control('description');
            echo $this->Form->control('datepay');
            echo $this->Form->control('datefin', ['empty' => true]);
            echo $this->Form->control('timepay');
            echo $this->Form->control('canal');
            echo $this->Form->control('etatpaiement_id', ['options' => $etatpaiements, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Paiements</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Paiements', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des paiements</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cette offre', $paiement->id],
                ['confirm' => __('Voulez-vous supprimer ce paiement? # {0}?', $paiement->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le paiement</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($paiement) ?>
            <div class="form-group">
                <?= $this->Form->control('refpay', ['type' => 'text', 'class' => 'form-control', 'label' => 'Référence de paiement:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('session', ['class' => 'form-control', 'label' => 'Session:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('payid', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'ID du paiement:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('souscription_id', ['options' => $souscriptions, 'empty' => true, 'class' => 'form-control', 'label' => 'Souscription:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('client_id', ['options' => $souscriptions, 'empty' => true, 'class' => 'form-control', 'label' => 'Client:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('montant', ['class' => 'form-control', 'label' => 'Montant:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('tel', ['type' => 'text', 'class' => 'form-control', 'label' => 'Téléphone:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('description', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Description:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('datepay', ['class' => 'form-control', 'label' => 'Date de paiement:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('datefin', ['class' => 'form-control', 'label' => 'Date de fin:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('time', ['class' => 'form-control', 'label' => 'Heure de paiement:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('canal', ['type' => 'text', 'class' => 'form-control', 'label' => 'Opérateur:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('etatpaiement_id', ['options' => $etatpaiements, 'empty' => true, 'class' => 'form-control', 'label' => 'Etat du paiement:']); ?>
            </div>
			

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Ajouter</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>
