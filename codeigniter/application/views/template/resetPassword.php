<html>
        <head>
        <title>Charisma</title>
    <?= link_tag("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css") ?> 
    <?= link_tag("assets/mycss/bootstrap-cerulean.min.css") ?>
    <?= link_tag("assets/mycss/charisma-app.css") ?>
    <?= link_tag("assets/bower_components/fullcalendar/dist/fullcalendar.css") ?>
    <?= link_tag("assets/bower_components/fullcalendar/dist/fullcalendar.print.css") ?>
    <?= link_tag("assets/bower_components/chosen/chosen.min.css") ?>
    <?= link_tag("assets/bower_components/colorbox/example3/colorbox.css") ?>
    <?= link_tag("assets/bower_components/responsive-tables/responsive-tables.css") ?>
    <?= link_tag("assets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css") ?>
    <?= link_tag("assets/css/jquery.noty.css") ?>
    <?= link_tag("assets/css/noty_theme_default.css") ?>
    <?= link_tag("assets/css/elfinder.min.css") ?>
    <?= link_tag("assets/css/elfinder.theme.css") ?>
    <?= link_tag("assets/css/jquery.iphone.toggle.css") ?>
    <?= link_tag("assets/css/uploadify.css") ?>
    <?= link_tag("assets/css/animate.min.css") ?> 
    
 
        </head>
        <body>

<main>

<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Reset Your Password</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please Enter your Password
            </div>
            <?php

            $token = $_GET['token'];

            ?>
             <?php echo form_open('Auth/newPassword','class= "form-horizontal"'); ?>
                <fieldset>
                    <input type = "hidden" name = "get_token" value = "<?php echo $token ?>" >

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <?php echo form_input(['class'=>'form-control','name'=>'newPassword','type'=>'password','value'=>set_value("newPassword"),'placeholder'=>'New Password']); ?>
                    </div>
                    <div>
                        <?php echo form_error('newPassword'); ?>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-group input-group-lg" style="margin-top: 15px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <?php echo form_input(['class'=>'form-control','name'=>'repeatPassword','type'=>'password','value'=>set_value("repeatPassword"),'placeholder'=>'Repeat Password']); ?>
                    </div>
                    <div>
                        <?php echo form_error('repeatPassword'); ?>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Submit']); ?>

                    </p>

                </fieldset>
            
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->


</main>

<!-- JS FILES -->
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?= base_url("assets/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.cookie.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/moment/min/moment.min.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/fullcalendar/dist/fullcalendar.min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/chosen/chosen.jquery.min.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/colorbox/jquery.colorbox-min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.noty.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/responsive-tables/responsive-tables.js") ?>"></script>
<script src="<?= base_url("assets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.raty.min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.iphone.toggle.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.autogrow-textarea.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.uploadify-3.1.min.js") ?>"></script>
<script src="<?= base_url("assets/myjs/jquery.history.js") ?>"></script>
<script src="<?= base_url("assets/myjs/charisma.js") ?>"></script>
        </body>
</html>    