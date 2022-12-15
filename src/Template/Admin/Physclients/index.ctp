<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Physclient[]|\Cake\Collection\CollectionInterface $physclients
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiementphysiques'), ['controller' => 'Paiementphysiques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['controller' => 'Paiementphysiques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="physclients index large-9 medium-8 columns content">
    <h3><?= __('Physclients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenoms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($physclients as $physclient): ?>
            <tr>
                <td><?= $this->Number->format($physclient->id) ?></td>
                <td><?= h($physclient->name) ?></td>
                <td><?= h($physclient->prenoms) ?></td>
                <td><?= h($physclient->email) ?></td>
                <td><?= h($physclient->cel) ?></td>
                <td><?= h($physclient->tel) ?></td>
                <td><?= h($physclient->created) ?></td>
                <td><?= h($physclient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $physclient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $physclient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $physclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $physclient->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des Clients Physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">
	
	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE TOTAL DE CLIENTS PHYSIQUES</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $number = $physclients->count(); ?></div>
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

            <!-- <a href="<?= $this->Url->build(['controller' => 'Physclients', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un client physique</span>
            </a> -->
            <a href=<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'index']) ?> class="btn btn-success btn-icon-hand">
                <span class="icon text-white-50">
                    <i class="fas fa-credit-card"></i>
                </span>
                <span class="text">PAIEMENTS PHYSIQUES</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des clients physiques</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('nom et Prénoms') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('prenoms') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('email') ?></th>
							<th scope="col"><?= $this->Paginator->sort('cel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('tel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </thead>
                    <tfoot>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('nom et Prénoms') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('prenoms') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('email') ?></th>
							<th scope="col"><?= $this->Paginator->sort('cel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('tel') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </tfoot>
                    <tbody>
						<?php foreach ($physclients as $physclient): ?>
						<tr>
							<td><?= $this->Number->format($physclient->id) ?></td>
							<td><?= h($physclient->name) ?></td>
							<!-- <td><?= h($physclient->prenoms) ?></td> -->
							<td><?= h($physclient->email) ?></td>
							<td><?= h($physclient->cel) ?></td>
							<td><?= h($physclient->tel) ?></td>
							<td><?= h($physclient->created) ?></td>
							<td><?= h($physclient->modified) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('Détails'), ['action' => 'view', $physclient->id]) ?>
								<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $physclient->id]) ?>
								<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $physclient->id], ['confirm' => __('Voulez-vous supprimer ce client? # {0}?', $physclient->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
                </table>
            </div>
        </div>
    </div>



</div>
