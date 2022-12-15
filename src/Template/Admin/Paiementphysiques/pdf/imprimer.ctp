<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique $paiementphysique
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiementphysique'), ['action' => 'edit', $paiementphysique->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiementphysique'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysique->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Physclients'), ['controller' => 'Physclients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Physclient'), ['controller' => 'Physclients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paiementphysiques view large-9 medium-8 columns content">
    <h3><?= h($paiementphysique->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Physclient') ?></th>
            <td><?= $paiementphysique->has('physclient') ? $this->Html->link($paiementphysique->physclient->name, ['controller' => 'Physclients', 'action' => 'view', $paiementphysique->physclient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $paiementphysique->has('offre') ? $this->Html->link($paiementphysique->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiementphysique->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $paiementphysique->has('periode') ? $this->Html->link($paiementphysique->periode->name, ['controller' => 'Periodes', 'action' => 'view', $paiementphysique->periode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paiementphysique->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($paiementphysique->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Debut') ?></th>
            <td><?= h($paiementphysique->date_debut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Fin') ?></th>
            <td><?= h($paiementphysique->date_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paiementphysique->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paiementphysique->modified) ?></td>
        </tr>
    </table>
</div> -->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des paiements physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des paiements physiques'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Effectuer un nouveau paiement physique'), ['action' => 'etape1'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $paiementphysique->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Voulez-vous supprimer le paiement? # {0}?', $paiementphysique->id), 'class' => 'btn btn-danger']) ?>
			<?= $this->Html->link(__('Imprimer le reçu'), ['action' => 'edit', $paiementphysique->id], ['class' => 'btn btn-dark']) ?>
            
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary"><?= h($offre->name) ?></h6> -->
			<h6 class="m-0 font-weight-bold text-primary"><strong>DETAILS DE L'ABONNEMENT</strong></h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
				<tr>
					<th scope="row"><?= __('Nom et Prénom du client :') ?></th>
					<td><?= $paiementphysique->has('physclient') ? $this->Html->link($paiementphysique->physclient->name, ['controller' => 'Physclients', 'action' => 'view', $paiementphysique->physclient->id]) : '' ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Offre souscrite :') ?></th>
					<td><?= $paiementphysique->has('offre') ? $this->Html->link($paiementphysique->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiementphysique->offre->id]) : '' ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Durée d\'abonnement :') ?></th>
					<td><?= $paiementphysique->has('periode') ? $this->Html->link($paiementphysique->periode->name, ['controller' => 'Periodes', 'action' => 'view', $paiementphysique->periode->id]) : '' ?></td>
				</tr>
				<!-- <tr>
					<th scope="row"><?= __('Id') ?></th>
					<td><?= $this->Number->format($paiementphysique->id) ?></td>
				</tr> -->
				<tr>
					<th scope="row"><?= __('Montant total de l\'abonnement :') ?></th>
					<td><?= $this->Number->format($paiementphysique->montant) ?> FCFA</td>
				</tr>
				<tr>
					<th scope="row"><?= __('Date d\'abonnement :') ?></th>
					<td><?= h($paiementphysique->date_debut) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Date de fin d\'abonnement :') ?></th>
					<td><?= h($paiementphysique->date_fin) ?></td>
				</tr>
				<!-- <tr>
					<th scope="row"><?= __('Created') ?></th>
					<td><?= h($paiementphysique->created) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Modified') ?></th>
					<td><?= h($paiementphysique->modified) ?></td>
				</tr> -->
			</table>            
            
        </div>
    </div>


</div>



