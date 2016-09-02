<?php
/* Smarty version 3.1.29, created on 2016-05-08 13:48:20
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\admin-left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572f2784a8a107_25090932',
  'file_dependency' => 
  array (
    'a55e34655ad5a1f97470f57925f62ed5d796d520' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\admin-left.tpl',
      1 => 1462707795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572f2784a8a107_25090932 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'admin') {?>
<div class="col-md-2"> 
    <div id="leftMenu" style="line-height: 1.1;">
        <div class="menuCaption">Новости:</div><hr>
        <a href="/account/0/"  style="font-size: 17px;">Новые</a><br />
        <hr>
        <a href="/account/3/"  style="font-size: 17px;">Отклоненные</a><br />
        <hr> 
        
    </div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'director') {?>
    gjkdngjfngkd
<?php }
}
}
