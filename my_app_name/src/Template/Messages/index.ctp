<?php
/**
  * @var \App\View\AppView $this
  */
?>
    <h1><?= __('Inbox') ?></h1>	
        
<table class="table table-hover"i>
        <tr>
            <th>From</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date and Time Received</th>
            <th>Message</th>
        </tr>

    <?php foreach ($messages as $message): ?>
            <td><?= $message->SENDERID ?></td>
            <td><?= $message->SUBJECT  ?></td>
            <td><?= $message->BODY  ?></td>
            <td><?= $message->DATESENT  ?></td>
            <td><?= $message->READSTATUS  ?></td>
          <td><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

		       

