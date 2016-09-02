<?php
/* Smarty version 3.1.29, created on 2016-05-05 09:10:27
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\article.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572af1e38091e8_49701708',
  'file_dependency' => 
  array (
    '97b3761defae690bfdc22be4feea2a1c9e4f3516' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\article.tpl',
      1 => 1462372723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572af1e38091e8_49701708 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pageTitle']->value == 'Новости') {?>
    <div class="col-md-2"></div>
<?php }?>

<div class="col-md-8">
        <article>
            <h3 id="center"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['title'];?>
</h3><br />
            <?php if (isset($_smarty_tpl->tpl_vars['rsPost']->value['created_at'])) {?>
                <p style="font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['created_at'];?>
</p>
            <?php }?>
            <p style="line-height: 1.5;"><?php echo $_smarty_tpl->tpl_vars['rsPost']->value['body'];?>
</p> 
            
        </article>
            <?php if (isset($_smarty_tpl->tpl_vars['UserName']->value) && $_smarty_tpl->tpl_vars['UserStatus']->value == 'admin') {?>
                <?php if ($_smarty_tpl->tpl_vars['rsPost']->value['enabled'] == 0) {?>     
                    <a href="/threenews/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value['id'];?>
/">Отклонить</a>
                    <a href="/onenews/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value['id'];?>
/">Опубликовать</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rsPost']->value['enabled'] == 1) {?>
                    <a href="/threenews/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value['id'];?>
/">Заблокировать новость</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['rsPost']->value['enabled'] == 3) {?>
                    <a href="/onenews/<?php echo $_smarty_tpl->tpl_vars['rsPost']->value['id'];?>
/">Опубликовать</a>
                <?php }?>   
            <?php }?>
        <br />
        
</div>

<div class="col-md-1"></div><?php }
}
