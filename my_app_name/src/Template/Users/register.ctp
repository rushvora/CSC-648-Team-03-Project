<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('username', ['maxlength' => '30', 'pattern' => '[A-Za-z0-9.]*', 'title' => 'Usernames can be at most 30 alphanumeric or period characters']) ?>
        <?= $this->Form->control('email', ['maxlength'=>'60']) ?>
        <?= $this->Form->control('password', ['maxlength' => '30']) ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
