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
