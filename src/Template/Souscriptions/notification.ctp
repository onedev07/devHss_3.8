<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>ABONNEMENT</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Abonnement</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Paiement</strong></h4>
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


        <div class="row">
            <div>
                <h6> <strong>Vos détails de paiement</strong></h6>
                <div class="span6">
					<table class="table table-striped">
						<tr>
							<th scope="row"><?= __('ID du paiement:') ?></th>
							<td><?= $idpay = $_GET['payId'] ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Référence du paiement:') ?></th>
							<td><?= $refpay = $_GET['referenceNumber'] ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('ID Souscription:') ?></th>
							<td><?= $souscriptionId = $_GET['customerId'] ?></td>
						</tr>

						<!-- Détails Informations Soucription -->
						<tr>
							<th scope="row"><?= __('Client') ?></th>
							<td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Offre') ?></th>
							<td><?= $souscription->offre->name ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Periode') ?></th>
							<td><?= $souscription->periode->name ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Nombre de mois') ?></th>
							<td name='nbmois'><?= $souscription->periode->nbmois ?></td>
						</tr>
						
						<!-- <tr>
							<th scope="row"><?= __('Date de souscription') ?></th>
							<td><?= h($souscription->datedebut) ?></td>
						</tr> -->

						<!-- Fin infos souscription -->



						<tr>
							<th scope="row"><?= __('Montant:') ?></th>
							<td><?= $montant = $_GET['amount'] ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Date de Paiement:') ?></th>
							<td><?= $datepay = $_GET['transactiondt'] ?></td>
						</tr>
						<!-- Calcul date de fin abonnement -->
						<!-- <tr>
							<th scope="row"><?= __('Date de Fin d\'abonnement:') ?></th>
							<td><?= $datefin ?></td>
						</tr> -->
						<!-- Fin Calcul de fin abonnement -->
						<tr>
							<th scope="row"><?= __('Opérateur:') ?></th>
							<td><?= $channel = $_GET['channel'] ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Code de réponse:') ?></th>
							<td><?= $ResponseCode = $_GET['responsecode'] ?></td>
						</tr>
                    
					</table>
                    
				</div>
				
				<div class="span6">
				
					<?= $this->Form->create($paiement) ?>
					<fieldset>
						<H1><strong>Finalisation</strong></H1>
						<?php
							echo $this->Form->control('payid', ['type' => 'hidden', 'class' => 'form-control', 'value' => $idpay]);
							echo $this->Form->control('refpay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $refpay]);
							/*echo $this->Form->control('payid', ['type' => 'hidden', 'class' => 'form-control', 'value' => $ref]);*/
							echo $this->Form->control('souscription_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscriptionId]);
							echo $this->Form->control('client_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->client->id]);
							echo $this->Form->control('montant', ['type' => 'hidden', 'class' => 'form-control', 'value' => $montant]);
							echo $this->Form->control('nbmois', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->periode->nbmois]);
							
							/*echo $this->Form->control('tel', ['type' => 'hidden', 'class' => 'form-control', 'value' => $telephone]);
							echo $this->Form->control('description', ['type' => 'hidden', 'class' => 'form-control', 'value' => $description]);*/
							echo $this->Form->control('datepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $datepay]);
							/*echo $this->Form->control('datefin', ['type' => 'hidden', 'class' => 'form-control', 'value' => $datefin]);
							echo $this->Form->control('timepay', ['type' => 'hidden', 'class' => 'form-control', 'value' => $time]);*/
							echo $this->Form->control('canal', ['type' => 'hidden', 'class' => 'form-control', 'value' => $channel]);
							/*echo $this->Form->control('etatpaiement_id', ['type' => 'hidden','options' => $etatpaiements, 'empty' => true]);*/
						?>
					</fieldset>
					<H6 style="color:red;">* Validez obligatoirement le processus en cliquant sur le bouton <strong>'Valider le Paiement'</strong> pour la prise en compte de votre abonnement.</H6>
					<?= $this->Form->button(__('Valider le Paiement'), ['class'=> 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
					<?= $this->Form->end() ?>
				
				</div>
				
            </div>
            
            

        </div>
    </div>
</section>



<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->
