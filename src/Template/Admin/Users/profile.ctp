<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Modifer mon profile'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($user->name) ?></h6>
        </div>
        <div class="card-body">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Usergroup') ?></th>
                    <td><?= $user->has('usergroup') ? $this->Html->link($user->usergroup->name, ['controller' => 'Usergroups', 'action' => 'view', $user->usergroup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Cel') ?></th>
                    <td><?= h($user->cel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tel') ?></th>
                    <td><?= h($user->tel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Articles') ?></h4>
                <?php if (!empty($user->articles)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Categorie Article Id') ?></th>
                                <th><?= __('Title') ?></th>
                                <th><?= __('Body') ?></th>
                                <th><?= __('Published') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->articles as $articles) : ?>
                                <tr>
                                    <td><?= h($articles->id) ?></td>
                                    <td><?= h($articles->user_id) ?></td>
                                    <td><?= h($articles->categorie_article_id) ?></td>
                                    <td><?= h($articles->title) ?></td>
                                    <td><?= h($articles->body) ?></td>
                                    <td><?= h($articles->published) ?></td>
                                    <td><?= h($articles->created) ?></td>
                                    <td><?= h($articles->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Détails'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
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