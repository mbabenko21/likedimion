{extends 'layout/wrapper.html.tpl'}
{block name='wrapper'}
    {block name="loc_info"}
        {if $view.info != ""}
        <div class="loc_info">
            {$view.info}
        </div>
        {/if}
    {/block}
    {block name="menu"}
    {include file="layout/menu.tpl"}
    {/block}
    {block name="char_status"}
    <div class="char_status">
        {if $view.life_p > 0.66}
            {assign var="cl" value="red"}
            {elseif $view.life_p <= 0.66 && $view.life_p > 0.33}
            {assign var="cl" value="yellow"}
            {else}
            {assign var="cl" value="yellowgreen"}
        {/if}
        {if $view.mana_p > 0.66}
            {assign var="clm" value="blue"}
            {elseif $view.mana_p <= 0.66 && $view.mana_p > 0.33}
            {assign var="clm" value="bluelight"}
            {else}
            {assign var="clm" value="bluelightlight"}
        {/if}
        <div class="life_bar">
            <div class="persent {$cl}" style="width: {$view.life_p*100}%"></div>
            <div class="text">{lang sect="skills" line="life"}: {$view.char->life} / {$view.char->maxLife}</div>
        </div>
        <div class="mana_bar">
            <div class="persent {$clm}" style="width: {$view.mana_p*100}%"></div>
            <div class="text">{lang sect="skills" line="energy"}: {$view.char->energy} / {$view.char->maxEnergy}</div>
        </div>
        <div class="exp_bar">
            <div class="persent brown" style="width: {$view.exp_p}%"></div>
            {if $view.char->studyPoints > 0}
                {assign var="sp" value="{lang sect="menu" line="sp"}: {$view.char->studyPoints}"}
                {else}
                {assign var="sp" value=""}
            {/if}
            <div class="text">{lang sect="about_char" line="exp"}: {$view.exp_p}
                %, {{lang sect="menu" line="level"}|lower} {$view.level}, {$sp}</div>
        </div>
    </div>
    {/block}
    {block name="Journal"}
        {if $view.journal|length > 0}
        <div class="errors">
            <ul>
                {foreach from=$view.journal item=mess}
                    <li class="error_item"><span>{$mess->getPost()->getMessage()}</span></li>
                {/foreach}
            </ul>
        </div>
        {/if}
    {/block}
    {block name="mans_npc"}
    <ul class="loc_doors">
        {foreach from=$view.mans item=man}
            <li>
                <a href="/?do=speak&npc={$man->getDialog()}&{math equation='rand(0,100)'}">{$man->getName()}</a>
            </li>
        {/foreach}
    </ul>
    {/block}

    {block name="other_npc"}
    <ul class="loc_doors">
        {foreach from=$view.others key=npcId item=other}
            <li>
                {assign var="p" value={$other->getCharParams()->life/$other->getCharParams()->maxLife}}
                {assign var="life_p" value={$p}+"%"}
                <div class="life_bar npc">
                    <div class="persent yellowgreen" style="width: {$p*100}%"></div>
                    <div class="text">
                        <a href="/?do=attack&npc={$npcId}&{math equation='rand(0,100)'}">{$other->getName()}</a>
                        <span id="p">{{$p*100}|string_format:"%.2f"}%</span>
                    </div>
                </div>
            </li>
        {/foreach}
    </ul>
    {/block}

    {block name="loc_doors"}
    <ul class="loc_doors">
        {foreach from=$view.doors item="door"}
        <li>
            <a href="/?do=main&go={$door->getTargetLocation()}&{math equation='rand(0000,9999)'}">
                <span class="b-go b-part b-{$door->getDirection()}"></span>
                {$door->getName()}
            </a>
        {/foreach}
    </ul>
    {/block}
{/block}