<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>DEMANDE</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="<?= $this->Url->build(['controller' => 'Offres', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
                    <li class="active">Demande de devis</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4><strong>Etape 2</strong></h4>
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
                <h6> <strong>Vos informations de compte</strong></h6>
            </div>
            <div class="form-group">
                <div class="span5">
                <table class="table table-striped">
                    <!-- <tr>
                        <th scope="row"><?= __('Offre:') ?></th>
                        <td><?= h($client->offre->name) ?></td>
                    </tr> -->
                    <tr>
                        <th scope="row"><?= __('Name:') ?></th>
                        <td><?= h($client->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email:') ?></th>
                        <td><?= h($client->email) ?></td>
                    </tr>
                    <!-- <tr>
                        <th scope="row"><?= __('Password') ?></th>
                        <td><?= h($client->password) ?></td>
                    </tr> -->
                    <tr>
                        <th scope="row"><?= __('Cel:') ?></th>
                        <td><?= h($client->cel) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Tel:') ?></th>
                        <td><?= h($client->tel) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Web:') ?></th>
                        <td><?= h($client->web) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Bp:') ?></th>
                        <td><?= h($client->bp) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Adresse:') ?></th>
                        <td><?= h($client->adresse) ?></td>
                    </tr>
                    
                </table>
                </div>
            
                       
            <div class="span3" id="infos">
                <div><h7><strong>Choisissez la dur??e de l'offre</strong> </h7> </div> 
                <?= $this->Form->create($demande) ?>
                <div class="form-group" id="calcul">
                    <fieldset>
                        <?php
                        // echo $this->Form->control('offreid', ['name' => 'offreid', 'id' => 'prix', 'value' => $this->Number->format($client->offre->id), 'type' => '']);

                        //echo $this->Form->control('created', ['name' => 'created', 'id' => 'created', 'type' => '']);
                        echo $this->Form->control('prix', ['name' => 'prix', 'id' => 'prix', 'value' => $offre->prix, 'type' => 'hidden']);
                        echo $this->Form->control('client_id', ['type' => 'hidden', 'value' => $client->id]);
                        echo $this->Form->control('offre_id', ['type' => 'hidden', 'id' => 'offre', 'value' => $offre->id]);
                        echo $this->Form->control('periode_id', ['options' => $periodes, 'class' => 'form-control', 'id' => 'periode', 'name' => 'periode_id', 'empty' => true, 'label' => 'Dur??e de l\'offre :']);
                        echo $this->Form->control('nmois', ['type' => 'hidden', 'class' => 'form-control', 'id' => 'nbmois', 'name' => 'nmois', 'label' => 'nbmois :']);
                        
                        ?>
                    </fieldset>
                </div>
                <?= $this->Form->button(__('Envoyer la demande'), ['class' => 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
                <?= $this->Form->end() ?>
            </div>
            </div>

            <div class="span4">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>
                                <h6><strong>OFFRE SMART PROTECT</strong></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><strong style="color:#a00a0c"><?= @h($offre->name) ?></strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <h6 style="color:#000000"> A partir <strong><?= $this->Number->format($offre->prix) ?> FCFA / Mois</strong></h6>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </div>
</section>


<?= $this->element('footer'); ?>

<?php echo $this->Html->script('/js/calcul.js'); ?>