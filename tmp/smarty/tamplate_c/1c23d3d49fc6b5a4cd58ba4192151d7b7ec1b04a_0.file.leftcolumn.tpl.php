<?php
/* Smarty version 3.1.29, created on 2016-02-23 12:43:24
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\leftcolumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cc45dc2bc9c1_33070173',
  'file_dependency' => 
  array (
    '1c23d3d49fc6b5a4cd58ba4192151d7b7ec1b04a' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\leftcolumn.tpl',
      1 => 1456167626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cc45dc2bc9c1_33070173 ($_smarty_tpl) {
?>
    

<div id="leftColumn"> 

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
            <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
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
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['subcats'])) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['subcats'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_itemSubcat_1_saved_item = isset($_smarty_tpl->tpl_vars['itemSubcat']) ? $_smarty_tpl->tpl_vars['itemSubcat'] : false;
$_smarty_tpl->tpl_vars['itemSubcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['itemSubcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemSubcat']->value) {
$_smarty_tpl->tpl_vars['itemSubcat']->_loop = true;
$__foreach_itemSubcat_1_saved_local_item = $_smarty_tpl->tpl_vars['itemSubcat'];
?>
                        --<a href="#"><?php echo $_smarty_tpl->tpl_vars['itemSubcat']->value['name'];?>
</a><br />
                    <?php
$_smarty_tpl->tpl_vars['itemSubcat'] = $__foreach_itemSubcat_1_saved_local_item;
}
if ($__foreach_itemSubcat_1_saved_item) {
$_smarty_tpl->tpl_vars['itemSubcat'] = $__foreach_itemSubcat_1_saved_item;
}
?>
                <?php }?>                   
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    </div>
</div>
<?php }
}
