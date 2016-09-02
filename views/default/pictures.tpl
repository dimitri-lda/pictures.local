<div class="col-lg-10" style="padding-left: 0px; padding-top: 1%;">
    {* Страница категории *}
    <h5 id="center">{$categoryName}</h5>
    <span class='curLink'>
        <a href="/pictures/">{$lang['pictures']}</a>
         >  <a href="/pictures/{if $categoryId != NULL}{$categoryId}/{/if}">{$categoryName}</a>
    </span>
    {foreach $rsPictures as $item name=pictures}
        <div style="float: left; padding: 1em 1.5em 0em 1.5em;">
            <div style="line-height: 245px; padding-top: 1.7em;">
                <a href="/picture/{$item['id']}/">
                    <img src="/images/pictures/{$item['url']}" width="290"/>
                </a><br />
            </div>
            <a id="center" href="/picture/{$item['id']}/">
                {if (($lang['pictures'] == 'Pictures')&&($item['name_eng'] != NULL))}
                    {$item['name_eng']}
                {else}
                    {$item['name']}
                {/if}</a>
        </div>
        {if $smarty.foreach.pictures.iteration mod 3 == 0}
            <div style="clear: both;"></div>
        {/if}  
    {/foreach}
 
</div>

