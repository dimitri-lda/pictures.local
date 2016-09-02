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
