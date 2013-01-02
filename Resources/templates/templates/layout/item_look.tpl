{* @var $item ItemInterface *}
<div class="item_look">
    <div class="item_image">

    </div>
    <div class="item_info">
    {if $item->getModificationLevel() > 0}
        {assign var="modif" value="+{$item->getModificationLevel()}"}
        {else}
        {assign var="modif" value=""}
    {/if}
    {if $item->getMaster()!=""}
        {assign var="mast" value="({$item->getMaster()})"}
        {else}
        {assign var="mast" value=""}
    {/if}
        <span id="item_name">
        {if isset($counter)}
            {if $item->getCount() > 1}
                {assign var="v" value="p"}
                {else}
                {assign var="v" value="s"}
            {/if}
            {else}
            {assign var="v" value="s"}
        {/if}
            <div class="name">{$item->getName({$v})|lower}</div>
            <div class="bold">{$modif}</div>
            <div class="bold">{$mast|lower}</div>
        {if isset($counter)}
            <div class="counter bold">({$item->getCount()} {lang sect="other" line="sh"})</div>
        {/if}
        </span>
        <span id="item_info">{$item->getInfo()}</span>
    </div>
</div>