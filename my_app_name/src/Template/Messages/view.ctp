<?php
/**
  * @var \App\View\AppView $this
  */
?>
<table class="table table-hover"i>
        <tr>
            <th>Sent To</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date and Time Sent</th>
        </tr>

            <td><?= $message->RECIPIENTID ?></td>
            <td><?= $message->SUBJECT  ?></td>
            <td><?= $message->BODY  ?></td>
            <td><?= $message->DATESENT  ?></td>
          <td><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?> </td>
        </tr>
    </table>
  
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->MESSAGEID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->MESSAGEID)]) ?> </li>
        <li><?= $this->Html->link(__('Inbox'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Outbox'), ['action' => 'outbox']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

