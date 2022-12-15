<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Paiements Physiques</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Paiementphysiques', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des paiements physiques</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    
	<div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Etape 1 - Enrégistrement du client</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($physclient) ?>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom et Prénoms:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('prenoms', ['type' => 'hidden', 'class' => 'form-control', 'label' => 'Prénoms:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('email', ['tyte' => 'email', 'class' => 'form-control', 'label' => 'Email:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('cel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N°Cellulaire:']); ?>
            </div>			
			<div class="form-group">
                <?= $this->Form->control('tel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N° Téléphone Fixe:']); ?>
            </div>
			<div class="form-group">
                <?= $this->Form->control('adresse', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Adresse:']); ?>
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


<?php echo $this->Html->script('/js/montant.js'); ?>
<?php echo $this->Html->script('/js/datefin.js'); ?>

