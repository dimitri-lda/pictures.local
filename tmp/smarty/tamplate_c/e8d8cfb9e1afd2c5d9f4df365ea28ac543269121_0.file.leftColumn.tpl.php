<?php
/* Smarty version 3.1.29, created on 2016-04-26 16:09:18
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\leftColumn.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f768eb661e3_88246611',
  'file_dependency' => 
  array (
    'e8d8cfb9e1afd2c5d9f4df365ea28ac543269121' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\leftColumn.tpl',
      1 => 1461679752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571f768eb661e3_88246611 ($_smarty_tpl) {
?>
    

<div class="col-md-2"> 

    <div id="leftMenu" style="line-height: 1.1;">
        <div class="menuCaption">Категории:</div><hr>
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
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'fitness') {?>
                    <a href="/fitness/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"  style="font-size: 17px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'health') {?>
                    <a href="/health/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"  style="font-size: 17px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                <?php } else { ?>
                    <a href="javascript:"  style="font-size: 17px;" 
                          onclick="$('#cat_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').slideToggle();"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['subcats'])) {?>
                    <div id="cat_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="display: none; margin-left: 0.5em;">
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
                        <a href="/prodshop/<?php echo $_smarty_tpl->tpl_vars['itemSubcat']->value['id'];?>
/" style='font-size: 15px; '>&#9679;&nbsp;<?php echo $_smarty_tpl->tpl_vars['itemSubcat']->value['name'];?>
</a><br />
                    <?php
$_smarty_tpl->tpl_vars['itemSubcat'] = $__foreach_itemSubcat_1_saved_local_item;
}
if ($__foreach_itemSubcat_1_saved_item) {
$_smarty_tpl->tpl_vars['itemSubcat'] = $__foreach_itemSubcat_1_saved_item;
}
?>
                    </div>
                <?php }?><hr>                   
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
