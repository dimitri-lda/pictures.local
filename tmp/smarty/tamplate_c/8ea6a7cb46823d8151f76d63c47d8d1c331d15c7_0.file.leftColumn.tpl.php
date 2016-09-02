<?php
/* Smarty version 3.1.29, created on 2016-08-24 17:07:57
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\leftColumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bdb84de34859_20353433',
  'file_dependency' => 
  array (
    '8ea6a7cb46823d8151f76d63c47d8d1c331d15c7' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\leftColumn.tpl',
      1 => 1472051275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bdb84de34859_20353433 ($_smarty_tpl) {
?>
    


<div class="col-lg-2"> 
    

    <div id="leftMenu">
        <ul class="dropdown-menu" role="menu" 
            style="display: block; font-size: 17px; margin-left: 35px; margin-top: 53px; min-width: 0px; font-size: 16px;">
            <li><a href="/pictures/" style='padding: 7px 16px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['all_pictures'];?>
</a></li>
            <li><a href="/pictures/1/" style='padding: 7px 16px;'>Экспрессионизм <br/> филосовский</a></li>
            <li><a href="/pictures/2/" style='padding: 7px 16px;'>Категория 2</a></li>
            <li><a href="/pictures/3/" style='padding: 7px 16px;'>Категория 3</a></li>
        </ul>
    </div>
</div><?php }
}
