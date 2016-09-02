<?php
/* Smarty version 3.1.29, created on 2016-08-14 16:21:36
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\prodshop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b07e70152be4_82266054',
  'file_dependency' => 
  array (
    'fb441cd27d92aabeee5501f87c23ddfa84dfe340' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\prodshop.tpl',
      1 => 1461781889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b07e70152be4_82266054 ($_smarty_tpl) {
?>
<div class="col-xs-10"> 
    
    <?php if (isset($_smarty_tpl->tpl_vars['rsCategory']->value['name']) != NULL) {?>
        <h5 id="center"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h5>
    <?php } else { ?>
        <h5 id="center">Все товары</h5>
    <?php }?>

    <?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_products_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products'] : false;
$__foreach_products_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$__foreach_products_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <div style="float: left; padding: 0.7em 2em 1.9em 2em;">
            <a id="center" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" width="190"/>
            </a><br />
            <div id="center">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                <?php if ($_smarty_tpl->tpl_vars['item']->value['weight'] == 1000) {?>
                    руб/кг.
                <?php } else { ?>
                    руб.
                <?php }?> <br /><span id="center">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price']/10000;?>

                <?php if ($_smarty_tpl->tpl_vars['item']->value['weight'] == 1000) {?>
                    руб/кг.
                <?php } else { ?>
                    руб.
                <?php }?></span> 
            </div>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 4 == 0) {?>
            <div style="clear: both;"></div>
        <?php }?>    
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_local_item;
}
if ($__foreach_products_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = $__foreach_products_0_saved;
}
if ($__foreach_products_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_item;
}
?>
 
</div>  
<?php }
}
