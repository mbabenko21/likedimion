{extends 'layout/skills_menu.tpl'}
{block name="skills"}

<span>{lang sect="skills" line="cold_weapon"}</span>: <strong>{$view.skills->coldWeapon}</strong><br/>
<span>{lang sect="skills" line="ranged_weapon"}</span>: <strong>{$view.skills->rangedWeapon}</strong><br/>
<span>{lang sect="skills" line="crush_weapon"}</span>: <strong>{$view.skills->crushWeapon}</strong><br/>
<span>{lang sect="skills" line="magic"}</span>: <strong>{$view.skills->magic}</strong><br/>
<span>{lang sect="skills" line="dogfight"}</span>: <strong>{$view.skills->dogfight}</strong><br/>
<hr/>

<span>{lang sect="skills" line="bias"}</span>: <strong>{$view.skills->bias}</strong><br/>
<span>{lang sect="skills" line="parring"}</span>: <strong>{$view.skills->parring}</strong><br/>
<span>{lang sect="skills" line="magic_bias"}</span>: <strong>{$view.skills->magicBias}</strong><br/>
<span>{lang sect="skills" line="magic_parring"}</span>: <strong>{$view.skills->magicParring}</strong>

<h6>
    {lang sect="help" line="war_skill_up"}
</h6>
{/block}