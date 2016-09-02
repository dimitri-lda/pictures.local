<div>

    <div class="col-md-3">  
    </div>    

    <div class="col-md-6" style="padding-top: 70px; padding-left: 125px; padding-right: 125px;">  
        <div id='registerBox' class="login-form" >
            <form method="post" id="registerBox" action="/user/register/">
                <div class="form-group">
                    <input type="text" name="name" class="form-control login-field" value="" required placeholder="Имя пользователя" id="login-name" />
{*                    <label class="login-field-icon fui-user" for="login-name"></label>*}
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control login-field" value="" required placeholder="Email" id="login-pass" />
{*                    <label class="login-field-icon fui-lock" for="login-pass"></label>*}
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
{*                    <label class="login-field-icon fui-lock" for="login-pass"></label>*}
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="" value="Зарегистрироваться"/>
            </form>
        </div>
    </div>
    
    <div class="col-md-3">  
    </div>
    
</div>


