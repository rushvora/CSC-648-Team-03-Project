<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="messages index large-9 medium-8 columns content">
    <h3><?= __('Messages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('MESSAGEID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SENDERID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RECIPIENTID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SUBJECT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATESENT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('READSTATUS') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= $this->Number->format($message->MESSAGEID) ?></td>
                <td><?= $this->Number->format($message->SENDERID) ?></td>
                <td><?= $this->Number->format($message->RECIPIENTID) ?></td>
                <td><?= h($message->SUBJECT) ?></td>
                <td><?= h($message->DATESENT) ?></td>
                <td><?= $this->Number->format($message->READSTATUS) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $message->MESSAGEID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $message->MESSAGEID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $message->MESSAGEID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->MESSAGEID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
