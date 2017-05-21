<div class="users form">
<?= $this->Form->create($user) ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('username', ['maxlength' => '30', 'pattern' => '[A-Za-z0-9.]*', 'title' => 'Usernames can be at most 30 alphanumeric or period characters']) ?>
        <?= $this->Form->control('email', ['maxlength'=>'60']) ?>
        <?= $this->Form->control('password', ['maxlength' => '30']) ?>
	<div class="g-recaptcha" data-sitekey="6LdoBh0UAAAAAMh3soyX9qhZJmPSr33oJy6-edt9"></div>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
