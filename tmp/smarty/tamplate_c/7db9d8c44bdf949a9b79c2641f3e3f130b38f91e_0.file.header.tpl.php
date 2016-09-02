<?php
/* Smarty version 3.1.29, created on 2016-02-18 15:13:06
  from "E:\Servers\xampp\htdocs\site.local\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5d172164ec8_33740436',
  'file_dependency' => 
  array (
    '7db9d8c44bdf949a9b79c2641f3e3f130b38f91e' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\site.local\\views\\default\\header.tpl',
      1 => 1455804783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_56c5d172164ec8_33740436 ($_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    </head>
<body>
    
    <div id="header">
        <h1>MiPlusM - интернет магазин</h1>
    </div>
     
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="centerColumn">
        centerColumn<?php }
}
