{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
    {if isset($view.layout)}
    {include file="layout/{$view.layout}.tpl"}
    {/if}
{if $view.errors|length < 1}
{include file="layout/item_look.tpl" item=$view.item}
<div class="item">
    <div id="item_type">{lang sect="item" line="type"}: <span
            class="bold">{lang sect="item_types" line="{$view.item->getType()}"}</span></div>
    <div id="item_cost">{lang sect="item" line="cost"}: <span class="bold">{$view.item->getCost()}</span></div>
    <hr />
    {if $view.item->getType() == 2 || $view.item->getType() == 3 || $view.item->getType() == 4 || $view.item->getType() == 5 || $view.item->getType() == 6}
    {include file="game/about/items/weapon.tpl" item=$view.item}
    {/if}
    {if $view.item->getMaster()!=""}
        <div class="item_master">
            <span id="master">{{lang sect="item" line="master"}|lower}</span> <span
                class="bold">{$view.item->getMaster()}</span>
        </div>
    {/if}
    {if $view.item->getModificationLevel() > 0}
        <span id="item_mod">{lang sect="item" line="modificate"}</span> <span
            class="bold">+{$view.item->getModificationLevel()}</span>
    {/if}
</div>
{/if}
{/block}