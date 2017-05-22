<DOC html>
<style>
body {font-family: "Lato", sans-serif;}
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}
/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}



body {font-family: "Lato", sans-serif;}
/* Style the tab */
div.tab2 {
    overflow: hidden; 
    border: 1px solid #ccc;
    background-color: white;
}
/* Style the buttons inside the tab */
div.tab2 button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 14px;
}
/* Change background color of buttons on hover */
div.tabi2 button:hover {
    background-color: #ddd;
}
/* Create an active/current tablink class */
div.tab2 button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

</style>


<h1>My Dashboard</h1>
<div class="tab">
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']); ?>>Messages</button>
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'myListings']); ?> >My Listings</button>
</div>


<div class="tab2">
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']); ?>>Inbox</button>
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Messages', 'action' => 'outbox']); ?> >Outbox</button>
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Messages', 'action' => 'add']); ?> >Compose</button>
</div>

<h3>Inbox</h3>
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
            <tr> 
		<td><b><?= $recipient[$message->RECIPIENTID]  ?></b></td>
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

		       

