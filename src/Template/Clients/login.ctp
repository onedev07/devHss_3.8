<?= $this->element('header'); ?>


<section id="inner-headline">
    <div class="container">
    <div class="row">
        <div class="span4">
        <div class="inner-heading">
            <h2>CONNEXION</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Connexion</li>
        </ul>
        </div>
    </div>
    </div>
</section>


<section id="content">
    <div class="container">
    <div class="row">
		<div class="span6"></div>
		<div class="span4">
        <h4><strong>Se connecter</strong></h4>
        </div>
		<!-- <div class="span4"></div> -->
    </div>

    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->


    <div class="container">
        <div class="row">
		<div class="span2"></div>
		<div class="span2"><?= $this->Html->image('admin_user_icon.png',['style'=>'height:150px']) ?></div>
		<div class="span4">
			<?= $this->Flash->render() ?>
			<?= $this->Form->create('', ['class' => 'form-horizontal', 'url' => ['controller' => 'Clients', 'action' => 'login']]) ?>
				
				<div class="control-group">
					<label class="control-label">Email :</label>
					<div class="controls">
						<?= $this->Form->control('email', ['type'=> 'email', 'name'=> 'email', 'label'=> '']); ?>
                    </div>					
				</div>
				<div class="control-group">
					<label class="control-label">Mot de passe :</label>
					<div class="controls">
						<?= $this->Form->control('password', ['type'=> 'password', 'name'=> 'password', 'label'=> '']); ?>
                    </div>					
				</div>
				<div class="control-group">
                    <div class="controls">
						<?= $this->Form->button(__('Se connecter'), ['type'=> 'submit','class'=> 'btn btn-large btn-theme btn-danger btn-rounded']) ?>
                    </div>
                </div>
				
			<?= $this->Form->end() ?>
		</div>
        </div>
    </div>


    </div>
</section>


<?= $this->element('footer'); ?>

