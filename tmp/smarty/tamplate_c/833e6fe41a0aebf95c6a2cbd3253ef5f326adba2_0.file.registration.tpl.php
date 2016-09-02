<?php
/* Smarty version 3.1.29, created on 2016-05-08 14:21:11
  from "E:\Servers\xampp\htdocs\daovis.com\views\default\registration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572f2f37b67454_80010545',
  'file_dependency' => 
  array (
    '833e6fe41a0aebf95c6a2cbd3253ef5f326adba2' => 
    array (
      0 => 'E:\\Servers\\xampp\\htdocs\\daovis.com\\views\\default\\registration.tpl',
      1 => 1462707941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572f2f37b67454_80010545 ($_smarty_tpl) {
?>
<div>

    <div class="col-md-3">  
    </div>    

    <div class="col-md-6" style="padding-top: 70px; padding-left: 125px; padding-right: 125px;">  
        <div id='registerBox' class="login-form" >
            <form method="post" id="registerBox" action="/user/register/">
                <div class="form-group">
                    <input type="text" name="name" class="form-control login-field" value="" required placeholder="Имя пользователя" id="login-name" />

                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control login-field" value="" required placeholder="Email" id="login-pass" />

                </div>
                <div class="form-group">
                    <input type="password" name="pwd1" class="form-control login-field" value="" required  placeholder="Введите пароль" id="login-pass" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <div class="form-group">
                    <input type="password" name="pwd2" class="form-control login-field" value="" required placeholder="Повторите пароль" id="login-pass" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <div class="form-group">
                    <input type="text" name="city" class="form-control login-field" value="" required placeholder="Город" id="login-pass" />
                    <input type="hidden" name="url" class="form-control login-field" value=""  id="urlEx" />

                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="" value="Зарегистрироваться"/>
            </form>
        </div>
    </div>
    
    <div class="col-md-3">  
    </div>
    
</div>


<?php }
}
