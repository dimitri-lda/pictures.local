<?php
/* Smarty version 3.1.29, created on 2016-08-24 16:08:53
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\account-left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bdaa7557ad25_21685577',
  'file_dependency' => 
  array (
    'f8ee24f023b0915d9790280b5c94f7ff035418e3' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\account-left.tpl',
      1 => 1472047729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bdaa7557ad25_21685577 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'admin') {?>
    <div class="col-md-2"> 
        <div id="leftMenu" style="line-height: 1.1;">
            <div class="menuCaption">Действия:</div><hr>
            <a href="/account/1/"  style="font-size: 17px;">Добавить картину</a><br />
            <hr> 
            <a href="/account/2/"  style="font-size: 17px;">Редактировать картины</a><br />
            <hr>
            <a href="/account/3/"  style="font-size: 17px;">Скрытые картины</a><br />
            <hr> 
            
        </div>
    </div>
<?php }
}
}
