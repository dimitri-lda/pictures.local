<?php
/* Smarty version 3.1.29, created on 2016-08-16 13:33:05
  from "E:\Servers\xampp\htdocs\pictures.local\views\default\reset.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b2f9f153add2_23266593',
  'file_dependency' => 
  array (
    '0226fc252582ef52da7d05cbdf04c9cfe509c983' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\pictures.local\\views\\default\\reset.tpl',
      1 => 1471347183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b2f9f153add2_23266593 ($_smarty_tpl) {
?>
<div>

    <div class="col-md-3">  
    </div>    
    
    <div class="col-md-6" id='loginForm'> 
        <p id="center">Пароль будет отправлен на указанный вами Email.</p><br/>
        <div class="login-form" >
            <form method="post" action="/user/resetEmail/">       
                <div class="form-group">
                    <input type="email" name="email" class="form-control login-field" 
                           required value="" placeholder="Email" id="login-name" />
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>  
                <input type="hidden" name="url" class="form-control login-field" value=""  id="urlEx" />
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Отправить"/>
            </form>
        </div>
    </div><br />
    
    <div class="col-md-3">  
    </div>
    
</div>
<?php }
}
