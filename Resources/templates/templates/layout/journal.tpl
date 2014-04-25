<div class="journal">
    <ul>
        {foreach from=$journal item=item}
            <li class="journal_item"><span>{$item.message|lower}</span></li>
        {/foreach}
    </ul>
</div>