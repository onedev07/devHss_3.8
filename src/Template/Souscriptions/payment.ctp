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
                <h4><strong>Souscription</strong></h4>
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
                <h6> <strong>Détails</strong></h6>
                <div class="span4">
                    <table class="table table-striped">
                        <tr>
                            <th scope="row"><?= __('Nom du client:') ?></th>
                            <td><?= $souscription->client->name ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Offre:') ?></th>
                            <td><?= $souscription->offre->name ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Durée:') ?></th>
                            <td><?= $souscription->periode->name ?></td>
                        </tr>
                        <!-- <tr>
                            <th scope="row"><?= __('Id') ?></th>
                            <td><?= $this->Number->format($souscription->id) ?></td>
                        </tr> -->
                        <tr>
                            <th scope="row"><?= __('Montant Total TTC:') ?></th>
                            <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                        </tr>
                        <!-- <tr>
                            <th scope="row"><?= __('Date début:') ?></th>
                            <td><?= h($souscription->datedebut) ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= __('Date fin:') ?></th>
                            <td><?= h($souscription->datefin) ?></td>
                        </tr> -->
                        <tr>
                            <th scope="row"><?= __('Date de soucription') ?></th>
                            <td><?= h($souscription->created) ?></td>
                        </tr>
                        <!-- <tr>
                            <th scope="row"><?= __('Modifié le') ?></th>
                            <td><?= h($souscription->modified) ?></td>
                        </tr> -->
                    </table>
					<!-- Bouton de paiement -->
				<!-- <?= $this->Html->link(__('Débuter le paiement'), ['action' => 'paie'], ['class' => 'btn btn-large btn-theme btn-danger btn-rounded']) ?> -->
            </div>
            
            <div class="span8">
			<h6> <strong>Choisir le mode de paiement</strong></h6>
                <?= $this->Form->create() ?>
                <fieldset>
                    <?php
                        echo $this->Form->control('client_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->client->id]);
						echo $this->Form->control('client_email', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->client->email]);
						echo $this->Form->control('client_name', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->client->name]);
						echo $this->Form->control('client_cel', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->client->cel]);
                        echo $this->Form->control('souscription_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $this->Number->format($souscription->id)]);
						echo $this->Form->control('montanttotal', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->montanttotal]);
                        echo $this->Form->control('offre_id', ['type' => 'hidden', 'class' => 'form-control', 'value' => $souscription->offre->id]);
                        echo $this->Form->control('datepaiement', ['type' => 'hidden', 'class' => 'form-control']);
                        //echo $this->Form->control('etatpaiement_id', ['options' => $etatpaiements, 'empty' => true, 'type' => 'hidden']);
						//echo $this->Form->radio('paidmod', ['OM','MOMO','FLOOZ','CARD']);
                    ?>
					<div class="cc-selector">
						<input checked="checked" id="om" type="radio" name="paid" value="OMCIV2" />
						<label class="drinkcard-cc om" for="om"></label>
						
						<input id="momo" type="radio" name="paid" value="MOMO" />
						<label class="drinkcard-cc momo" for="momo"></label>
						
						<input id="flooz" type="radio" name="paid" value="FLOOZ" />
						<label class="drinkcard-cc flooz" for="flooz"></label>
						
						<input id="uba" type="radio" name="paid" value="CARD" />
						<label class="drinkcard-cc uba" for="uba"></label>
					</div>
					
                </fieldset>			
                <?= $this->Form->button(__('Confirmer le mode de paiement'), ['class'=> 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
                <?= $this->Form->end() ?>
            </div>

        </div>
    </div>
</section>



<?= $this->element('footer'); ?>

<!-- <?php echo $this->Html->script('/js/calcul.js'); ?> -->