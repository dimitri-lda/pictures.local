<?php
/* Smarty version 3.1.29, created on 2016-04-26 16:10:37
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f76dd42dad3_23638960',
  'file_dependency' => 
  array (
    '58b03e11a5d4e73f50a12f08d9a3ab02e4d3ab8a' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\news.tpl',
      1 => 1461679833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571f76dd42dad3_23638960 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pageTitle']->value == 'Новости') {?>
    <div class="col-md-2"></div>
<?php }?>
<div class="col-md-8">
    <?php if ($_smarty_tpl->tpl_vars['pageTitle']->value == 'Новости') {?>
        <h3 id='center'>Новости</h3>
    <?php }?>
    <br />
    <?php
$_from = $_smarty_tpl->tpl_vars['rsNews']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <article>
            <h4 style="font-size: 31px"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h4>
            <p style="line-height: 1.5;"><?php echo $_smarty_tpl->tpl_vars['item']->value['first'];?>
</p>
            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Читать далее...</a>
        </article>
        <br />
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</div>

<div class="col-md-1"></div><?php }
}
