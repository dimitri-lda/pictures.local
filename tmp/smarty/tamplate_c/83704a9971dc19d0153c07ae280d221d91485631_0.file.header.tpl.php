<?php
/* Smarty version 3.1.29, created on 2016-05-28 12:22:15
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574971578f8e60_60919959',
  'file_dependency' => 
  array (
    '83704a9971dc19d0153c07ae280d221d91485631' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\header.tpl',
      1 => 1464430562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574971578f8e60_60919959 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

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
                    <a class="navbar-brand" href="/">Daovis</a>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-01">
                    <ul class="nav navbar-nav" >
                        <li class="acive"><a href="/news/">Новости</a></li>
                        <li id='123'><a href="/prodshop/">Товары</a></li>
                        <li><a href="/fitness/">Фитнес</a></li>
                        <li><a href="/health/">О здоровье</a></li>
                        <li><a href="/article/01/">О нас</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->         
            </nav><!-- /navbar -->
            
            <!-- /search -->
    
            
            <?php if (isset($_smarty_tpl->tpl_vars['UserName']->value)) {?>
                <div id="regLogBox">    
                    <a href="#" id="logOut"  onclick="getExUrl2();">Выйти</a>
                    <a href="/account/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
</a>
                </div>
                <form id="targetX" method="post" action="/user/logout/">
                    <input type="text" name="url2" id='urlEx2' value="">
                    <input type="submit" value="Go">
                </form>
            <?php } else { ?>
                <div id="regLogBox">
                    <a id="registration" href="/user/reg/" onclick="getExUrl();">Регистрация</a>
                    <a id="logination" href="/user/log/" onclick="getExUrl();">Войти</a>
                </div>
            <?php }?>
        </div> <!-- /container -->
<?php }
}
