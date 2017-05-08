<?php $this->start("page_content");
$flash=$this->Session->flash(); 

if (isset($flash) &&!empty($flash)) :?>
<div data-alert class="alert-box text-center">
<?php echo$flash; ?>
<a href="#" class="close">&times;</a>
</div>
<?php endif; ?>
<div class="panel panel-default">
<h2 class="text-center">Register in The Market </h1>
</div>
<div class="row">
<div class="medium-6 medium-offset-3">
<?php echo$this->Form->create("User");
echo $this->Form->input("username",
array("label"=>'Username:')
      );

echo $this->Form->input("password",
array("label"=>'Password:')
      );

echo $this->Form->input("full_name",
array("label"=>'Full name:')
      );

echo $this->Form->input("address",
array("label"=>'Address: ')
      );
echo $this->Form->end(
array('class'=>'button  medium radius success ',
'label'=>"Register"
        )
      );
?>
</div>
</div>

<?php$this->end(); ?>
