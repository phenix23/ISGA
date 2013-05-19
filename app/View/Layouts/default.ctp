<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ISGA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/img.css'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/app.css'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap-responsive.css'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/jasny-bootstrap.min.css'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/jasny-bootstrap-responsive.min.css'); ?>">
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap-fileupload.min.css'); ?>">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $this->Html->url('/css/bootStrapGallery/style.css'); ?>">
    <!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $this->Html->url('/css/bootStrapGallery/bootstrap-image-gallery.min.css'); ?>">

    <!--  -->
    <?php echo $this->Html->css('bootStrapGallery/style'); ?>
    <?php echo $this->Html->css('bootStrapGallery/bootstrap-image-gallery'); ?>
    <?php echo $this->Html->css('jquery-ui/smoothness/jquery-ui-1.10.0.custom.min'); ?>
    <?php echo $this->Html->css('jquery-ui/smoothness/jquery-ui-1.10.0.custom'); ?>
    <?php echo $this->Html->css('fullCalandar/fullcalendar.css'); ?>
    <?php echo $this->Html->css('/usermgmt/css/umstyle'); ?>

    <!--  -->
    <?php echo $this->Html->script('less.js'); ?>
    <?php echo $this->Html->script('jquery-ui/jquery-1.9.0.js'); ?>
    <?php echo $this->Html->script('jquery-ui/jquery-ui-1.10.0.custom.min.js'); ?>
    <?php echo $this->Html->script('jquery.js'); ?>
    <?php echo $this->Html->script('bootstrap-tab.js'); ?>
    <?php echo $this->Html->script('bootstrap-transition.js'); ?>
    <?php echo $this->Html->script('bootstrap-tooltip.js'); ?>
    <?php echo $this->Html->script('bootstrap-popover.js'); ?>
    <?php echo $this->Html->script('bootstrap-alert.js'); ?>
    <?php echo $this->Html->script('bootstrap-modal.js'); ?>
    <?php echo $this->Html->script('bootstrap-dropdown.js'); ?>
    <?php echo $this->Html->script('bootstrap-scrollspy.js'); ?>
    <?php echo $this->Html->script('bootstrap-button.js'); ?>
    <?php echo $this->Html->script('bootstrap-collapse.js'); ?>
    <?php echo $this->Html->script('bootstrap-carousel.js'); ?>
    <?php echo $this->Html->script('bootstrap-typeahead.js'); ?>
    <?php echo $this->Html->script('bootstrap-affix.js'); ?>

    <?php echo $this->Html->script('bootstrap-affix.js'); ?>
    <?php echo $this->Html->script('jquery-expander-master/jquery.expander.js'); ?>
    <?php echo $this->Html->script('jqBootstrapValidation/jqBootstrapValidation.js'); ?>
    <?php echo $this->Html->script('jquery.aviaSlider.js'); ?>
    <?php echo $this->Html->script('umupdate.js'); ?> 
    <?php echo $this->Html->script('jasny-bootstrap.min.js'); ?>
    <?php echo $this->Html->script('jasny-bootstrap.js'); ?>
    <?php echo $this->Html->script('bootstrap-fileupload.min.js'); ?>
    <?php echo $this->Html->script('bootstrap-rowlink.js'); ?>
    <?php echo $this->Html->script('jquery.easing.1.3.js'); ?>
    <?php echo $this->Html->script('jquery-ui/ui/jquery.ui.effect.js'); ?>


    <!-- Module de gallry de Photo-->
    <?php echo $this->Html->script('bootStrapGallery/load-image.js'); ?>
    <?php echo $this->Html->script('bootStrapGallery/bootstrap-image-gallery.js'); ?>
    <?php echo $this->Html->script('bootStrapGallery/main-gallery.js'); ?>







    <style>
    #En-tete {
        padding-top: 100px; /* 60px to make the container go all the way to the bottom of the topbar */
        margin-bottom: 0px;
    }

    body header {
        padding-top:0px;
    }

    div.disabled {
        display: inline;
        float: none;
        clear: none;
        color: #C0C0C0;
    }

    body{
        background: url('../img/bg_top.gif') top repeat ;
                /*        background-clip: content-box;
                background-size: cover;*/
            }

            </style>



            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--        [if lt IE 9]-->
            <!--        <script src="dist/html5shiv.js"></script>-->
            <!--          [endif]-->

            <!-- Fav and touch icons -->
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
            <link rel="shortcut icon" href="/ico/favicon.png">
        </head>

        <body>
            <header>
            <!-- Bar Navigation Fix 
            =======================================================-->
            <div class="navbar navbar-inverse navbar-fixed-top" style="background: #555555; color: white;height: 40px;">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/ISGA" style="font-weight: bold;">ISGA</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav" style="margin-left : 250px">
                            <li >
                                <a href="#" style=" font-size: 11px;" class="dropdown-toggle" data-toggle="dropdown" role="button">ISGA</a>
                                <ul class="dropdown-menu" style="zoom :80%;display: block;opacity: 0.8;background: rgba(0, 0, 0, 0.46);visibility: hidden">
                                    <li><a tabindex="-1" href="#" >Action</a></li>
                                    <li><a tabindex="-1" href="#">Another action</a></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Separated link</a></li>          
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li >
                                <a href="#" style=" font-size: 11px;" class="dropdown-toggle" data-toggle="dropdown" role="button">Réalisations</a>
                                <ul class="dropdown-menu" style="zoom :80%;display: block;opacity: 0.8;background: rgba(0, 0, 0, 0.46);visibility: hidden">
                                    <li><a tabindex="-1" href="#" >Action</a></li>
                                    <li><a tabindex="-1" href="#">Another action</a></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Separated link</a></li>          
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="#" style=" font-size: 11px;" class="dropdown-toggle" data-toggle="dropdown" role="button">Presse</a>
                                <ul class="dropdown-menu" style="zoom :80%;display: block;opacity: 0.8;background: rgba(0, 0, 0, 0.46);visibility: hidden">
                                    <li><a tabindex="-1" href="#" >Action</a></li>
                                    <li><a tabindex="-1" href="#">Another action</a></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Separated link</a></li>          
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="#" style=" font-size: 11px;" class="dropdown-toggle" data-toggle="dropdown" role="button">Références</a>
                                <ul class="dropdown-menu" style="zoom :80%;display: block;opacity: 0.8;background: rgba(0, 0, 0, 0.46);visibility: hidden">
                                    <li><a tabindex="-1" href="#" >Action</a></li>
                                    <li><a tabindex="-1" href="#">Another action</a></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Separated link</a></li>          
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="#" style=" font-size: 11px;" class="dropdown-toggle" data-toggle="dropdown" role="button">Contacts</a>
                                <ul class="dropdown-menu" style="zoom :80%;display: block;opacity: 0.8;background: rgba(0, 0, 0, 0.46);visibility: hidden">
                                    <li><a tabindex="-1" href="#" >Action</a></li>
                                    <li><a tabindex="-1" href="#">Another action</a></li>
                                    <li><a tabindex="-1" href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#">Separated link</a></li>          
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                        </ul>



                        <?php if (!isset($_SESSION['UserAuth']['User']['username'])) { ?>
                        <?php echo $this->Form->create('User', array('url' => '/login', 'class' => 'navbar-form pull-right')); ?>
                        <?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "input input-small", 'placeholder' => 'Email', 'style' => 'height: 15px;')) ?>
                        <?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "input input-small", 'placeholder' => "Mot de Passe", 'style' => 'height: 15px;')) ?>
                        <?php echo $this->Form->Button(__('Se Connecter'), array('class' => 'btn btn-small')); ?>
                        <?php echo $this->Form->end(); ?>
                        <?php
                    } else {
                        ;
                        ?>
                        <div class="pull-right">
                            <ul class="nav pull-right">
                                <li id="session" class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Bienvenu,<i class="icon-user icon-white"></i> <?php echo $_SESSION['UserAuth']['User']['username']; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="zoom :90%;">
                                        <li><a href="./dashboard"><i class="icon-cog"></i> Administration</a></li>
                                        <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                                        <li class="divider"></li>
                                        <li><?php echo $this->Html->link('<i class="icon-off"></i> Se Déconncter', "/logout", array('escape' => false)); ?></li> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </header>

        <!-- Header
        ======================================================== -->

        <div class="container" style="margin-top:-130px;" id="En-tete">
            <div class="row" style="margin-left: 120px;height: 160px;margin-top: 10px;">
                <div class="span1" id="logo">
                    <?php echo $this->Html->image('logo/isga-logo-2.png', array('alt' => 'CakePHP', "style" => "width: 130px;")); ?></div>
                    <ul id="logo" style="list-style: none;z-index: 0;overflow: hidden;padding-top: 30px;margin-left: 200px">
                        <li id="logo-ar"><?php echo $this->Html->image('logo/logo-ar.png', array('alt' => 'CakePHP', "style" => "zoom: 100%;overflow : hidden; z-index:-1;padding-left:950px;")); ?></li>
                        <li id="logo-fr"><?php echo $this->Html->image('logo/logo-fr.png', array('alt' => 'CakePHP', "style" => "zoom: 100%;overflow : hidden; z-index:-1;position:absolute;padding-top:80px;")); ?></li>
                    </ul> 
                <!--                <form class="form-search pull-right" style=" margin-bottom: 0px; margin-top: 5px; margin-right:115px; ">
                                    <div class="input-append" style="position: relative;top:30px;">
                                        <input type="text" class="search-query" style="width: 120px;">
                                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                                    </div>
                                </form>-->
                            </div>
                        </div>
                    </div>

    <!-- NAVBAR bar de navigation
    ================================================================= -->
    <div class="navbar nav-header" style="margin-bottom: 0;">
        <div class="navbar-inner" style=" margin-left: 190px; margin-right: 190px;padding-left:40px ">
            <div class="container">

                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <!-- Be sure to leave the brand out there if you want it shown -->
                <a class="brand" href="http://localhost/ISGA/#"></a>

                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse collapse">
                    <ul class="nav" id="nav-2">
                        <li id="home" style=" text-transform: capitalize; font-size: larger;color:white;border-bottom: 5px solid rgb(180,180,180)  ">
                            <?php echo $this->Html->link('<i class="icon-home"></i> Accueil', array("controller" => "pages", "action" => "home"), array('escape' => false)); ?></a></li>

                            <!--  Formation -->
                            <li id ="formation" class="dropdown" style=" text-transform: capitalize; font-size: larger;color:white;border-bottom :5px solid rgba(226, 18, 0, 0.64) ">
                                <?php echo $this->Html->link('<i class="icon-briefcase"></i>  Formation', array("controller" => "formations", "action" => "index"), array('escape' => false)); ?>
                                <div class="menu-nav">
                                    <ul>
                                        <li><?php echo $this->Html->link('List Formation', array("controller" => "formations", "action" => "index"),array("style"=>"text-decoration:none;")); ?></li>
                                        <li><?php echo $this->Html->link('Formations informatique', array("controller" => "formations", "action" => "tabcontent", "informatique"), array("style"=>"text-decoration:none;")); ?></li>
                                        <li><?php echo $this->Html->link('List Formation', array("controller" => "formations", "action" => "index"), array("style"=>"text-decoration:none;")); ?></li>
                                        <li class="divider"></li>
                                        <li>Autre</li>                             
                                    </ul>
                                </div>
                            </li>
                            <!-- -  L’Accompagnement -->
                            <li id="acomp" class="dropdown" style=" text-transform: capitalize; font-size: larger; text-transform: capitalize; font-size: larger;color:white;border-bottom :5px solid rgb(0, 204, 49) ">
                                <?php echo $this->Html->link('<i class="icon-tasks"></i>  Accompagnement', array("controller" => "Accompagnement", "action" => "index"), array('escape' => false)); ?>
                                <div class="menu-nav">
                                    <ul>
                                        <li><?php echo $this->Html->link('Les Accompagnements', array("controller" => "formations", "action" => "index"),array("style"=>"text-decoration:none;")); ?></li>
                                        <li><?php echo $this->Html->link('Accompagnements 1', array("controller" => "formations", "action" => "tabcontent", "informatique"), array("style"=>"text-decoration:none;")); ?></li>
                                        <li><?php echo $this->Html->link('Accompagnements 2', array("controller" => "formations", "action" => "index"), array("style"=>"text-decoration:none;")); ?></li>
                                        <li class="divider"></li>
                                        <li>Autre</li>                                    
                                    </ul>
                                </div>

                            </li>

                            <li class="dropdown" style="text-transform: capitalize; font-size: larger; text-transform: capitalize; font-size: larger;color:white;border-bottom : 5px solid  rgb(245, 255, 0); ">
                                <?php echo $this->Html->link('<i class="icon-certificate"></i>  Consiel', array("controller" => "consiels", "action" => "index"), array('escape' => false)); ?>
                                <div class="menu-nav">
                                    <ul>
                                     <li><?php echo $this->Html->link('Les consiels', array("controller" => "formations", "action" => "index"),array("style"=>"text-decoration:none;")); ?></li>
                                     <li><?php echo $this->Html->link('consiel 1', array("controller" => "formations", "action" => "tabcontent", "informatique"), array("style"=>"text-decoration:none;")); ?></li>
                                     <li class="divider"></li>
                                     <li>Autre</li>   
                                 </ul>
                             </div>
                         </li>
                        <!--     <li style=" text-transform: capitalize; font-size: larger; ">
                        <?php echo $this->Html->link('<i class="icon-tasks"></i>  Catalogue', array("controller" => "catalogues", "action" => "index"), array('escape' => false)); ?></li> -->
                        <li class="dropdown" style=" text-transform: capitalize; font-size: larger; text-transform: capitalize; font-size: larger;color:white;border-bottom :5px solid rgb(0, 0, 0); "><?php echo $this->Html->link('<i class="icon-calendar"></i>  Planning', array("controller" => "full_calendar", "action" => "index"), array('escape' => false)); ?>
                        </li>
                        <li class="dropdown" style=" text-transform: capitalize; font-size: larger; text-transform: capitalize; font-size: larger;color:white;border-bottom :5px solid  rgb(73, 0, 204); "><?php echo $this->Html->link('<i class="icon-envelope"></i>  Contacts', array("controller" => "TicketEmails", "action" => "getAllEmails"), array('escape' => false)); ?></li>
                        <li class="dropdown" style=" text-transform: capitalize; font-size: larger; text-transform: capitalize; font-size: larger;color:white;border-bottom : 5px solid rgb(0, 65, 204);"><?php echo $this->Html->link('<i class="icon-film"></i> Album Photos', array("controller" => "pages", "action" => "galleryImage"), array('escape' => false)); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- chemin de navigation 
    ================================================================= -->

    <!-- <ul class="breadcrumb">
    <li><a href="#">Home</a> <span class="divider">></span></li>
    <li><a href="#">Library</a> <span class="divider">></span></li>
    <li class="active">Data</li>
</ul> -->


    <!-- Coprs de pages
    ================================================================= -->
    <section class="container"  style="zoom: 80%;">
        <!-- todo :  adapter le style au navigateurs -->
        <div >

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

            <?php echo $scripts_for_layout; ?>

        </div> <!-- /container  test 1 -->

        <!-- Footer de la pages
        ================================================================= -->
        <div>
        </section>
        <div class="bottom">
            <div class="wrapper-footer">
                <div class="grid4 first">
                    <h3>Références</h3>
                    <ul class="list1" style="margin-left: 60px;">
                        <li> <?php echo $this->Html->image('ST.jpg', array("class" => "img-rounded")); ?></li>
                        <li><?php echo $this->Html->image('AT.jpg', array("class" => "img-rounded")); ?></li>
                        <li><?php echo $this->Html->image('AM.jpg', array("class" => "img-rounded")); ?></li>
                        <li><?php echo $this->Html->image('FT.jpg', array("class" => "img-rounded")); ?></li>
                        <li><?php echo $this->Html->image('PT.jpg', array("class" => "img-rounded")); ?></li>
                        <!--                        <li><?php echo $this->Html->image('AT.jpg', array("class" => "img-rounded")); ?></li>-->

                    </ul>
                </div>
                <div class="grid3">
                    <h3>Contact</h3>
                    <dl class="address">
                        <dt id="map">Institut Superieur de Gestion .<br>
                            Annaba, 23000 Algerie.<br>
                            <a style="font-size: xx-small;font-style: normal;font-family: sans-serif;">(Afficher un aperçu de la carte)</a></dt>
                            <dd><span>Freephone:</span>+1 800 559 6580</dd>
                            <dd><span>Telephone:</span>+1 959 603 6035</dd>
                            <dd><span>FAX:</span>+1 504 889 9898</dd>
                            <dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
                        </dl>
                    </div>
                    <div class="grid3">
                        <h3>Liens Utils</h3>
                        <ul class="list2" style="margin-left: 0px;">
                            <li><a href="#">Certification</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">For Midsize Companies</a></li>
                            <li><a href="#">Investors</a></li>
                            <li><a href="#">Technology Network</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-footer">
                <div class="wrapper-footer">
                    <div class="copy">ISGA @ 2013  |	<a href="index-4.html">Contrat confidentiel</a></div>
                    <address class="phone">
                        Contactez Nous sur . <strong>1-123-456-7890</strong>
                    </address>
                </div>
            </div>
        </footer>
    </body>
    <script type="text/javascript">
    $(function() {


        //Menu personalisée
        // ============================================================================


        $('#nav-2 > li.dropdown').hover(function(event) {
            var index ;
            //$('li.dropdown').removeClass('active');
            if($(event.target).parents('li').length != 0){
                index = $(event.target).parents('li').index();
            }else{
                index = $(event.target).index();
            }

            switch (index) {
                case 1 :
                $('#formation').addClass('formation-active');
                $(event.target).siblings('.menu-nav').css('background-color', 'red');
                $(event.target).siblings('.menu-nav').css('background-image', 'linear-gradient(to bottom, rgb(204, 0, 0), rgb(204, 41, 0))');
                break;
                case 2 :
                $('#nav-2 :nth-child(3)').addClass('acomp-active');
                $(event.target).siblings('.menu-nav').css('background-color', 'green');
                $(event.target).siblings('.menu-nav').css('background-image', 'linear-gradient(to bottom, rgb(57, 204, 0), rgb(30, 150, 0))');
                break;
                case 3 :
                $('#nav-2 :nth-child(4)').addClass('childFour-active');
                $(event.target).siblings('.menu-nav').css('background-color', 'yallow');
                $(event.target).siblings('.menu-nav').css('background-image', 'linear-gradient(to bottom, rgb(204, 204, 0), rgb(196, 204, 0))');
                break;
                case 4:
                $('#nav-2  :nth-child(5)').addClass('childFive-active');
                break;
                case 5:
                $('#nav-2  :nth-child(6)').addClass('childSix-active');
                break;
                case 6:
                $('#nav-2  :nth-child(7)').addClass('childSeven-active');
                break;
                case 0:
                $('#home').addClass('childOne-active');
                break;
            }
            if($(event.target).siblings('.menu-nav').length != 0){
                $(event.target).siblings('.menu-nav').css('visibility', 'visible');
                $(event.target).siblings('.menu-nav').css('cursor', 'pointer');
            }else{
                $(event.target).children('.menu-nav').css('visibility', 'visible');
                $(event.target).siblings('.menu-nav').css('cursor', 'pointer');
            }

            $.fn.FadeSlideToggle = function(speed, fn) {
                // fadeToggle = opacity
                // slideToggle = height
                return $(this).animate({
                    'height': 'toggle',
                    'opacity': 'toggle'
                }, speed || 400, function() {
                    $.isFunction(fn) && fn.call(this);
                });
            };
            $(event.target).siblings('.menu-nav').FadeSlideToggle(400);
        }
        , function(event) {

            if($(event.target).parents('li').length != 0){
                index = $(event.target).parents('li').index();
            }else{
                index = $(event.target).index();
            }

            switch (index) {
                case 1 :
                $('#formation').removeClass('formation-active');
                break;
                case 2 :
                $('#nav-2 :nth-child(3)').removeClass('acomp-active');
                break;
                case 3 :
                $('#nav-2 :nth-child(4)').removeClass('childFour-active');
                break;
                case 4 :
                $('#nav-2 :nth-child(5)').removeClass('childFive-active');
                break;
                case 5 :
                $('#nav-2 :nth-child(6)').removeClass('childSix-active');
                break;
                case 6 :
                $('#nav-2 :nth-child(7)').removeClass('childSeven-active');
                break;
                case 0 :
                $('#home').removeClass('childOne-active');
                break;

            }
            //$(event.target).parent('li.dropdown').removeClass('active-' + index);
            $.fn.FadeSlideHidden = function(speed, fn) {
                return $(this).animate({
                    'height': 'hide',
                    'opacity': 'hide'
                }, speed || 500, function() {
                    $.isFunction(fn) && fn.call(this);
                });
            };
            $('.menu-nav').FadeSlideHidden(400);
            //setTimeout($(event.target).siblings('.menu-nav').css('visibility', 'hidden'), 30);
        });



        //
        //
        //        //Animation des Logo du titre
        //
        //========================================================================


        setInterval(movement, 3000);
        function movement() {
            //animation titres logo
            $('#logo-ar > img').animate({'paddingLeft': '0px'}, 1000, function() {
                $('#logo-ar > img').delay(1000).fadeOut(2000, function() {
                    $('#logo-ar > img').css({'paddingLeft': '950px'});
                });
                $('#logo-ar > img').fadeIn(550);
            });
            $('#logo-fr > img').animate({'paddingTop': '0px'}, 1000, function() {
                $('#logo-fr > img').delay(1000).fadeOut(2000, function() {
                    $('#logo-fr > img').css({'paddingTop': '80px'});
                });
                $('#logo-fr > img').fadeIn(550);
            });
        }

        setInterval(movelogo, 7000);
        function movelogo() {
            //rotation du logo
            var angle = 0;
            $("#logo > img").animate({"margin-left": "700px"}, {step: function(now, fx) {
                angle += 0;
                $(this).css({"-moz-transform": "rotate(" + now + "deg)",
                    "-webkit-transform": "rotate(" + now + "deg)",
                    "-ms-transform": "rotate(" + now + "deg)",
                    "-o-transform": "rotate(" + now + "deg)"});
            }, duration: 1000}, 'swing', function() {
                $(this).hide(550);
            });
            $("#logo > img").animate({"margin-left": "0px"}, {step: function(now, fx) {
                angle += 1;
                $(this).css({"-moz-transform": "rotate(" + now + "deg)",
                    "-webkit-transform": "rotate(" + now + "deg)",
                    "-ms-transform": "rotate(" + now + "deg)",
                    "-o-transform": "rotate(" + now + "deg)"});
            }, duration: 1000}, 'swing', function() {
                $(this).show(550);
            });
        }

//Tooltip pour la localisation des site en google Map
//==============================================================================
$('#map').on('click', function() {
    _div = $('#map').html();
    $(this).attr('data-original-title', '<iframe width="425" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=206498424700587032853.0004d64a8128bed397ad8&amp;hl=fr&amp;ie=UTF8&amp;ll=36.897057,7.752775&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>Afficher <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=206498424700587032853.0004d64a8128bed397ad8&amp;hl=fr&amp;ie=UTF8&amp;ll=36.897057,7.752775&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">isga-annaba</a> sur une carte plus grande</small>');
    $(this).tooltip({html: true, delay: {show: 500, hide: 100}, trigger: 'click'});
});



//Rotation des icons des réferences 
//==============================================================================

setInterval(rotate, 2000);
function rotate() {
    $('ul.list1 > li:not(:nth-child(3))>img').animate({'opacity': '0.5', 'marginLeft': '5px', 'marginRight': '5px', 'zoom': '1'}, 'slow');
    $('ul.list1 > li')
    .css('position', 'relative')
    .animate({'left': '-60px'}, 'slow', 'swing',
        function() {
            console.log($('ul.list1 >li').length);
                $('ul.list1 >li:first-child').hide(500 ,function(){
                $(this).insertAfter('ul.list1 >li:last-child')
                $(this).show(500);
                })
            });
    $('ul.list1 > li:nth-child(1) > img').animate({'zoom': '1.2', 'marginLeft': '10px', 'marginRight': '10px', 'opacity': '1.5'}, 'slow');
}

//
//================================================================================

$('#session').on('click', function() {
    $('.dropdown-toggle').dropdown();
});
});
</script>
</html>
