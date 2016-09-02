{if $pageTitle == 'Новости'}
    <div class="col-md-2"></div>
{/if}

<div class="col-md-8">
        <article>
            <h3 id="center">{$rsPost['title']}</h3><br />
            {if isset($rsPost['created_at'])}
                <p style="font-size: 15px;">{$rsPost['created_at']}</p>
            {/if}
            <p style="line-height: 1.5;">{$rsPost['body']}</p> 
            
        </article>
            {if isset($UserName) && $UserStatus == 'admin'}
                {if $rsPost['enabled'] == 0}     
                    <a href="/threenews/{$rsPost['id']}/">Отклонить</a>
                    <a href="/onenews/{$rsPost['id']}/">Опубликовать</a>
                {/if}
                {if $rsPost['enabled'] == 1}
                    <a href="/threenews/{$rsPost['id']}/">Заблокировать новость</a>
                {/if}
                {if $rsPost['enabled'] == 3}
                    <a href="/onenews/{$rsPost['id']}/">Опубликовать</a>
                {/if}   
            {/if}
        <br />
        
</div>

<div class="col-md-1"></div>