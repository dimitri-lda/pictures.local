<?php
/* Smarty version 3.1.29, created on 2016-08-24 15:51:15
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bda653a95404_87962193',
  'file_dependency' => 
  array (
    '97cb1497e9d84340032a62a059fe3203e2262343' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\header.tpl',
      1 => 1472046580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bda653a95404_87962193 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <?php if ($_smarty_tpl->tpl_vars['lang']->value['home'] == 'Home') {?>
            <title><?php echo $_smarty_tpl->tpl_vars['pageTitleEn']->value;?>
</title>
        <?php } else { ?>
            <title><?php echo $_smarty_tpl->tpl_vars['pageTitleRu']->value;?>
</title>
        <?php }?>

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
          <?php echo '<script'; ?>
 src="js/vendor/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="js/vendor/respond.min.js"><?php echo '</script'; ?>
>
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
                        <li id='123'><a href="/" style="font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a></li>
                        <li id='123'><a href="/pictures/" style="font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pictures'];?>
</a></li>
                        <li><a href="/about/" style="font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_author'];?>
</a></li>
                        <li><a href="/contacts/" style="font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contacts'];?>
</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->     
                 <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-01">
                    <ul class="nav navbar-nav" >
                        <li><a href="javascript:void(0);" id="langRus" style="padding-right: 7px; padding-left: 8px; <?php if (($_smarty_tpl->tpl_vars['lang']->value['home'] == 'Главная')) {?>color: #428bca;<?php }?>">Rus</a></li>
                        <li><a href="javascript:void(0);" id="langEng" style="padding-right: 5px; padding-left: 9px; <?php if (($_smarty_tpl->tpl_vars['lang']->value['home'] == 'Home')) {?>color: #428bca;<?php }?>">Eng</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->    
            </nav><!-- /navbar -->
            
            <?php if (isset($_smarty_tpl->tpl_vars['UserName']->value)) {?>
                <div id="regLogBox">    
                    <a href="javascript:void(0);" id="logOut">Выйти</a>
                    <a href="/account/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
</a>
                </div>
            <?php } elseif (($_smarty_tpl->tpl_vars['pageTitleEn']->value == 'Contacts')) {?>
                <div id="regLogBox">
                    <a id="logination" href="/user/log/">Войти</a>
                </div>
            <?php }?>
                
        </div> <!-- /container -->
<?php }
}
