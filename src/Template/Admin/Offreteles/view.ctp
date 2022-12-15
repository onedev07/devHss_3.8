<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele $offretele
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offretele'), ['action' => 'edit', $offretele->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offretele'), ['action' => 'delete', $offretele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offreteles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offretele'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Elementteles'), ['controller' => 'Elementteles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elementtele'), ['controller' => 'Elementteles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offreteles view large-9 medium-8 columns content">
    <h3><?= h($offretele->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($offretele->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= h($offretele->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offretele->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($offretele->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($offretele->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($offretele->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Elementteles') ?></h4>
        <?php if (!empty($offretele->elementteles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Offretele Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offretele->elementteles as $elementteles): ?>
            <tr>
                <td><?= h($elementteles->id) ?></td>
                <td><?= h($elementteles->name) ?></td>
                <td><?= h($elementteles->created) ?></td>
                <td><?= h($elementteles->modified) ?></td>
                <td><?= h($elementteles->offretele_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Elementteles', 'action' => 'view', $elementteles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Elementteles', 'action' => 'edit', $elementteles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elementteles', 'action' => 'delete', $elementteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementteles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Souscriptionteles') ?></h4>
        <?php if (!empty($offretele->souscriptionteles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Offretele Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($offretele->souscriptionteles as $souscriptionteles): ?>
            <tr>
                <td><?= h($souscriptionteles->id) ?></td>
                <td><?= h($souscriptionteles->offretele_id) ?></td>
                <td><?= h($souscriptionteles->client_id) ?></td>
                <td><?= h($souscriptionteles->created) ?></td>
                <td><?= h($souscriptionteles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionteles', 'action' => 'view', $souscriptionteles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionteles', 'action' => 'edit', $souscriptionteles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionteles', 'action' => 'delete', $souscriptionteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionteles->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres télésurveillances</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12">
            <?= $this->Html->link(__('Liste des Offres télésurveillance'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Créer une Offre'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $offretele->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $offretele->id], ['confirm' => __('Voulez-vous supprimer l\'offre? # {0}?', $offretele->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Ajouter un élément'), ['controller' => 'Elementteles','action' => 'add', $offretele->id], ['class' => 'btn btn-warning']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($offretele->name) ?></h6>
        </div>
            <div class="card-body">
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Name') ?></th>
                        <td><?= h($offretele->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Prix') ?></th>
                        <td><?= h($offretele->prix) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($offretele->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($offretele->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modified') ?></th>
                        <td><?= h($offretele->modified) ?></td>
                    </tr>
                </table>
                <div class="row">
                    <h4><?= __('Description') ?></h4>
                    <?= $this->Text->autoParagraph(h($offretele->description)); ?>
                </div>
                <div class="related">
                    <h4><?= __('Related Elementteles') ?></h4>
                    <?php if (!empty($offretele->elementteles)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Name') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col"><?= __('Offretele Id') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offretele->elementteles as $elementteles): ?>
                        <tr>
                            <td><?= h($elementteles->id) ?></td>
                            <td><?= h($elementteles->name) ?></td>
                            <td><?= h($elementteles->created) ?></td>
                            <td><?= h($elementteles->modified) ?></td>
                            <td><?= h($elementteles->offretele_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Elementteles', 'action' => 'view', $elementteles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Elementteles', 'action' => 'edit', $elementteles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elementteles', 'action' => 'delete', $elementteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementteles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <h4><?= __('Related Souscriptionteles') ?></h4>
                    <?php if (!empty($offretele->souscriptionteles)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Offretele Id') ?></th>
                            <th scope="col"><?= __('Client Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offretele->souscriptionteles as $souscriptionteles): ?>
                        <tr>
                            <td><?= h($souscriptionteles->id) ?></td>
                            <td><?= h($souscriptionteles->offretele_id) ?></td>
                            <td><?= h($souscriptionteles->client_id) ?></td>
                            <td><?= h($souscriptionteles->created) ?></td>
                            <td><?= h($souscriptionteles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionteles', 'action' => 'view', $souscriptionteles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionteles', 'action' => 'edit', $souscriptionteles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionteles', 'action' => 'delete', $souscriptionteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionteles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
    </div>


</div>



