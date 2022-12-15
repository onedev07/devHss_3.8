<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique[]|\Cake\Collection\CollectionInterface $paiementphysiques
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paiementphysique'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Physclients'), ['controller' => 'Physclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Physclient'), ['controller' => 'Physclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodes'), ['controller' => 'Periodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periode'), ['controller' => 'Periodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiementphysiques index large-9 medium-8 columns content">
    <h3><?= __('Paiementphysiques') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('physclient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_debut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paiementphysiques as $paiementphysique): ?>
            <tr>
                <td><?= $this->Number->format($paiementphysique->id) ?></td>
                <td><?= $paiementphysique->has('physclient') ? $this->Html->link($paiementphysique->physclient->name, ['controller' => 'Physclients', 'action' => 'view', $paiementphysique->physclient->id]) : '' ?></td>
                <td><?= $paiementphysique->has('offre') ? $this->Html->link($paiementphysique->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiementphysique->offre->id]) : '' ?></td>
                <td><?= $paiementphysique->has('periode') ? $this->Html->link($paiementphysique->periode->name, ['controller' => 'Periodes', 'action' => 'view', $paiementphysique->periode->id]) : '' ?></td>
                <td><?= $this->Number->format($paiementphysique->montant) ?></td>
                <td><?= h($paiementphysique->date_debut) ?></td>
                <td><?= h($paiementphysique->date_fin) ?></td>
                <td><?= h($paiementphysique->created) ?></td>
                <td><?= h($paiementphysique->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paiementphysique->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiementphysique->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiementphysique->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des Paiements Physiques</h1>
    </div>
	
	
	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PAIEMENTS DU JOUR</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    echo $jnumber = $paiementphysiques->count();
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
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE TOTAL DE PAIEMENTS PHYSIQUES</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $number = $paiementphysiques->count(); ?></div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Pending Requests Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
	
	
    
	
	
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href="<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'etape1']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Effectuer un paiement physique</span>
            </a>
            <!-- <a href=<?= $this->Url->build(['controller' => 'Physclients', 'action' => 'index']) ?> class="btn btn-warning btn-icon-hand">
                <span class="icon text-white-50">
                    <i class="fas fa-users"></i>
                </span>
                <span class="text">Gestion des clients physiques</span>
            </a> -->
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">
	
	
	<!-- Zone de recherche -->
		<div class="row">
			<div class="col-md-12">
				<div class="text-center"><H4><strong>FILTRE</strong></H4></div>
				<hr class="sidebar-divider d-none d-md-block">
				<div class="text-center"><p style="color:#A20C0E">***Définissez les periodes de paiements physiques pour effectuer le filtrage par période***</p></div>
			</div>
		</div>
		
	<hr class="sidebar-divider d-none d-md-block">
	
	<!-- Champs de recherche -->
	<form class="user" type="get" >
		<!-- <div class="form-group row">
			<div class="col-md-4">
				<label><strong>Date 1 :</strong></label>
			 </div>
			 <div class="col-md-4">
				<label><strong>Date 2 :</strong></label>
			 </div>
		</div> -->		
		<div class="form-group row">
			<div class="col-md-4">
				<input type="date" class="form-control form-control-user" name="firstDate" id="firstDate" value="$this->request->getQuery('firstDate')" >
			 </div>
		  <div class="col-md-4">
				<input type="date" class="form-control form-control-user" name="lastDate" id="lastDate" value="$this->request->getQuery('lastDate')" >
				
		  </div>
		  
		  <div class="col-md-3">
			<button class="btn btn-primary btn-user btn-block">Rechercher</button>
		  </div>
		  
		  
		</div>
		
		
		<!-- <hr> -->
		
	</form>
	
	<hr class="sidebar-divider d-none d-md-block">





    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des paiements physiques</h6>
			
        </div>
        <div class="card-body">
            <div class="table-responsive">
			<button onclick="ExportToExcel('xlsx')" class="btn btn-success btn-user" >Exporter au format Excel</button>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Client') ?></th>
							<th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montant') ?></th>
							<th scope="col"><?= $this->Paginator->sort('date_debut') ?></th>
							<th scope="col"><?= $this->Paginator->sort('date_fin') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </thead>
                    <tfoot>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Client') ?></th>
							<th scope="col"><?= $this->Paginator->sort('offre_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('periode_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montant') ?></th>
							<th scope="col"><?= $this->Paginator->sort('date_debut') ?></th>
							<th scope="col"><?= $this->Paginator->sort('date_fin') ?></th>
							<th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
                    </tfoot>
                    <tbody>
						<?php foreach ($paiementphysiques as $paiementphysique): ?>
						<tr>
							<td><?= $this->Number->format($paiementphysique->id) ?></td>
							<td><?= $paiementphysique->has('physclient') ? $this->Html->link($paiementphysique->physclient->name, ['controller' => 'Physclients', 'action' => 'view', $paiementphysique->physclient->id]) : '' ?></td>
							<td><?= $paiementphysique->has('offre') ? $this->Html->link($paiementphysique->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiementphysique->offre->id]) : '' ?></td>
							<td><?= $paiementphysique->has('periode') ? $this->Html->link($paiementphysique->periode->name, ['controller' => 'Periodes', 'action' => 'view', $paiementphysique->periode->id]) : '' ?></td>
							<td><?= $this->Number->format($paiementphysique->montant) ?></td>
							<td><?= h($paiementphysique->date_debut) ?></td>
							<td><?= h($paiementphysique->date_fin) ?></td>
							<td><?= h($paiementphysique->created) ?></td>
							<td><?= h($paiementphysique->modified) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('Détails'), ['action' => 'view', $paiementphysique->id]) ?>
								<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $paiementphysique->id]) ?>
								<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Voulez-vous supprimer ce paiement? # {0}?', $paiementphysique->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
                </table>
				
            </div>
        </div>
    </div>



</div>


<?php echo $this->Html->script('/js/importxlsx.js'); ?>

<script>
	function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('dataTable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Pphysic.' + (type || 'xlsx')));
    }
</script>