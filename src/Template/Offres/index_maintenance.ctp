<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre[]|\Cake\Collection\CollectionInterface $offres
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materielinclus'), ['controller' => 'Materielinclus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Serviceinclus'), ['controller' => 'Serviceinclus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['controller' => 'Souscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Souscription'), ['controller' => 'Souscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offres index large-9 medium-8 columns content">
    <h3><?= __('Offres') ?></h3>
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
            <?php foreach ($offres as $offre): ?>
            <tr>
                <td><?= $this->Number->format($offre->id) ?></td>
                <td><?= h($offre->name) ?></td>
                <td><?= $this->Number->format($offre->prix) ?></td>
                <td><?= h($offre->created) ?></td>
                <td><?= h($offre->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id)]) ?>
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


<?= $this->element('header'); ?>
<?= $this->element('slider'); ?>



<section id="content">
    <div class="container">
    <!-- divider -->
    <div class="row">
        <div class="span12">
            <div class="solidline">
            </div>
        </div>
    </div>
    <!-- end divider -->

    <div class="row">

        <div class="span12">
            <h1 align="center"><strong>SITE WEB MAINTENANCE...</strong></h1>
            <p align="center"><strong>Nous nous escusons pour d??sagrement occasionn??. Merci ?? vous!</strong></p>
			<!-- divider -->
    <div class="row">
        <div class="span12">
            <div class="solidline">
            </div>
        </div>
    </div>
    <!-- end divider -->
        </div>
        

        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
    </div>

    </div>
    </div>
    
</section>





<?= $this->element('footer'); ?>
