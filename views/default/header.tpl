<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        {if $lang['home'] == 'Home'}
            <title>{$pageTitleEn}</title>
        {else}
            <title>{$pageTitleRu}</title>
        {/if}

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Loading Bootstrap -->
        <link href="/templates/default/flat-ui/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Loading Flat UI -->
        <link href="/templates/default/flat-ui/dist/css/flat-ui.min.css" rel="stylesheet">
        <!-- Loading project CSS -->
        <link href="/templates/default/css/main.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/vendor/html5shiv.js"></script>
          <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container"><br />
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="/">Artphilexpress</a>
                </div>

                <div class="collapse navbar-collapse navbar-left" id="navbar-collapse-01">
                    <ul class="nav navbar-nav" >
                        <li id='123'><a href="/" style="font-size:17px;">{$lang['home']}</a></li>
                        <li id='123'><a href="/pictures/" style="font-size:17px;">{$lang['pictures']}</a></li>
                        <li><a href="/about/" style="font-size:17px;">{$lang['about_author']}</a></li>
                        <li><a href="/contacts/" style="font-size:17px;">{$lang['contacts']}</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->     
                 <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-01">
                    <ul class="nav navbar-nav" >
                        <li><a href="javascript:void(0);" id="langRus" style="padding-right: 7px; padding-left: 8px; {if ($lang['home'] == 'Главная')}color: #428bca;{/if}">Rus</a></li>
                        <li><a href="javascript:void(0);" id="langEng" style="padding-right: 5px; padding-left: 9px; {if ($lang['home'] == 'Home')}color: #428bca;{/if}">Eng</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->    
            </nav><!-- /navbar -->
            
            {if isset($UserName)}
                <div id="regLogBox">    
                    <a href="javascript:void(0);" id="logOut">Выйти</a>
                    <a href="/account/" id="userLink">{$UserName}</a>
                </div>
            {else if ($pageTitleEn == 'Contacts')}
                <div id="regLogBox">
                    <a id="logination" href="/user/log/">Войти</a>
                </div>
            {/if}
                
        </div> <!-- /container -->
