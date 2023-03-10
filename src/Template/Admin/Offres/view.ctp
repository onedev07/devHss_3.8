<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offre'), ['action' => 'edit', $offre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offre'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offres view large-9 medium-8 columns content">
    <h3><?= h($offre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($offre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($offre->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($offre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($offre->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($offre->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Materielinclus') ?></h4>
        <?php if (!empty($offre->materielinclus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offre->materielinclus as $materielinclus): ?>
            <tr>
                <td><?= h($materielinclus->id) ?></td>
                <td><?= h($materielinclus->offre_id) ?></td>
                <td><?= h($materielinclus->name) ?></td>
                <td><?= h($materielinclus->created) ?></td>
                <td><?= h($materielinclus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materielinclus', 'action' => 'view', $materielinclus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materielinclus', 'action' => 'edit', $materielinclus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materielinclus', 'action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($offre->paiements)): ?>
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
            <?php foreach ($offre->paiements as $paiements): ?>
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
        <h4><?= __('Related Serviceinclus') ?></h4>
        <?php if (!empty($offre->serviceinclus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Is') ?></th>
                <th scope="col"><?= __('Offre Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offre->serviceinclus as $serviceinclus): ?>
            <tr>
                <td><?= h($serviceinclus->is) ?></td>
                <td><?= h($serviceinclus->offre_id) ?></td>
                <td><?= h($serviceinclus->name) ?></td>
                <td><?= h($serviceinclus->created) ?></td>
                <td><?= h($serviceinclus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Serviceinclus', 'action' => 'view', $serviceinclus->is]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Serviceinclus', 'action' => 'edit', $serviceinclus->is]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Serviceinclus', 'action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Souscriptions') ?></h4>
        <?php if (!empty($offre->souscriptions)): ?>
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
            <?php foreach ($offre->souscriptions as $souscriptions): ?>
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
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des offres</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des Offres'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter une Offre'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $offre->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $offre->id], ['confirm' => __('Voulez-vous supprimer l\'offre? # {0}?', $offre->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Ajouter un mat??riel inclus'), ['controller' => 'Materielinclus', 'action' => 'add', $offre->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('Ajouter un service inclus'), ['controller' => 'Serviceinclus', 'action' => 'add', $offre->id], ['class' => 'btn btn-info']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($offre->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($offre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($offre->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($offre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($offre->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offre->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Materielinclus') ?></h4>
                <?php if (!empty($offre->materielinclus)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Offre Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($offre->materielinclus as $materielinclus) : ?>
                                <tr>
                                    <td><?= h($materielinclus->id) ?></td>
                                    <td><?= h($materielinclus->offre_id) ?></td>
                                    <td><?= h($materielinclus->name) ?></td>
                                    <td><?= h($materielinclus->created) ?></td>
                                    <td><?= h($materielinclus->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('D??tails'), ['controller' => 'Materielinclus', 'action' => 'view', $materielinclus->id]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Materielinclus', 'action' => 'edit', $materielinclus->id]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Materielinclus', 'action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($offre->paiements)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Client Id') ?></th>
                                <th><?= __('Souscription Id') ?></th>
                                <th><?= __('Offre Id') ?></th>
                                <th><?= __('Datepaiement') ?></th>
                                <th><?= __('Etatpaiement Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($offre->paiements as $paiements) : ?>
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
                                        <?= $this->Html->link(__('D??tails'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Serviceinclus') ?></h4>
                <?php if (!empty($offre->serviceinclus)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Is') ?></th>
                                <th><?= __('Offre Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($offre->serviceinclus as $serviceinclus) : ?>
                                <tr>
                                    <td><?= h($serviceinclus->is) ?></td>
                                    <td><?= h($serviceinclus->offre_id) ?></td>
                                    <td><?= h($serviceinclus->name) ?></td>
                                    <td><?= h($serviceinclus->created) ?></td>
                                    <td><?= h($serviceinclus->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('D??tails'), ['controller' => 'Serviceinclus', 'action' => 'view', $serviceinclus->is]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Serviceinclus', 'action' => 'edit', $serviceinclus->is]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Serviceinclus', 'action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($offre->souscriptions)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Client Id') ?></th>
                                <th><?= __('Offre Id') ?></th>
                                <th><?= __('Periode Id') ?></th>
                                <th><?= __('Montanttotal') ?></th>
                                <th><?= __('Datedebut') ?></th>
                                <th><?= __('Datefin') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($offre->souscriptions as $souscriptions) : ?>
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
                                        <?= $this->Html->link(__('D??tails'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>
