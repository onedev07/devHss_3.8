<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement $etatpaiement
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etatpaiement'), ['action' => 'edit', $etatpaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etatpaiement'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etatpaiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etatpaiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etatpaiements view large-9 medium-8 columns content">
    <h3><?= h($etatpaiement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($etatpaiement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etatpaiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($etatpaiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($etatpaiement->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($etatpaiement->paiements)): ?>
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
            <?php foreach ($etatpaiement->paiements as $paiements): ?>
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
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des ??tats de paiement</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des ??tats de paiement'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Cr??er un ??tat'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $etatpaiement->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Voulez-vous supprimer l\'??tat? # {0}?', $etatpaiement->id), 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($etatpaiement->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($etatpaiement->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($etatpaiement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($etatpaiement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($etatpaiement->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($etatpaiement->paiements)) : ?>
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
                            <?php foreach ($etatpaiement->paiements as $paiements) : ?>
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
        </div>
    </div>


</div>
