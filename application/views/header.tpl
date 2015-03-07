<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Page Title -->
        <title>{$conta->NOME_RAZAO_SOCIAL} - {$title}</title>

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
                background: {$configuracao->COLOR};
            }
            footer .middlefoot ul li i {
                color: {$configuracao->COLOR};
            }
            footer h2 {
                border-left: 1px dotted {$configuracao->COLOR};
            }
            h2 {
                border-left: 3px double {$configuracao->COLOR};
            }
            header .subbar #carousel-top .offer span strong {
                color: {$configuracao->COLOR};
            }
            header .navbar .navbar-nav li.active a, header .navbar .navbar-nav li a:hover {
                color: {$configuracao->COLOR};
            }
            header .navbar .navbar-form .form-group .input-group-btn .btn {
                color: {$configuracao->COLOR};
            }
            a {
                color: {$configuracao->COLOR};
            }
            header .subbar #carousel-top .offer:hover span {
                background: {$configuracao->COLOR};
            }
            header .subbar #carousel-top .offer:hover {
                background: {$configuracao->COLOR};
            }
            .dropdown ul li a:hover {
                background: {$configuracao->COLOR}!important;
            }
            .btn.red {
                background: {$configuracao->COLOR};
                border-color: {$configuracao->COLOR};
            }
            .bannercontainer .caption p>span {
                background: {$configuracao->COLOR};
            }
            .grid .item-grid .ribbon.red {
                border-top-color: {$configuracao->COLOR};
                border-right-color: {$configuracao->COLOR};
            }
            .bannercontainer .caption p>span>span {
                border: 30px solid {$configuracao->COLOR};
                border-bottom-color: transparent;
                border-right-color: transparent;
                border-top-color: transparent;
            }
            footer .middlefoot .recent-news:hover a {
                color: {$configuracao->COLOR};
            }
            footer .middlefoot .recent-news:hover div .post-icon {
                background: {$configuracao->COLOR};
            }
            #carousel-services .services-item .ico {
                border: 5px solid {$configuracao->COLOR};
                color: {$configuracao->COLOR};
            }
            #carousel-services .services-item:hover .ico {
                -webkit-box-shadow: 0 0 0 7px {$configuracao->COLOR};
                box-shadow: 0 0 0 7px {$configuracao->COLOR};
            }
            footer .middlefoot ul li a:hover {
                color: {$configuracao->COLOR};
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
                                {*<li><a href="/{$language}/empresa">Sobre</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="/{$language}/contato">Contato</a></li>
                                <li><a href="/{$language}/onde-estamos">Onde estamos</a></li>*}
                                <li><a href="tel:+55{$configuracao->TELEFONE_LINK}">Ligue: {$configuracao->TELEFONE}</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <ul id="topsocial">
                                {if !is_array($configuracao->FACEBOOK)}
                                    <li><a href="{$configuracao->FACEBOOK}" target="_blank"><i class="icon-facebook"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->GOOGLE_PLUS)}
                                    <li><a href="{$configuracao->GOOGLE_PLUS}" target="_blank"><i class="icon-gplus"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->LINKEDID)}
                                    <li><a href="{$configuracao->LINKEDID}" target="_blank"><i class="icon-linkedin"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->TWITTER)}
                                    <li><a href="{$configuracao->TWITTER}" target="_blank"><i class="icon-twitter"></i></a></li>
                                {/if}
                                {if !is_array($configuracao->INSTAGRAM)}
                                    <li><a href="{$configuracao->INSTAGRAM}" target="_blank"><i class="icon-instagram"></i></a></li>
                                {/if}
                            </ul>
                        </div>
                        {*<div class="col-sm-2 col-md-1">
                        <div class="dropdown pull-right" id="language" >
                        <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" class="btn_lang en_gb"><span class="sr-only">United Kingdom</span><span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li role="presentation"><a role="menuitem" href="#" class="en_gb">English</a></li>
                        <li role="presentation"><a role="menuitem" href="#" class="es_es">Español</a></li>
                        <li role="presentation"><a role="menuitem" href="#" class="fr_fr">Français</a></li>
                        <li role="presentation"><a role="menuitem" href="#" class="pt_br">Português</a></li>
                        </ul>
                        </div>
                        </div>*}
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
{*                        <a class="navbar-brand" href="/{$language}/"><img src="/web-files/img/logo.png" alt="logo image"></a>*}
                        <a class="navbar-brand" href="/{$language}/"><img src="{if $configuracao->LOGOMARCA == ""}/web-files/img/logo_default.png{else}{$configuracao->LOGOMARCA}{/if}" alt="logo image"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        {include file="navbar.tpl"}

                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquise seu carro...">
                                    <span class="input-group-btn">
                                        <button class="btn" type="button"><i class="icon-search"></i></button>
                                    </span>
                                </div>
                            </div>
                            {*                            <a href="advanced-search.html" class="btn advanced" data-toggle="tooltip" title="Pesquisa avançada"><i class="icon-search"></i><i class="icon-plus"></i></a>*}
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- end NavBar -->

            <!-- begin Sub Bar -->
            <div class="subbar" >
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

        {*        {include file="navbar.tpl"}*}