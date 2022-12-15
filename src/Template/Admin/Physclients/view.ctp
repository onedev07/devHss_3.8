<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient $physclient
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Physclient'), ['action' => 'edit', $physclient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Physclient'), ['action' => 'delete', $physclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Physclients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Physclient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="physclients view large-9 medium-8 columns content">
    <h3><?= h($physclient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($physclient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenoms') ?></th>
            <td><?= h($physclient->prenoms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($physclient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cel') ?></th>
            <td><?= h($physclient->cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($physclient->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($physclient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($physclient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($physclient->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Adresse') ?></h4>
        <?= $this->Text->autoParagraph(h($physclient->adresse)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paiementphysiques') ?></h4>
        <?php if (!empty($physclient->paiementphysiques)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Physclient Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Montant') ?></th>
                <th scope="col"><?= __('Date Debut') ?></th>
                <th scope="col"><?= __('Date Fin') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($physclient->paiementphysiques as $paiementphysiques): ?>
            <tr>
                <td><?= h($paiementphysiques->id) ?></td>
                <td><?= h($paiementphysiques->physclient_id) ?></td>
                <td><?= h($paiementphysiques->offre_id) ?></td>
                <td><?= h($paiementphysiques->periode_id) ?></td>
                <td><?= h($paiementphysiques->montant) ?></td>
                <td><?= h($paiementphysiques->date_debut) ?></td>
                <td><?= h($paiementphysiques->date_fin) ?></td>
                <td><?= h($paiementphysiques->created) ?></td>
                <td><?= h($paiementphysiques->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiementphysiques', 'action' => 'view', $paiementphysiques->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiementphysiques', 'action' => 'edit', $paiementphysiques->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiementphysiques', 'action' => 'delete', $paiementphysiques->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysiques->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div> -->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des clients physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des clients physiques'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <!-- <?= $this->Html->link(__('Ajouter un client physique'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?> -->
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $physclient->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $physclient->id], ['confirm' => __('Voulez-vous supprimer le client? # {0}?', $physclient->id), 'class' => 'btn btn-danger']) ?>
			<?= $this->Html->link(__('Réabonner le Client'), ['controller' => 'Paiementphysiques', 'action' => 'etape2', $physclient->id], ['class' => 'btn btn-info']) ?>
            
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($physclient->name) ?></h6>
        </div>
        <div class="card-body">
			
			<table class="table table-striped" >
				<!-- <tr>
					<th scope="row"><?= __('Id') ?></th>
					<td><?= $this->Number->format($physclient->id) ?></td>
				</tr> -->
				<tr>
					<th scope="row"><?= __('Nom et Prénoms :') ?></th>
					<td><?= h($physclient->name) ?></td>
				</tr>
				<!-- <tr>
					<th scope="row"><?= __('Prénoms') ?></th>
					<td><?= h($physclient->prenoms) ?></td>
				</tr> -->
				<tr>
					<th scope="row"><?= __('Email :') ?></th>
					<td><?= h($physclient->email) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('N° Cellulaire :') ?></th>
					<td><?= h($physclient->cel) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __(' N° Téléphonique :') ?></th>
					<td><?= h($physclient->tel) ?></td>
				</tr>				
				<!-- <tr>
					<th scope="row"><?= __('Created') ?></th>
					<td><?= h($physclient->created) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Modified') ?></th>
					<td><?= h($physclient->modified) ?></td>
				</tr> -->
				<tr>
					<th scope="row"><?= __('Adresse :') ?></th>
					<td><?= $this->Text->autoParagraph(h($physclient->adresse)); ?></td>
				</tr>
			</table>
			<!-- <div class="row">
				<h4><?= __('Adresse :') ?></h4>
				<?= $this->Text->autoParagraph(h($physclient->adresse)); ?>
			</div> -->
			<div class="related">
				<h4><?= __('Paiements physiques associés') ?></h4>
				<?php if (!empty($physclient->paiementphysiques)): ?>
				<table cellpadding="0" cellspacing="0" class="table table-bordered ">
					<tr>
						<th scope="col"><?= __('Id') ?></th>
						<th scope="col"><?= __('ID Client') ?></th>
						<th scope="col"><?= __('ID Offre') ?></th>
						<th scope="col"><?= __('Periode Id') ?></th>
						<th scope="col"><?= __('Montant') ?></th>
						<th scope="col"><?= __('Date Debut') ?></th>
						<th scope="col"><?= __('Date Fin') ?></th>
						<!-- <th scope="col"><?= __('Created') ?></th>
						<th scope="col"><?= __('Modified') ?></th> -->
						<th scope="col" class="actions"><?= __('Actions') ?></th>
					</tr>
					<?php foreach ($physclient->paiementphysiques as $paiementphysiques): ?>
					<tr>
						<td><?= h($paiementphysiques->id) ?></td>
						<td><?= h($paiementphysiques->physclient_id) ?></td>
						<td><?= h($paiementphysiques->offre_id) ?></td>
						<td><?= h($paiementphysiques->periode_id) ?></td>
						<td><?= h($paiementphysiques->montant) ?></td>
						<td><?= h($paiementphysiques->date_debut) ?></td>
						<td><?= h($paiementphysiques->date_fin) ?></td>
						<!-- <td><?= h($paiementphysiques->created) ?></td>
						<td><?= h($paiementphysiques->modified) ?></td> -->
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Paiementphysiques', 'action' => 'view', $paiementphysiques->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Paiementphysiques', 'action' => 'edit', $paiementphysiques->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Paiementphysiques', 'action' => 'delete', $paiementphysiques->id], ['confirm' => __('Voulez-vous supprimer le paiement physique? # {0}?', $paiementphysiques->id)]) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<?php endif; ?>
			</div>
            
        </div>
    </div>


</div>
