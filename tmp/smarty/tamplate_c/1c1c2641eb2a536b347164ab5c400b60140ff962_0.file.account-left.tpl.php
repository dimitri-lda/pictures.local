<?php
/* Smarty version 3.1.29, created on 2016-05-11 19:13:50
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\account-left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5733684e17af95_69853272',
  'file_dependency' => 
  array (
    '1c1c2641eb2a536b347164ab5c400b60140ff962' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\account-left.tpl',
      1 => 1462986827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5733684e17af95_69853272 ($_smarty_tpl) {
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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'redactor') {?>
    <div class="col-md-2"> 
        <div id="leftMenu" style="line-height: 1.1;">
            <div class="menuCaption">Новости:</div><hr>
            <a href="/account/0/"  style="font-size: 17px;">Отправленные</a><br />
            <hr>
            <a href="/account/3/"  style="font-size: 17px;">Отклоненные</a><br />
            <hr> 
            <a href="/account/"  style="font-size: 17px;">Добавить статью</a><br />
            <hr> 
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'director') {?>
        <div class="col-md-2"> 
        <div id="leftMenu" style="line-height: 1.1;">

            <a href="#"  style="font-size: 17px;">Пользователи</a><br />
            <hr>
            <a href="#"  style="font-size: 17px;">Статистика</a><br />
            <hr> 
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['UserStatus']->value == 'user') {
}
}
}
