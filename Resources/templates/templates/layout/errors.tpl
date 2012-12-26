<div class="errors">
    <ul>
    {foreach from=$errors item=error}
        <li class="error_item"><span>{$error|lower}</span></li>
    {/foreach}
    </ul>
</div>