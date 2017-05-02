<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->MESSAGEID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->MESSAGEID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->MESSAGEID)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="messages view large-9 medium-8 columns content">
    <h3><?= h($message->MESSAGEID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SUBJECT') ?></th>
            <td><?= h($message->SUBJECT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MESSAGEID') ?></th>
            <td><?= $this->Number->format($message->MESSAGEID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SENDERID') ?></th>
            <td><?= $this->Number->format($message->SENDERID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RECIPIENTID') ?></th>
            <td><?= $this->Number->format($message->RECIPIENTID) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('BODY') ?></h4>
        <?= $this->Text->autoParagraph(h($message->BODY)); ?>
    </div>
</div>
