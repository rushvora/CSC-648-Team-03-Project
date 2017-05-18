<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="messages view large-9 medium-8 columns content">
    <h3><?=   h($message->SUBJECT) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SENDERID') ?></th>
            <td><?= $this->Number->format($message->SENDERID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('READSTATUS') ?></th>
            <td><?= $this->Number->format($message->READSTATUS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATESENT') ?></th>
            <td><?= h($message->DATESENT) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('MESSAGE:') ?></h4>
        <?= $this->Text->autoParagraph(h($message->BODY)); ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->MESSAGEID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->MESSAGEID)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

