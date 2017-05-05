<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username',['maxlength' => '30', 'pattern' => '[A-Za-z0-9.]*', 'title' => 'Usernames must be at most 30 alphanumeric or period characters.']) ?>
        <?= $this->Form->control('password',['maxlenght' => '30']) ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
