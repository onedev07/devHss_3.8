<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</div>
