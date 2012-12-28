<div class="b-item">
    <a href="/?do=item:about&id={$item->getId()}&{math equation='rand(0,100)'}">
        <div class="b-item__icon"></div>
        <div class="b-item__name">
        {if $item->getCount() > 1}
                            {$item->getName('p')}
                            {else}
                            {$item->getName()}
                        {/if}
        </div>
        <div class="b-item__counter">
        {$item->getCount()}
        </div>
    </a>
</div>