<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiementphysique[]|\Cake\Collection\CollectionInterface $paiementphysiques
 */
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TABLEAU DE BORD</h1>
    </div>
	
	
	<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NOMBRE PAIEMENTS ELECTRONIQUES EXPIRANT DANS 10 JOURS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    echo $jnumber = $paiements->count();
                                ?>                            
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bell fa-fw fa-2x text-gray-300  "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">NOMBRE PAIEMENTS PHYSIQUES EXPIRANT DANS 10 JOURS</div>
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

       
    </div>
	

	<hr class="sidebar-divider d-none d-md-block">
	<div class="info">
		<h5 style="color:#0e7cd1"><strong>***Listes des différents abonnements qui expirent dans plus ou moins 10 jours***</strong></h5>
	</div>
	<hr class="sidebar-divider d-none d-md-block">
	
	
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PAIEMENTS ELECTRONIQUES</h6>
        </div>
        <div class="card-body">
		<!-- <button onclick="ExportToExcel('xlsx')" class="btn btn-success btn-user" >Exporter au format Excel</button> -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Référence du paiement') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Session') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('ID du paiement') ?></th>
							<th scope="col"><?= $this->Paginator->sort('souscription_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montant') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('tel') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('Date de paiement') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Date de fin d\'abonnement') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Heure de paiement') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('Opérateur') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Etat du paiement') ?></th> -->
							<!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
							<!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
						</tr>
                    </thead>
                    <tfoot>
                        <tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Référence du paiement') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Session') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('ID du paiement') ?></th>
							<th scope="col"><?= $this->Paginator->sort('souscription_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('montant') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('tel') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('Date de paiement') ?></th>
							<th scope="col"><?= $this->Paginator->sort('Date de fin d\'abonnement') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Heure de paiement') ?></th> -->
							<th scope="col"><?= $this->Paginator->sort('Opérateur') ?></th>
							<!-- <th scope="col"><?= $this->Paginator->sort('Etat du paiement') ?></th> -->
							<!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
							<th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
							<!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
						</tr>
                    </tfoot>
                    <tbody>
						<?php foreach ($paiements as $paiement): ?>
						<tr>
							<td><?= $this->Number->format($paiement->id) ?></td>
							<td><?= h($paiement->refpay) ?></td>
							<!-- <td><?= h($paiement->session) ?></td> -->
							<td><?= h($paiement->payid) ?></td>
							<td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
							<td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
							<td><?= $this->Number->format($paiement->montant) ?></td>
							<!-- <td><?= h($paiement->tel) ?></td> -->
							<td><?= h($paiement->datepay) ?></td>
							<td><?= h($paiement->datefin) ?></td>
							<!-- <td><?= h($paiement->timepay) ?></td> -->
							<td><?= h($paiement->canal) ?></td>
							<!-- <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
							<td><?= h($paiement->created) ?></td>
							<td><?= h($paiement->modified) ?></td> -->
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
	
	
	
	<hr class="sidebar-divider d-none d-md-block">
	

    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PAIEMENTS PHYSIQUES</h6>
			
        </div>
        <div class="card-body">
            <div class="table-responsive">
			<!-- <button onclick="ExportToExcel('xlsx')" class="btn btn-success btn-user" >Exporter au format Excel</button> -->
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
							<!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
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
							<!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
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
							<!-- <td class="actions">
								<?= $this->Html->link(__('Détails'), ['action' => 'view', $paiementphysique->id]) ?>
								<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $paiementphysique->id]) ?>
								<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $paiementphysique->id], ['confirm' => __('Voulez-vous supprimer ce paiement? # {0}?', $paiementphysique->id)]) ?>
							</td> -->
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