<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement[]|\Cake\Collection\CollectionInterface $paiements
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['controller' => 'Etatpaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['controller' => 'Etatpaiements', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<!-- <div class="paiements index large-9 medium-8 columns content">
    <h3><?= __('Paiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('refpay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('session') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('souscription_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timepay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etatpaiement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paiements as $paiement): ?>
            <tr>
                <td><?= $this->Number->format($paiement->id) ?></td>
                <td><?= h($paiement->refpay) ?></td>
                <td><?= h($paiement->session) ?></td>
                <td><?= h($paiement->payid) ?></td>
                <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
                <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
                <td><?= $this->Number->format($paiement->montant) ?></td>
                <td><?= h($paiement->tel) ?></td>
                <td><?= h($paiement->datepay) ?></td>
                <td><?= h($paiement->datefin) ?></td>
                <td><?= h($paiement->timepay) ?></td>
                <td><?= h($paiement->canal) ?></td>
                <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
                <td><?= h($paiement->created) ?></td>
                <td><?= h($paiement->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Clients</h1>
    </div>
	
	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE TOTAL DE CLIENTS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $number = $paiements->count(); ?></div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!-- <a href="<?= $this->Url->build(['controller' => 'Paiements', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un paiement</span>
            </a> -->
            <a href=<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'index']) ?> class="btn btn-warning btn-icon-hand">
                <span class="icon text-white-50">
                    <i class="fas fa-credit-card"></i>
                </span>
                <span class="text"><strong>GESTION DES PAIEMENTS PHYSIQUES</strong></span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Clients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
							
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('email') ?></th>
							
							<th scope="col"><?= $this->Paginator->sort('cel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('tel') ?></th>
							
							<th scope="col"><?= $this->Paginator->sort('bp') ?></th>
							<th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
							
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </thead>
                    <tfoot>
                        <tr>
							
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('email') ?></th>
							
							<th scope="col"><?= $this->Paginator->sort('cel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('tel') ?></th>
							
							<th scope="col"><?= $this->Paginator->sort('bp') ?></th>
							<th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
							
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>

                    </tfoot>
                    <tbody>
						<?php foreach ($paiements as $paiement): ?>
						<tr>
							
							<td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $paiement->has('Email') ? $this->Html->link($paiement->client->email, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $paiement->has('Cel') ? $this->Html->link($paiement->client->cel, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $paiement->has('tel') ? $this->Html->link($paiement->client->tel, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $paiement->has('bp') ? $this->Html->link($paiement->client->bp, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $paiement->has('adresse') ? $this->Html->link($paiement->client->adresse, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							
							<!-- <td class="actions">
								<?= $this->Html->link(__('Détails'), ['action' => 'view', $paiement->id]) ?>
								<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $paiement->id]) ?>
								<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $paiement->id], ['confirm' => __('Voulez-vous supprimer ce paiement? # {0}?', $paiement->id)]) ?>
							</td> -->
						</tr>
						<?php endforeach; ?>
					</tbody>
                </table>
            </div>
        </div>
    </div>



</div>

