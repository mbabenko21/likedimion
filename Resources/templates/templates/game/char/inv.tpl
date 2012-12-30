{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
{include file="layout/char_menu.tpl"}
<ul class="item-list">
    {foreach from=$view.items item=item}
        <li>
            <div class="up-down-icons">
                <a href="/?do=char:inventory&up={$item->getId()}&{math equation='rand(0,100)'}"><span
                        class="b-arrows b-icon__up_2"></span></a>
                <a href="/?do=char:inventory&down={$item->getId()}&{math equation='rand(0,100)'}"><span
                        class="b-arrows b-icon__down_2"></span></a>
            </div>
            {include file="layout/item.tpl" item=$item}
        </li>
    {/foreach}
</ul>
{/block}