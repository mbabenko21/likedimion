{extends 'layout/wrapper.html.tpl'}
{block name='wrapper'}
<div class="npc_reply">
    {$view.npc_reply}
</div>
    {if $view.answers|length > 0}
    <ul class="loc_doors">
        {foreach from=$view.answers item=reply}
            <li>
                <a href="/?do=speak&npc={$view.dig}&section={$reply[1]}&{math equation='rand(0,100)'}">
                    <span class="b-arrows b-icon__right_1"></span>
                    {$reply[0]}
                </a>
            </li>
        {/foreach}
    </ul>
        {else}
    <ul class="loc_doors">
        <li>
            <a href="/?do=main&{math equation='rand(0,100)'}">
                <span class="b-arrows b-icon__right_1"></span>
                {lang sect="dialog" line="end"}
            </a>
        </li>
    </ul>
    {/if}
{/block}