<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>


<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>PROFILE</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Profile</strong></h4>
            </div>
        </div>

        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
        
        <!-- Menu du profile -->
        <div class="row">
            <div class="span6">
                <?= $this->Html->link(__('Retour à l\'accueil'), ['controller' => 'Offres', 'action' => 'index'], ['class'=> 'btn btn-danger']) ?>
                
            </div>
			<div class="span6">
                <button onclick="generatePDF()" class="btn btn-blue">Imprimer votre Reçu de paiement</button>
                
            </div>		
			
        </div>
		<hr>
		
		<!-- zone d'impression -->
		<div id="imprecu">
		
			<div class="row">
				<div class="span6">
				<?= $this->Html->image('logo.jpg', ['class' => 'logo', 'width' => '200', 'height' => '100']); ?>
				</div>
			</div>
			
			<hr>
			
			<div class="row">
				<div class="span12">
				<h5> <strong>RECU DE PAIEMENT ABONNEMENT</strong></h5>
				</div>
				
			</div>
			<hr>
			
			<!-- end divider -->

			<!-- details client -->
			<div class="row">
				<!-- <div>
					<h6> <strong>Détails du Paiement</strong></h6>
				</div> -->

				<div class="span10">
					
					<table class="table table-striped">
						<tr>
							<th scope="row"><?= __('Référence de paiement :') ?></th>
							<td><?= h($paiement->refpay) ?></td>
						</tr>
						<!-- <tr>
							<th scope="row"><?= __('Session') ?></th>
							<td><?= h($paiement->session) ?></td>
						</tr> -->
						<tr>
							<th scope="row"><?= __('Identifinat du paiement :') ?></th>
							<td><?= h($paiement->payid) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Identifiant de Souscription :') ?></th>
							<td name="idsouscription"><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
						</tr>
						
						<tr>
							<th scope="row"><?= __('Nom et Prénoms du Client :') ?></th>
							<!-- <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td> -->
							<td><?= $paiement->client->name ?></td>
						</tr>
						
						<!-- <tr>
							<th scope="row"><?= __('N° Téléphonique :') ?></th>
							<td><?= h($paiement->tel) ?></td>
						</tr> -->
						<tr>
							<th scope="row"><?= __('Opérateur :') ?></th>
							<td><?= h($paiement->canal) ?></td>
						</tr>
						<!-- <tr>
							<th scope="row"><?= __('Etatpaiement') ?></th>
							<td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
						</tr> -->
						<!-- <tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($paiement->id) ?></td>
						</tr> -->
						<tr>
							<th scope="row"><?= __('Montant Total Payé :') ?></th>
							<td><?= $this->Number->format($paiement->montant) ?> FCFA</td>
						</tr>
						<tr>
							<th scope="row"><?= __('Date de paiement :') ?></th>
							<td><?= h($paiement->datepay) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Date de fin d\'abonnement :') ?></th>
							<td><?= h($paiement->datefin) ?></td>
						</tr>
						<!-- <tr>
							<th scope="row"><?= __('Timepay') ?></th>
							<td><?= h($paiement->timepay) ?></td>
						</tr> -->
						<!-- <tr>
							<th scope="row"><?= __('Created') ?></th>
							<td><?= h($paiement->created) ?></td>
						</tr> -->
						<!-- <tr>
							<th scope="row"><?= __('Modified') ?></th>
							<td><?= h($paiement->modified) ?></td>
						</tr> -->
					</table>
					
				</div>
				
			</div>
			
			<hr>
			
		
		</div>

        <!-- divider -->
        


    </div>
</section>


<?= $this->element('footer'); ?>





<script>
	function generatePDF() {
		// Choose the element that our invoice is rendered in.
		var element = document.getElementById('imprecu');
		var opt = {
		  margin:       2,
		  filename:     'reçu.pdf',
		  image:        { type: 'jpeg', quality: 0.95 },
		  html2canvas:  { scale: 2 },
		  jsPDF:        { unit: 'cm', format: 'a4', orientation: 'portrait' }
		};
		
		// Choose the element and save the PDF for our user.
		html2pdf().set(opt).from(element).save();
	}
</script>






