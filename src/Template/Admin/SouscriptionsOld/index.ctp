<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription[]|\Cake\Collection\CollectionInterface $souscriptions
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptions index large-9 medium-8 columns content">
    <h3><?= __('Souscriptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montanttotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($souscriptions as $souscription): ?>
            <tr>
                <td><?= $this->Number->format($souscription->id) ?></td>
                <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
                <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
                <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
                <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                <td><?= h($souscription->datedebut) ?></td>
                <td><?= h($souscription->datefin) ?></td>
                <td><?= h($souscription->created) ?></td>
                <td><?= h($souscription->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $souscription->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscription->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Etats des souscriptions</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SOUSCRIPTIONS DU JOUR</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
									//echo $number->count();
									echo $number = $souscriptions->count();;
                                ?>                            
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bell fa-fw fa-2x text-gray-300  "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE TOTAL DE SOUSCRIPTIONS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $number = $souscriptions->count(); ?></div>
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


    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <!--<a href=<?= $this->Url->build(['controller' => 'Souscriptions', 'action' => 'add']) ?> class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Souscrir</span>
            </a>-->
        </div>
    </div>
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Tableau -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des souscriptions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montanttotal') ?></th>
							<th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
							<th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </thead>
                    <tfoot>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montanttotal') ?></th>
							<th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
							<th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </tfoot>
                    <tbody>
						<?php foreach ($souscriptions as $souscription): ?>
						<tr>
							<td><?= $this->Number->format($souscription->id) ?></td>
							<td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
							<td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
							<td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
							<td><?= $this->Number->format($souscription->montanttotal) ?></td>
							<td><?= h($souscription->datedebut) ?></td>
							<td><?= h($souscription->datefin) ?></td>
							<td><?= h($souscription->created) ?></td>
							<td><?= h($souscription->modified) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $souscription->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscription->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
                </table>
            </div>
        </div>
    </div>

</div>




