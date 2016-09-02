<?php
/* Smarty version 3.1.29, created on 2016-08-24 17:17:49
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\pictures.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bdba9decf2e3_27192764',
  'file_dependency' => 
  array (
    '1ece7b50349cb9a7118ea3cb63be08d2a94b80a6' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\pictures.tpl',
      1 => 1472051864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bdba9decf2e3_27192764 ($_smarty_tpl) {
?>
<div class="col-lg-10" style="padding-left: 0px; padding-top: 1%;">
    
    <h5 id="center"><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</h5>
    <span class='curLink'>
        <a href="/pictures/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pictures'];?>
</a>
         >  <a href="/pictures/<?php if ($_smarty_tpl->tpl_vars['categoryId']->value != NULL) {
echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</a>
    </span>
    <?php
$_from = $_smarty_tpl->tpl_vars['rsPictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pictures_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] : false;
$__foreach_pictures_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']++;
$__foreach_pictures_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <div style="float: left; padding: 1em 1.5em 0em 1.5em;">
            <div style="line-height: 245px; padding-top: 1.7em;">
                <a href="/picture/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                    <img src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" width="290"/>
                </a><br />
            </div>
            <a id="center" href="/picture/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <?php if ((($_smarty_tpl->tpl_vars['lang']->value['pictures'] == 'Pictures') && ($_smarty_tpl->tpl_vars['item']->value['name_eng'] != NULL))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name_eng'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                <?php }?></a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration'] : null) % 3 == 0) {?>
            <div style="clear: both;"></div>
        <?php }?>  
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_local_item;
}
if ($__foreach_pictures_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = $__foreach_pictures_0_saved;
}
if ($__foreach_pictures_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_item;
}
?>
 
</div>

<?php }
}
