<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['controller' => 'Offres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['controller' => 'Offres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commentaires'), ['controller' => 'Commentaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commentaire'), ['controller' => 'Commentaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($client->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cel') ?></th>
            <td><?= h($client->cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($client->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Web') ?></th>
            <td><?= h($client->web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bp') ?></th>
            <td><?= h($client->bp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($client->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offre') ?></th>
            <td><?= $client->has('offre') ? $this->Html->link($client->offre->name, ['controller' => 'Offres', 'action' => 'view', $client->offre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Localisation Site') ?></h4>
        <?= $this->Text->autoParagraph(h($client->localisation_site)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Commentaires') ?></h4>
        <?php if (!empty($client->commentaires)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Article Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->commentaires as $commentaires): ?>
            <tr>
                <td><?= h($commentaires->id) ?></td>
                <td><?= h($commentaires->comment) ?></td>
                <td><?= h($commentaires->article_id) ?></td>
                <td><?= h($commentaires->client_id) ?></td>
                <td><?= h($commentaires->created) ?></td>
                <td><?= h($commentaires->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($client->paiements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Souscription Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Datepaiement') ?></th>
                <th scope="col"><?= __('Etatpaiement Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->paiements as $paiements): ?>
            <tr>
                <td><?= h($paiements->id) ?></td>
                <td><?= h($paiements->client_id) ?></td>
                <td><?= h($paiements->souscription_id) ?></td>
                <td><?= h($paiements->offre_id) ?></td>
                <td><?= h($paiements->datepaiement) ?></td>
                <td><?= h($paiements->etatpaiement_id) ?></td>
                <td><?= h($paiements->created) ?></td>
                <td><?= h($paiements->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Souscriptions') ?></h4>
        <?php if (!empty($client->souscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Montanttotal') ?></th>
                <th scope="col"><?= __('Datedebut') ?></th>
                <th scope="col"><?= __('Datefin') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($client->souscriptions as $souscriptions): ?>
            <tr>
                <td><?= h($souscriptions->id) ?></td>
                <td><?= h($souscriptions->client_id) ?></td>
                <td><?= h($souscriptions->offre_id) ?></td>
                <td><?= h($souscriptions->periode_id) ?></td>
                <td><?= h($souscriptions->montanttotal) ?></td>
                <td><?= h($souscriptions->datedebut) ?></td>
                <td><?= h($souscriptions->datefin) ?></td>
                <td><?= h($souscriptions->created) ?></td>
                <td><?= h($souscriptions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
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
                <?= $this->Html->link(__('Modifier mon profile'), ['action' => 'edit', $client->id], ['class'=> 'btn btn-success']) ?>
                <!-- <?= $this->Html->link(__('Mes souscriptions'), ['action' => 'edit', $client->id], ['class'=> 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Mes paiements'), ['action' => 'edit', $client->id], ['class'=> 'btn btn-danger']) ?> -->
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
                <h6> <strong>Informations du profile</strong></h6>
            </div>
            <p><?= $this->Flash->render() ?></p> 
            <div class="span6">
                <table class="table table-bordered">
                    <tr>
                        <th scope="row"><?= __('Nom') ?></th>
                        <td><?= h($client->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($client->email) ?></td>
                    </tr>
                    <!-- <tr>
                        <th scope="row"><?= __('Mot de passe') ?></th>
                        <td><?= h($client->password) ?></td>
                    </tr> -->
                    <tr>
                        <th scope="row"><?= __('N° Cellulaire') ?></th>
                        <td><?= h($client->cel) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('N° Fixe') ?></th>
                        <td><?= h($client->tel) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Site Web') ?></th>
                        <td><?= h($client->web) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Boîte postale') ?></th>
                        <td><?= h($client->bp) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Adresse') ?></th>
                        <td><?= h($client->adresse) ?></td>
                    </tr>
                    <!-- <tr>
                        <th scope="row"><?= __('Offre') ?></th>
                        <td><?= $client->has('offre') ? $this->Html->link($client->offre->name, ['controller' => 'Offres', 'action' => 'view', $client->offre->id]) : '' ?></td>
                    </tr> -->
                    <!-- <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($client->id) ?></td>
                    </tr> -->
                    <!-- <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($client->created) ?></td>
                    </tr> -->
                    <!-- <tr>
                        <th scope="row"><?= __('Modified') ?></th>
                        <td><?= h($client->modified) ?></td>
                    </tr> -->
                </table>
            </div>
            <div class="span6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><?= __('Adresse du site à sécuriser') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $this->Text->autoParagraph(h($client->localisation_site)); ?></td>
                        </tr>
                    </tbody>                                    
                </table>
                
            </div>
        </div>

        <!-- Mes souscriptions -->
        <!-- <div class="row">
            <div>
                <h6> <strong>Mes souscriptions</strong></h6>
            </div>
            <p><?= $this->Flash->render() ?></p> 
            <div class="span12">
                <?php if (!empty($client->souscriptions)): ?>
                <table class="table table-bordered">
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Client Id') ?></th>
                        <th scope="col"><?= __('Offre') ?></th>
                        <th scope="col"><?= __('Durée de l\'offre') ?></th>
                        <th scope="col"><?= __('Montant total') ?></th>
                        <th scope="col"><?= __('Date debut') ?></th>
                        <th scope="col"><?= __('Date fin') ?></th>
                        <th scope="col"><?= __('Created') ?></th>
                        <th scope="col"><?= __('Modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($client->souscriptions as $souscriptions): ?>
                    <tr>
                        <td><?= h($souscriptions->id) ?></td>
                        <td><?= h($souscriptions->client_id) ?></td>
                        <td><?= h($souscriptions->offre_id) ?></td>
                        <td><?= h($souscriptions->periode_id) ?></td>
                        <td><?= h($souscriptions->montanttotal) ?></td>
                        <td><?= h($souscriptions->datedebut) ?></td>
                        <td><?= h($souscriptions->datefin) ?></td>
                        <td><?= h($souscriptions->created) ?></td>
                        <td><?= h($souscriptions->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Détails'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
                </table>
                <?php endif; ?>
            </div>
        </div> -->

        <!-- Mes paiements -->
        <div class="row">
            <div>
                <h6> <strong>Mes paiements</strong></h6>
            </div>
            <!-- <p><?= $this->Flash->render() ?></p>  -->
            <div class="span12">
                <?php if (!empty($client->paiements)): ?>
                <table class="table table-bordered">
                    <tr>
                        <!-- <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Client Id') ?></th> -->
						<th scope="col"><?= __('Référence de paiement') ?></th>
						<th scope="col"><?= __('ID du paiement') ?></th>
                        <th scope="col"><?= __('ID de Souscription') ?></th>
						<th scope="col"><?= __('Montant') ?></th>
                        <!-- <th scope="col"><?= __('Offre') ?></th> -->
                        <th scope="col"><?= __('Date paiement') ?></th>
						<th scope="col"><?= __('Date de fin d\'abonnement') ?></th>
						<th scope="col"><?= __('Opérateur') ?></th>
                        <!-- <th scope="col"><?= __('Etat paiement') ?></th>
                        <th scope="col"><?= __('Created') ?></th>
                        <th scope="col"><?= __('Modified') ?></th> -->
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($client->paiements as $paiements): ?>
                    <tr>
                        <!-- <td><?= h($paiements->id) ?></td>
                        <td><?= h($paiements->client_id) ?></td> -->
						<td><?= h($paiements->refpay) ?></td>
						<td><?= h($paiements->payid) ?></td>
                        <td><?= h($paiements->souscription_id) ?></td>
						<td><?= h($paiements->montant) ?> FCFA</td>
                        <!-- <td><?= h($paiements->offre_id) ?></td> -->
                        <td><?= h($paiements->datepay) ?></td>
						<td><?= h($paiements->datefin) ?></td>
						<td><?= h($paiements->canal) ?></td>
                        <!-- <td><?= h($paiements->etatpaiement_id) ?></td>
                        <td><?= h($paiements->created) ?></td>
                        <td><?= h($paiements->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('Détails'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                            <!-- <?= $this->Html->link(__('Modifier'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                            <?= $this->Form->postLink(__('Suppimer'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?> -->
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
                </table>
                <?php endif; ?>
            </div>
        </div>


    </div>
</section>


<?= $this->element('footer'); ?>


