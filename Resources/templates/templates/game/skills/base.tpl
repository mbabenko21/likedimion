{extends 'layout/skills_menu.tpl'}
{block name="skills"}

<span class="skill__life__16">{lang sect="skills" line="life"}</span>:
<strong>{$view.skills->life}</strong><br/>
<span class="skill__energy__16">{lang sect="skills" line="energy"}</span>:
<strong>{$view.skills->energy}</strong>
<hr/>
<span class="skill__str__16">{lang sect="skills" line="strenge"}</span>:
<strong>{$view.skills->strenge}</strong><br/>
<span class="skill__dex__16">{lang sect="skills" line="dexterity"}</span>:
<strong>{$view.skills->dexterity}</strong><br/>
<span class="skill__int__16">{lang sect="skills" line="intelligence"}</span>:
<strong>{$view.skills->intelligence}</strong><br/>
<hr/>
<span class="skill__reg__16">{lang sect="skills" line="regeneration"}</span>:
<strong>{$view.skills->regeneration}</strong><br/>
<span class="skill__med__16">{lang sect="skills" line="meditation"}</span>:
<strong>{$view.skills->meditation}</strong><br/>
<h6>
    {lang sect="help" line="base_skill_up"}
</h6>

{/block}