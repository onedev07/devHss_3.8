<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['controller' => 'Etatpaiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['controller' => 'Etatpaiements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paiements view large-9 medium-8 columns content">
    <h3><?= h($paiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Refpay') ?></th>
            <td><?= h($paiement->refpay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Session') ?></th>
            <td><?= h($paiement->session) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payid') ?></th>
            <td><?= h($paiement->payid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Souscription') ?></th>
            <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($paiement->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($paiement->canal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etatpaiement') ?></th>
            <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($paiement->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datepay') ?></th>
            <td><?= h($paiement->datepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($paiement->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timepay') ?></th>
            <td><?= h($paiement->timepay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paiement->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($paiement->description)); ?>
    </div>
</div> -->


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
            <div class="span12">
                <?= $this->Html->link(__('Retour à l\'accueil'), ['controller' => 'Offres', 'action' => 'index'], ['class'=> 'btn btn-success']) ?>
                
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

        <!-- details client -->
        <div class="row">
            <div>
                <h6> <strong>Détails du Paiement</strong></h6>
            </div>
            <p><?= $this->Flash->render() ?></p> 
            <div class="span12">
				
				<table class="table table-striped">
					<tr>
						<th scope="row"><?= __('Référence de paiement') ?></th>
						<td><?= h($paiement->refpay) ?></td>
					</tr>
					<!-- <tr>
						<th scope="row"><?= __('Session') ?></th>
						<td><?= h($paiement->session) ?></td>
					</tr> -->
					<tr>
						<th scope="row"><?= __('Identifinat du paiement') ?></th>
						<td><?= h($paiement->payid) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Identifiant de Souscription - Cliquez sur l\'identifiant pour les détails') ?></th>
						<td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Nom et Prénoms du Client') ?></th>
						<!-- <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td> -->
						<td><?= $paiement->client->name ?></td>
					</tr>
					<!-- <tr>
						<th scope="row"><?= __('Tel') ?></th>
						<td><?= h($paiement->tel) ?></td>
					</tr> -->
					<tr>
						<th scope="row"><?= __('Opérateur') ?></th>
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
						<th scope="row"><?= __('Montant') ?></th>
						<td><?= $this->Number->format($paiement->montant) ?> FCFA</td>
					</tr>
					<tr>
						<th scope="row"><?= __('Date de paiement') ?></th>
						<td><?= h($paiement->datepay) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Date de fin d\'abonnement') ?></th>
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
            <!-- <div class="span6">
                
                
            </div> -->
        </div>


    </div>
</section>


<?= $this->element('footer'); ?>



