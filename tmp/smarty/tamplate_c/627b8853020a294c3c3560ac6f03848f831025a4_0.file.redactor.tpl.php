<?php
/* Smarty version 3.1.29, created on 2016-04-27 13:15:40
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\redactor.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57209f5c9861e8_86567950',
  'file_dependency' => 
  array (
    '627b8853020a294c3c3560ac6f03848f831025a4' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\redactor.tpl',
      1 => 1461755738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57209f5c9861e8_86567950 ($_smarty_tpl) {
?>
<div class="col-xs-9"> 
    
    <form method="post" action="/account/add/">
                <div class="form-group">
                    <br/>
                    <input type="text" name="title" class="form-control login-field" 
                           required value="" placeholder="Заголовок" id="login-name" />
                </div>
                <div class="form-group">
                    
                    <textarea type="text" name="body" class="form-control login-field" 
                              required value=""  placeholder="Текст" id="login-pass" style="height: 350px;"> </textarea>
                </div>
                <input type="hidden" name="url" class="form-control login-field" value=""  id="urlEx" />
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Отправить на публикацию"/>
            </form>
</div>
<?php }
}
