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
