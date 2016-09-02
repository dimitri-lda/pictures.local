<?php
/* Smarty version 3.1.29, created on 2016-04-25 14:19:09
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e0b3d62e9b9_98437465',
  'file_dependency' => 
  array (
    'e0a704feaf0f271649bff5139b405a89afea8e18' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\post.tpl',
      1 => 1461586747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571e0b3d62e9b9_98437465 ($_smarty_tpl) {
?>
<div class="col-md-2"></div>

<div class="col-md-8">
        <article>
            <h3><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['title'];?>
</h3>
            <p style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['created_at'];?>
</p> 
            <p style="line-height: 1.5;"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['body'];?>
</p> 
            
        </article>
        <br />
</div>

<div class="col-md-1"></div><?php }
}
