<?php

/**
 * @var \App\View\AppView $this
 */
?>
<!--<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>-->



<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <?= $this->Html->image('admincnx.jpg') ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue - Connexion </h1>
                                <p><?= $this->Flash->render() ?></p>
                            </div>
                            <div class="users">

                                <?= $this->Flash->render() ?>
                                <?= $this->Form->create('', ['class' => 'user']) ?>
                                <div class="form-group">
                                    <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control form-control-user', 'required' => FALSE, 'label' => '', 'placeholder' => 'Entrer votre email...']) ?>
                                </div>

                                <div>
                                    <?= $this->Form->control('password', ['type' => 'password', 'class' => 'form-control form-control-user', 'required' => FALSE, 'label' => '', 'placeholder' => 'Entrer votre mot de passe...']) ?>
                                </div>

                                <?= $this->Form->button(__('Se connecter'), ['type' => 'submit', 'class' => 'btn btn-primary btn-user btn-block']); ?>
                                <?= $this->Form->end() ?>
                            </div>
                            <hr>
                            <div class="text-center">
                                <!-- <a class="small" href="forgot-password.html">Mot de passe oublié?</a> -->
                                <span>Contactez<strong> HIGH STAR SECURITY </strong>en cas d'oubli de votre mot de passe.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
