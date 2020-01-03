<html>
        <head>
        <title>Charisma</title>
         <link rel="stylesheet" href="">
  
    <?= link_tag("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <?= link_tag("assets/mycss/bootstrap-cerulean.min.css") ?>
    <?= link_tag("assets/mycss/charisma-app.css") ?>
	<?= link_tag("assets/bower_components/fullcalendar/dist/fullcalendar.css") ?>
	<?= link_tag("assets/bower_components/fullcalendar/dist/fullcalendar.print.css") ?>
	<?= link_tag("assets/bower_components/chosen/chosen.min.css") ?>
	<?= link_tag("assets/bower_components/colorbox/example3/colorbox.css") ?>
	<?= link_tag("assets/bower_components/responsive-tables/responsive-tables.css") ?>
	<?= link_tag("assets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css") ?>
	<?= link_tag("assets/mycss/jquery.noty.css") ?>
	<?= link_tag("assets/mycss/noty_theme_default.css") ?>
	<?= link_tag("assets/mycss/elfinder.min.css") ?>
	<?= link_tag("assets/mycss/elfinder.theme.css") ?>
	<?= link_tag("assets/mycss/jquery.iphone.toggle.css") ?>
	<?= link_tag("assets/mycss/uploadify.css") ?>
	<?= link_tag("assets/mycss/animate.min.css") ?> 
    <?= link_tag("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") ?> 
    


        <style>
.alert-deactive
{
padding:15px;
margin-bottom:20px;
border:1px solid transparent;
border-radius:4px;
color: white;
background-color: #FF0000;
border-color: #FF0000;
}

.alert-active
{
padding:15px;
margin-bottom:20px;
border:1px solid transparent;
border-radius:4px;
color: #32CD32;
background-color: #32cd32;
border-color: #32cd32;
}
        </style>

        </head>
        <body>


        	<!-- topbar starts -->
    <div class="navbar navbar-default" style="margin: 0;" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= base_url("Admin/logout") ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
 
          
        