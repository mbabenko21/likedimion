{extends 'layout/skills_menu.tpl'}
{block name="skills"}
    <ul class="menu">
        {foreach from=$view.magic_schools key=key item=magic_school}
            <li>
                <a href="/?do=skills:talants&school={$key}&{math equation='rand(0,100)'}">
                    {lang sect="skills" line="school_{$key}"}
                </a>
            </li>
        {/foreach}
    </ul>
    <ul class="talants">
    {foreach from=$view.current_school key=key item=talant}
        <li>
            {include file="layout/talant_info.tpl" talant=$talant name=$key size=64}
        </li>
    {/foreach}
    </ul>
    <h6>
        {lang sect="help" line="talants_skill_up"}
    </h6>
{/block}