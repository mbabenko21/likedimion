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
                <div class="text">{lang sect="skills" line="energy"}: {$view.char->energy}
                    / {$view.char->maxEnergy}</div>
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
    {block name="journal"}
        {include file="layout/journal.tpl" journal=$view.player->getJournal()->export()}
    {/block}
    {block name="mans_npc"}
        <ul class="loc_doors">
            {foreach from=$view.mans item=man}
                <li>
                    <a href="/?do=speak&npc={$man->getDialog()}&{math equation='rand(0,100)'}">{$man->name}</a>
                </li>
            {/foreach}
        </ul>
    {/block}

    {block name="user_list"}
        <ul class="loc_doors">
            {foreach from=$view.char_list item=character}
                {if $character->getId() != $view.player->getId()}
                    <li>
                        <div class="player">
                            <b>[{$character->getLevel()}]</b>
                            <a href="{route id="char_info" uid={$character->getId()}}">
                                {include file="layout/char_name.tpl" char_name={$character->getName()} class={$character->getClass()} }
                            </a>
                            {if $character->getCharParams()->life < $character->getCharParams()->maxLife}

                                <b>{math equation="(life / maxLife)*100" life=$character->getCharParams()->life maxLife=$character->getCharParams()->maxLife format="%.1f"}
                                    %</b>
                            {/if}
                        </div>
                        <div class="talants_panel">
                            <div class="talants">
                                {foreach from=$view.points_talants key=pointId item=pointTalant}
                                    {if $view.player->getCooldown()->getTime($pointId) < 1}
                                        <a href="{route id="use_point_talant" talantId=$pointId to={$character->getId()}}">{include file="layout/talant_image.tpl" talant=$pointTalant name=$pointId size=32}</a>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    </li>
                {/if}
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
                            <span><a href={route id="attack_npc" to=$npcId}>{$other->name}</a></span>
                            <span id="p">{{$p*100}|string_format:"%.2f"}%</span>
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>
    {/block}
    {block name="talants"}
        <div class="talants_panel">
            {foreach from=$view.aoe_talants key=talantId item=talant}
                {if $view.player->getCooldown()->getTime($talantId) < 1}
                    <a href={route id="use_aoe_talant" talantId=$talantId}>{include file="layout/talant_image.tpl" talant=$talant name=$talantId size=32}</a>
                {/if}
            {/foreach}
        </div>
    {/block}
    {block name="loc_doors"}
        <ul class="loc_doors">
            {foreach from=$view.doors item="door"}
            <li>
                <a href={route id="move_char" locId=$door->getTargetLocation()}>
                    <span class="b-go b-part b-{$door->getDirection()}"></span>
                    {$door->getName()}
                </a>
            </li>
            {/foreach}
        </ul>
    {/block}
{/block}