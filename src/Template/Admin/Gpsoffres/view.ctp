<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gpsoffre $gpsoffre
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gpsoffre'), ['action' => 'edit', $gpsoffre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gpsoffre'), ['action' => 'delete', $gpsoffre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpsoffre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gpsoffres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpsoffre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gpspayments'), ['controller' => 'Gpspayments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpspayment'), ['controller' => 'Gpspayments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gpsretourpaiements'), ['controller' => 'Gpsretourpaiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gpsretourpaiement'), ['controller' => 'Gpsretourpaiements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gpsoffres view large-9 medium-8 columns content">
    <h3><?= h($gpsoffre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($gpsoffre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gpsoffre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($gpsoffre->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gpsoffre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gpsoffre->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($gpsoffre->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Gpspayments') ?></h4>
        <?php if (!empty($gpsoffre->gpspayments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Gpsoffre Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Periode Id') ?></th>
                <th scope="col"><?= __('Prixtotal') ?></th>
                <th scope="col"><?= __('Creadted') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gpsoffre->gpspayments as $gpspayments): ?>
            <tr>
                <td><?= h($gpspayments->id) ?></td>
                <td><?= h($gpspayments->gpsoffre_id) ?></td>
                <td><?= h($gpspayments->client_id) ?></td>
                <td><?= h($gpspayments->periode_id) ?></td>
                <td><?= h($gpspayments->prixtotal) ?></td>
                <td><?= h($gpspayments->creadted) ?></td>
                <td><?= h($gpspayments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Gpspayments', 'action' => 'view', $gpspayments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Gpspayments', 'action' => 'edit', $gpspayments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gpspayments', 'action' => 'delete', $gpspayments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpspayments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Gpsretourpaiements') ?></h4>
        <?php if (!empty($gpsoffre->gpsretourpaiements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Refpay') ?></th>
                <th scope="col"><?= __('Session') ?></th>
                <th scope="col"><?= __('Payid') ?></th>
                <th scope="col"><?= __('Gpsoffre Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Montant') ?></th>
                <th scope="col"><?= __('Tel') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Datepay') ?></th>
                <th scope="col"><?= __('Datefin') ?></th>
                <th scope="col"><?= __('Timepay') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gpsoffre->gpsretourpaiements as $gpsretourpaiements): ?>
            <tr>
                <td><?= h($gpsretourpaiements->id) ?></td>
                <td><?= h($gpsretourpaiements->refpay) ?></td>
                <td><?= h($gpsretourpaiements->session) ?></td>
                <td><?= h($gpsretourpaiements->payid) ?></td>
                <td><?= h($gpsretourpaiements->gpsoffre_id) ?></td>
                <td><?= h($gpsretourpaiements->client_id) ?></td>
                <td><?= h($gpsretourpaiements->montant) ?></td>
                <td><?= h($gpsretourpaiements->tel) ?></td>
                <td><?= h($gpsretourpaiements->description) ?></td>
                <td><?= h($gpsretourpaiements->datepay) ?></td>
                <td><?= h($gpsretourpaiements->datefin) ?></td>
                <td><?= h($gpsretourpaiements->timepay) ?></td>
                <td><?= h($gpsretourpaiements->canal) ?></td>
                <td><?= h($gpsretourpaiements->created) ?></td>
                <td><?= h($gpsretourpaiements->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Gpsretourpaiements', 'action' => 'view', $gpsretourpaiements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Gpsretourpaiements', 'action' => 'edit', $gpsretourpaiements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gpsretourpaiements', 'action' => 'delete', $gpsretourpaiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gpsretourpaiements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div> -->




<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des offres GPS</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des Offres GPS'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter une Offre GPS'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $gpsoffre->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $gpsoffre->id], ['confirm' => __('Voulez-vous supprimer l\'offre GPS? # {0}?', $gpsoffre->id), 'class' => 'btn btn-danger']) ?>
            
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($gpsoffre->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($gpsoffre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gpsoffre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($gpsoffre->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($gpsoffre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($gpsoffre->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($gpsoffre->description)); ?>
                </blockquote>
            </div>
            

</div>

