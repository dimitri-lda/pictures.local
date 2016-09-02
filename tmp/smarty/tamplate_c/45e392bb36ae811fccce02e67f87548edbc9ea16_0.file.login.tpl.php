<?php
/* Smarty version 3.1.29, created on 2016-08-11 12:15:11
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ac502fdf45a5_94206942',
  'file_dependency' => 
  array (
    '45e392bb36ae811fccce02e67f87548edbc9ea16' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\login.tpl',
      1 => 1470910507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ac502fdf45a5_94206942 ($_smarty_tpl) {
?>
<div>

    <div class="col-md-3">  
    </div>    

    <div class="col-md-6" id='loginForm'>  
        <div class="login-form" >
            <form method="post" action="/user/login/">
                <div class="form-group">
                    <input type="email" name="email" class="form-control login-field" 
                           required value="" placeholder="Email" id="login-name" />
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" class="form-control login-field" 
                           required value=""  placeholder="Пароль" id="login-pass" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <input type="hidden" name="url" class="form-control login-field" value=""  id="urlEx" />
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Войти"/>
                <a class="login-link" href="/user/reset/">Забыли пароль?</a>
            </form>
        </div>
    </div><br />
    
    <div class="col-md-3">  
    </div>
    
</div>
<?php }
}
