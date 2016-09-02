<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:14:05
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a03ada95011_54012561',
  'file_dependency' => 
  array (
    '4784aa12d2f929c15c6fb3eab6fd38e7d287f8fd' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\login.tpl',
      1 => 1462363759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a03ada95011_54012561 ($_smarty_tpl) {
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
            </form>
        </div>
    </div><br />
    
    <div class="col-md-3">  
    </div>
    
</div>
<?php }
}
