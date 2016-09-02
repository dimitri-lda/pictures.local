{if $pageTitle == 'Новости'}
    <div class="col-md-2"></div>
{/if}
<div class="col-md-8">
    {if $pageTitle == 'Новости'}
        <h3 id='center'>Новости</h3>
    {/if}
    <br />
    {foreach $rsNews as $item}
        <article>
            <h4 style="font-size: 31px"><a href="/article/{$item['id']}/">{$item['title']}</a></h4>
            <p style="line-height: 1.5;">{$item['first']}</p>
            <a href="/article/{$item['id']}/">Читать далее...</a>
        </article>
        <br />
    {/foreach}
</div>

<div class="col-md-1"></div>