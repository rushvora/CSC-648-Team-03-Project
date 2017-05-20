<?php
/**
  * @var \App\View\AppView $this
  */
?>
    <h1><?= __('Messages') ?></h1>

    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $message->SUBJECT  ?></td> <br>
            <td><?= $message->BODY  ?></td> <br>
          <td><?= $this->Html->link(__('View Message'), ['action' => 'view', $message->MESSAGEID]) ?> </td><br><br>
        </tr>
    <?php endforeach; ?>

