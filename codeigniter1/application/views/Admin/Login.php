

<?php include('header.php') ?>

<main>



<div class = "container">
<div class="col-sm-4 mx-auto border rounded mt-5 pt-3">
 <?php echo form_open('admin/index'); ?>
  <fieldset>
    <legend>Admin Panel</legend>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <?php echo form_input(['class'=>'form-control','name'=>'uname','type'=>'text','value'=>set_value("uname"),'placeholder'=>'Enter Username']) ?> 
    <div>
        <?php echo form_error('uname'); ?>
    </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <?php echo form_input(['class'=>'form-control','name'=>'upassword','type'=>'password','value'=>set_value("upassword"),'placeholder'=>'Enter password']) ?> 
      <div>
        <?php echo form_error('upassword'); ?>
    </div>
    </div>
    
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
    <?php echo form_submit(['type'=>'reset','class'=>'btn btn-info','value'=>'Reset']); ?>
  </fieldset>


</div>
</div>

</main>

<?php include('footer.php') ?>





