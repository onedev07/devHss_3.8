<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commentaires'), ['controller' => 'Commentaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commentaire'), ['controller' => 'Commentaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->email) ?></td>
                <td><?= h($client->password) ?></td>
                <td><?= h($client->cel) ?></td>
                <td><?= h($client->tel) ?></td>
                <td><?= h($client->web) ?></td>
                <td><?= h($client->bp) ?></td>
                <td><?= h($client->adresse) ?></td>
                <td><?= h($client->created) ?></td>
                <td><?= h($client->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des prospects</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">
	
	
	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE TOTAL DE PROSPECTS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">								
								<?= $this->Paginator->counter(['format' => __('{{count}}')]) ?>
							</div>
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
	

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!-- <a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un client</span>
            </a> -->
			<!-- <a href="<?= $this->Url->build(['controller' => 'Physclients', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">CLIENTS PHYSIQUES</span>
            </a> -->
        </div>
    </div>
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des prospects</h6>
        </div>
        <div class="card-body">
            
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th scope="col"><?= $this->Paginator->sort('id') ?></th>
						<th scope="col"><?= $this->Paginator->sort('Nom et Prénoms') ?></th>
						<th scope="col"><?= $this->Paginator->sort('email') ?></th>
						<!-- <th scope="col"><?= $this->Paginator->sort('password') ?></th> -->
						<th scope="col"><?= $this->Paginator->sort('cel') ?></th>
						<th scope="col"><?= $this->Paginator->sort('tel') ?></th>
						<!-- <th scope="col"><?= $this->Paginator->sort('web') ?></th> -->
						<th scope="col"><?= $this->Paginator->sort('bp') ?></th>
						<th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
						<!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
						<th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
						<th scope="col" class="actions"><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($clients as $client): ?>
					<tr>
						<td><?= $this->Number->format($client->id) ?></td>
						<td><?= h($client->name) ?></td>
						<td><?= h($client->email) ?></td>
						<!-- <td><?= h($client->password) ?></td> -->
						<td><?= h($client->cel) ?></td>
						<td><?= h($client->tel) ?></td>
						<!-- <td><?= h($client->web) ?></td> -->
						<td><?= h($client->bp) ?></td>
						<td><?= h($client->adresse) ?></td>
						<!-- <td><?= h($client->created) ?></td>
						<td><?= h($client->modified) ?></td> -->
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['action' => 'view', $client->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $client->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $client->id], ['confirm' => __('Voulez-vous supoprimer ce prospect? # {0}?', $client->id)]) ?>
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
				
			
			
			
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>
