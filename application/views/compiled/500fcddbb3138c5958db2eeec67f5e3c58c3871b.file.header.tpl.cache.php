<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:01:17
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20280369685501fe9d80f2c8-91675632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500fcddbb3138c5958db2eeec67f5e3c58c3871b' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/header.tpl',
      1 => 1426095475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20280369685501fe9d80f2c8-91675632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conta' => 0,
    'title' => 0,
    'configuracao' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501fe9d9fab78_12176549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501fe9d9fab78_12176549')) {function content_5501fe9d9fab78_12176549($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Page Title -->
        <title><?php echo $_smarty_tpl->tpl_vars['conta']->value->NOME_RAZAO_SOCIAL;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- CSS -->
        <link rel="stylesheet" href="/web-files/css/bootstrap.css"/>

        <!-- Slider Revolution -->
        <link rel="stylesheet" href="/web-files/js/woothemes-FlexSlider-ce5441b/flexslider.css">
        <link rel="stylesheet" href="/web-files/plugins/revolution/css/settings.css">

        <!-- Font icons -->
        <link rel="stylesheet" href="/web-files/css/fontello.css" >
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/fontello-ie7.css" ><![endif]-->
        <link rel="stylesheet" href="/web-files/css/styles.css" />
        <link rel="stylesheet" href="/web-files/css/media-queries.css" />


        <style>
            header .topbar {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            footer .middlefoot ul li i {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            footer h2 {
                border-left: 1px dotted <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            h2 {
                border-left: 3px double <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            header .subbar #carousel-top .offer span strong {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            header .navbar .navbar-nav li.active a, header .navbar .navbar-nav li a:hover {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            header .navbar .navbar-form .form-group .input-group-btn .btn {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            a {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            header .subbar #carousel-top .offer:hover span {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            header .subbar #carousel-top .offer:hover {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            .dropdown ul li a:hover {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
!important;
            }
            .btn.red {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
                border-color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            .bannercontainer .caption p>span {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            .grid .item-grid .ribbon.red {
                border-top-color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
                border-right-color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            .bannercontainer .caption p>span>span {
                border: 30px solid <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
                border-bottom-color: transparent;
                border-right-color: transparent;
                border-top-color: transparent;
            }
            footer .middlefoot .recent-news:hover a {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            footer .middlefoot .recent-news:hover div .post-icon {
                background: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            #carousel-services .services-item .ico {
                border: 5px solid <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            #carousel-services .services-item:hover .ico {
                -webkit-box-shadow: 0 0 0 7px <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
                box-shadow: 0 0 0 7px <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
            footer .middlefoot ul li a:hover {
                color: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->COLOR;?>
;
            }
        </style>


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>        
        <![endif]-->

        <!-- Media queries -->
        <!--[if lt IE 9]>
              <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    </head>


    <body>

        <header>
            <!-- begin Top Bar -->
            <div class="topbar" >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-8">
                            <ul id="topmenu">
                                
                                <li><a href="tel:+55<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TELEFONE_LINK;?>
">Ligue: <?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TELEFONE;?>
</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <ul id="topsocial">
                                <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->FACEBOOK)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->FACEBOOK;?>
" target="_blank"><i class="icon-facebook"></i></a></li>
                                        <?php }?>
                                        <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->GOOGLE_PLUS)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->GOOGLE_PLUS;?>
" target="_blank"><i class="icon-gplus"></i></a></li>
                                        <?php }?>
                                        <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->LINKEDID)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->LINKEDID;?>
" target="_blank"><i class="icon-linkedin"></i></a></li>
                                        <?php }?>
                                        <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->TWITTER)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->TWITTER;?>
" target="_blank"><i class="icon-twitter"></i></a></li>
                                        <?php }?>
                                        <?php if (!is_array($_smarty_tpl->tpl_vars['configuracao']->value->INSTAGRAM)) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['configuracao']->value->INSTAGRAM;?>
" target="_blank"><i class="icon-instagram"></i></a></li>
                                        <?php }?>
                            </ul>
                        </div>
                        
                    </div>

                </div>
            </div>
            <!-- end Top Bar -->


            <!-- begin NavBar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a class="navbar-brand" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img style="width: 85%;" src="<?php if ($_smarty_tpl->tpl_vars['configuracao']->value->LOGOMARCA=='') {?>/web-files/img/logo_default.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['configuracao']->value->LOGOMARCA;?>
<?php }?>" alt="logo image"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse" style="line-height: 3em;">

                        <?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquise seu carro...">
                                    <span class="input-group-btn">
                                        <button class="btn" type="button"><i class="icon-search"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- end NavBar -->

            <!-- begin Sub Bar -->
            <div class="subbar" style="display: none">
                <div class="container">
                    <div id="carousel-top" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PALIO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PICASSO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PICASSO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="carousel-control" href="#carousel-top" data-slide="prev">
                            <span class="icon-left-circled"></span>
                        </a>
                        <a class="carousel-control next" href="#carousel-top" data-slide="next">
                            <span class="icon-right-circled"></span>
                        </a>

                    </div>
                </div>
            </div>
            <!-- end Sub Bar -->



        </header>
        <!-- End header -->

        <?php }} ?>
