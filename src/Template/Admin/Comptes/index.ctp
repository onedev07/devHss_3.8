<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte[]|\Cake\Collection\CollectionInterface $comptes
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compte'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comptes index large-9 medium-8 columns content">
    <h3><?= __('Comptes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comptes as $compte): ?>
            <tr>
                <td><?= $this->Number->format($compte->id) ?></td>
                <td><?= h($compte->login) ?></td>
                <td><?= h($compte->password) ?></td>
                <td><?= h($compte->created) ?></td>
                <td><?= h($compte->modified) ?></td>
                <td><?= $compte->has('client') ? $this->Html->link($compte->client->name, ['controller' => 'Clients', 'action' => 'view', $compte->client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compte->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compte->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des comptes clients</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Comptes', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Créer un compte client</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des comptes clients</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Pseudo') ?></th>
                        <th><?= $this->Paginator->sort('Mot de passe') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('client_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Pseudo') ?></th>
                        <th><?= $this->Paginator->sort('Mot de passe') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('client_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                    <tbody>
                        <?php foreach ($comptes as $compte): ?>
                        <tr>
                            <td><?= $this->Number->format($compte->id) ?></td>
                            <td><?= h($compte->login) ?></td>
                            <td><?= h($compte->password) ?></td>
                            <td><?= h($compte->created) ?></td>
                            <td><?= h($compte->modified) ?></td>
                            <td><?= $compte->has('client') ? $this->Html->link($compte->client->name, ['controller' => 'Clients', 'action' => 'view', $compte->client->id]) : '' ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__(''), ['action' => 'view', $compte->id],['class' => 'btn btn-primary fas fa-list btn-circle btn-sm']) ?>
                                <?= $this->Html->link(__(''), ['action' => 'edit', $compte->id],['class' => 'btn btn-success fas fa-pencil-alt btn-circle btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id), 'class' => 'btn btn-danger fas fa-trash btn-circle btn-sm']) ?>
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





