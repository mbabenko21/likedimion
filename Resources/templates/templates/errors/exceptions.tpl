{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
    {lang sect="errors" line="exception"}: <strong>{$view.e->getMessage()}</strong>
<br/>
    {lang sect="errors" line="err_file"}: <strong>{$view.e->getFile()}: {$view.e->getLine()}</strong>
<ul class="err">
    {foreach from=$view.e->getTrace() item=trace}
    <li class="error_item">
        {$trace["function"]}({$trace["file"]}):{$trace["line"]}
    </li>
    {/foreach}
</ul>
{/block}