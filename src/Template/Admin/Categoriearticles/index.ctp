<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriearticle[]|\Cake\Collection\CollectionInterface $categoriearticles
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categoriearticle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriearticles index large-9 medium-8 columns content">
    <h3><?= __('Categoriearticles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriearticles as $categoriearticle): ?>
            <tr>
                <td><?= $this->Number->format($categoriearticle->id) ?></td>
                <td><?= h($categoriearticle->name) ?></td>
                <td><?= h($categoriearticle->created) ?></td>
                <td><?= h($categoriearticle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriearticle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriearticle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriearticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriearticle->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des cat??gories d'articles</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Categoriearticles', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Cr??er une cat??gorie d'articles</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des cat??gories d'articles</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($categoriearticles as $categoriearticle): ?>
                    <tr>
                        <td><?= $this->Number->format($categoriearticle->id) ?></td>
                        <td><?= h($categoriearticle->name) ?></td>
                        <td><?= h($categoriearticle->created) ?></td>
                        <td><?= h($categoriearticle->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $categoriearticle->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriearticle->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriearticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriearticle->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>