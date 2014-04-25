{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
    {if $view.include_menu eq true}
        {include file="layout/char_menu.tpl"}
    {/if}
    <div class="about_char">
        <strong>
            {include file="layout/char_name.tpl" char_name={$view.char->getName()} class={$view.char->getClass()}}
        </strong><br/>
        {if $view.attack eq 1}
            ---  <br />
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
                    <div class="text">{lang sect="skills" line="life"}: {$view.char->getCharParams()->life} / {$view.char->getCharParams()->maxLife}</div>
                </div>
                <div class="mana_bar">
                    <div class="persent {$clm}" style="width: {$view.mana_p*100}%"></div>
                    <div class="text">{lang sect="skills" line="energy"}: {$view.char->getCharParams()->energy}
                        / {$view.char->getCharParams()->maxEnergy}</div>
                </div>
            </div>
            --- <br/>
        {/if}
        {lang sect="about_char" line="reg"}: <strong>{$view.char->getCreated()|strftime|lower}</strong><br/>
        {lang sect="about_char" line="class"}:
    <span>
        <strong>{{lang sect="classes" line=$view.char->getClass()}|lower}</strong>
    </span>
        <br/>
        {lang sect="about_char" line="level"}:
    <span class="counter__brown">
    <strong>{$view.char->getLevel()}</strong>
    </span>
        <br/>
        {lang sect="about_char" line="status"}: <strong>{lang sect="stats" line={$view.status}}</strong>
    </div>
    {if $view.attack}
        --- <br />
        {if $view.territory eq 1}
            <a href="/?do=attack&to={$view.char->getId()}&{math equation='rand(0,100)'}"><b>{lang sect="about_char" line="attack"}</b></a>
        {/if}
        <br /><a href="/?do=mail:send&to={$view.char->getId()}&{math equation='rand(0,100)'}"><b>{lang sect="mail" line="send"}</b></a>
    {/if}
{/block}