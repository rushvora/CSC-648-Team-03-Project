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

    <?php foreach ($messages as $message):  ?>
      <?php if($message->READSTATUS == 0):  ?>
            <tr>    <td><b><?= $recipient[$message->RECIPIENTID]  ?></b></td>
                <td><b><?= $message->SUBJECT  ?></b></td>
                <td><b><?= $message->BODY  ?></b></td>
                <td><b><?= $message->DATESENT  ?></b></td>
                <td><b><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?></b></td>
	    </tr>

      <?php elseif($message->READSTATUS == 1):  ?>	
            <tr>
		<td><?= $recipient[$message->RECIPIENTID]  ?></td>
	        <td><?= $message->SUBJECT  ?></td>
                <td><?= $message->BODY  ?></td>
                <td><?= $message->DATESENT  ?></td>
                <td><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?></b></td>
            </tr>
      <?php endif;   ?>

    <?php endforeach; ?>
    </table>

		       

