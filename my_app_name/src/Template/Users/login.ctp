<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('USERNAME',['maxlength' => '30', 'pattern' => '[A-Za-z0-9.]*', 'title' => 'Usernames must be at most 30 alphanumeric or period characters.']) ?>
        <?= $this->Form->control('PASSWORD',['maxlength' => '30', 'type' => 'password']) ?>
        <?= $this->Html->link('Create an account',['controller' => 'Users', 'action' => 'register']); ?>
	<p><?php echo $this->Html->link('Forgot your password?', ['controller' => 'Pages', 'action' => 'display', 'forgot_password']); ?></p>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
