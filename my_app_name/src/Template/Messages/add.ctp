<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="messages form large-9 medium-8 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->input('SENDERID');
            echo $this->Form->input('RECIPIENTID');
            echo $this->Form->input('SUBJECT');
            echo $this->Form->input('BODY');
            echo $this->Form->input('DATESENT', ['empty' => true]);
            echo $this->Form->input('READSTATUS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
