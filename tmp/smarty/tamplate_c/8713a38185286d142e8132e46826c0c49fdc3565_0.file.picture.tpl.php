<?php
/* Smarty version 3.1.29, created on 2016-08-25 14:59:17
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\picture.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57beeba5ee4b20_05600679',
  'file_dependency' => 
  array (
    '8713a38185286d142e8132e46826c0c49fdc3565' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\picture.tpl',
      1 => 1472129956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57beeba5ee4b20_05600679 ($_smarty_tpl) {
?>

<div class="col-lg-10" id="p_info" style="padding-left: 0px; padding-top: 1%;"> 

    <h5 id='center'>
        <?php if ((($_smarty_tpl->tpl_vars['lang']->value['pictures'] == 'Pictures') && ($_smarty_tpl->tpl_vars['rsPicture']->value['name_eng'] != NULL))) {?>
            <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name_eng'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>

        <?php }?>
    </h5>
    
    <span class='curLink'>
        <a href="/pictures/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pictures'];?>
</a>
         >  <a href="/pictures/<?php if ($_smarty_tpl->tpl_vars['categoryId']->value != NULL) {
echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</a>
         >  <a href="/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['id'];?>
/">
         <?php if ((($_smarty_tpl->tpl_vars['lang']->value['pictures'] == 'Pictures') && ($_smarty_tpl->tpl_vars['rsPicture']->value['name_eng'] != NULL))) {?>
            <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name_eng'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>

        <?php }?>
         </a>
    </span>
    <br>
         <div class="col-xs-6 phot" style="margin-top: 35px; margin-left: 12px;">

        <a href="#top"><img id='<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['id'];?>
' class='toFull center' width="100%" src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['url'];?>
"></a>
        <a id='center' href="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['url'];?>
" target="_blank" style="padding-top: 3px;">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['open_full_size'];?>

        </a>
        <div id="center" style="padding-top: 5px;"><?php if ((count($_smarty_tpl->tpl_vars['rsFragments']->value) > 0)) {
echo $_smarty_tpl->tpl_vars['lang']->value['fragments'];
}?></div>
        <div id="center">
            <?php
$_from = $_smarty_tpl->tpl_vars['rsFragments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fragments_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_fragments']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fragments'] : false;
$__foreach_fragments_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_fragments'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_fragments']->value['iteration']++;
$__foreach_fragments_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <div style="float: left; padding: 0.5em 0.45em 0.5em 0.45em;">
                    <ul class="gallery" style="padding-left: 0px; margin-bottom: 0px;">
                        <li><a href="#"><img id='<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='toFull center' width="155" src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"></a></li>
                    </ul>
                </div>            
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fragments']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fragments']->value['iteration'] : null) % 3 == 0) {?>

                    <div style="clear: both;"></div>
                <?php }?>  
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_fragments_0_saved_local_item;
}
if ($__foreach_fragments_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fragments'] = $__foreach_fragments_0_saved;
}
if ($__foreach_fragments_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_fragments_0_saved_item;
}
?>
        </div>
    </div>   
    <div class="col-xs-4 desc" style="padding-top: 35px;">
        <?php if (isset($_smarty_tpl->tpl_vars['UserStatus']->value) && $_smarty_tpl->tpl_vars['UserStatus']->value == 'admin') {?>
        <pre><button class="btn btn-info" style="width: 49.15%; margin-right: 1.7%">Редактировать</button><?php if (($_smarty_tpl->tpl_vars['rsPicture']->value['status'] != 0)) {?><button class="btn btn-danger btn_hide" style="width: 49.15%;">Скрыть</button><?php } else { ?><button class="btn btn-success btn_show" style="width: 49.15%;">Востановить</button><?php }?></pre>
        <?php }?>
        <p>Описание Описание Описание Описание ОписаниеОписаниеОписаниеОписаниеОписание</p>
    </div> 
</div>
<div class="overlay" data-first='<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['id'];?>
' data-last='<?php echo $_smarty_tpl->tpl_vars['rsFragmentsLast']->value;?>
'></div>
<div style="z-index: 100000;" class="full">
    <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "i", 0);?>
    <img class='fullscreen imgNum_0' id="imgfull_<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['id'];?>
" data-num='0' data-id='<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['id'];?>
' src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['url'];?>
" style="display: none;">
    <?php
$_from = $_smarty_tpl->tpl_vars['rsFragments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <img class='fullscreen imgNum_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id="imgfull_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-num='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" style="display: none;">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
</div>
<div class='right_side full'>
    <img class='right_side' src="/images/elements/right.png">
</div>
<div class='left_side full'>
    <img class='left_side' src="/images/elements/left.png">
</div
<div class='full'>
    <img id='' class='closeBtn full' src="/images/elements/closefree.png" style="display: none;">
</div>
<?php }
}
