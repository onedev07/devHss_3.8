<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele[]|\Cake\Collection\CollectionInterface $offreteles
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offretele'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Elementteles'), ['controller' => 'Elementteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elementtele'), ['controller' => 'Elementteles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptionteles'), ['controller' => 'Souscriptionteles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscriptiontele'), ['controller' => 'Souscriptionteles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offreteles index large-9 medium-8 columns content">
    <h3><?= __('Offreteles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offreteles as $offretele): ?>
            <tr>
                <td><?= $this->Number->format($offretele->id) ?></td>
                <td><?= h($offretele->name) ?></td>
                <td><?= h($offretele->prix) ?></td>
                <td><?= h($offretele->created) ?></td>
                <td><?= h($offretele->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offretele->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offretele->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offretele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>-->





<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des Offres télésurveillances</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href="<?= $this->Url->build(['controller'=>'Offreteles', 'action'=>'add']) ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter une offre télésurveillance</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des offres de télésurveillance</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                    <tbody>
                        <?php foreach ($offreteles as $offretele): ?>
                        <tr>
                            <td><?= $this->Number->format($offretele->id) ?></td>
                            <td><?= h($offretele->name) ?></td>
                            <td><?= h($offretele->prix) ?></td>
                            <td><?= h($offretele->created) ?></td>
                            <td><?= h($offretele->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Détails'), ['action' => 'view', $offretele->id]) ?>
                                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $offretele->id]) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $offretele->id], ['confirm' => __('Voulez-vous supprimer cette offre? # {0}?', $offretele->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>



</div>







