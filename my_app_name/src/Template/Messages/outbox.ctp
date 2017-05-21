<h1><?= __('Oubox') ?></h1>

<table class="table table-hover"i>
        <tr>
            <th>Sent To</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date and Time Sent</th>
	    <th>Read</th>
        </tr>
    
    <?php foreach ($messages as $message): ?>
            <td><?= $message->RECIPIENTID ?></td>
            <td><?= $message->SUBJECT  ?></td> 
            <td><?= $message->BODY  ?></td> 
	    <td><?= $message->DATESENT  ?></td>
            <td><?= $message->READSTATUS  ?></td> 
          <td><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>
