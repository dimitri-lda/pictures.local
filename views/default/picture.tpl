{* product page *}
<div class="col-lg-10" id="p_info" style="padding-left: 0px; padding-top: 1%;"> 

    <h5 id='center'>
        {if (($lang['pictures'] == 'Pictures')&&($rsPicture['name_eng'] != NULL))}
            {$rsPicture['name_eng']}
        {else}
            {$rsPicture['name']}
        {/if}
    </h5>
    
    <span class='curLink'>
        <a href="/pictures/">{$lang['pictures']}</a>
         >  <a href="/pictures/{if $categoryId != NULL}{$categoryId}/{/if}">{$categoryName}</a>
         >  <a href="/pictures/{$rsPicture['id']}/">
         {if (($lang['pictures'] == 'Pictures')&&($rsPicture['name_eng'] != NULL))}
            {$rsPicture['name_eng']}
        {else}
            {$rsPicture['name']}
        {/if}
         </a>
    </span>
    <br>
         <div class="col-xs-6 phot" style="margin-top: 35px; margin-left: 12px;">
{*        todo width to percent*}
        <a href="#top"><img id='{$rsPicture['id']}' class='toFull center' width="100%" src="/images/pictures/{$rsPicture['url']}"></a>
        <a id='center' href="/images/pictures/{$rsPicture['url']}" target="_blank" style="padding-top: 3px;">
            {$lang['open_full_size']}
        </a>
        <div id="center" style="padding-top: 5px;">{if (count($rsFragments) > 0)}{$lang['fragments']}{/if}</div>
        <div id="center">
            {foreach $rsFragments as $item name=fragments}
                <div style="float: left; padding: 0.5em 0.45em 0.5em 0.45em;">
                    <ul class="gallery" style="padding-left: 0px; margin-bottom: 0px;">
                        <li><a href="#"><img id='{$item['id']}' class='toFull center' width="155" src="/images/pictures/{$item['url']}"></a></li>
                    </ul>
                </div>            
                {if $smarty.foreach.fragments.iteration mod 3 == 0}

                    <div style="clear: both;"></div>
                {/if}  
            {/foreach}
        </div>
    </div>   
    <div class="col-xs-4 desc" style="padding-top: 35px;">
        {if isset($UserStatus) && $UserStatus == admin}
        <pre><button class="btn btn-info" style="width: 49.15%; margin-right: 1.7%">Редактировать</button>{if ($rsPicture['status'] != 0)}<button class="btn btn-danger btn_hide" style="width: 49.15%;">Скрыть</button>{else}<button class="btn btn-success btn_show" style="width: 49.15%;">Востановить</button>{/if}</pre>
        {/if}
        <p>Описание Описание Описание Описание ОписаниеОписаниеОписаниеОписаниеОписание</p>
    </div> 
</div>
<div class="overlay" data-first='{$rsPicture['id']}' data-last='{$rsFragmentsLast}'></div>
<div style="z-index: 100000;" class="full">
    {assign var="i" value="1"}
    <img class='fullscreen imgNum_0' id="imgfull_{$rsPicture['id']}" data-num='0' data-id='{$rsPicture['id']}' src="/images/pictures/{$rsPicture['url']}" style="display: none;">
    {foreach $rsFragments as $item}
        <img class='fullscreen imgNum_{$i}' id="imgfull_{$item['id']}" data-num='{$i}' data-id='{$item['id']}' src="/images/pictures/{$item['url']}" style="display: none;">
        {assign var=i value=$i+1}
    {/foreach}
</div>
<div class='right_side full'>
    <img class='right_side' src="/images/elements/right.png">
</div>
<div class='left_side full'>
    <img class='left_side' src="/images/elements/left.png">
</div
<div class='full'>
    <img id='' class='closeBtn full' src="/images/elements/closefree.png" style="display: none;">
</div>
