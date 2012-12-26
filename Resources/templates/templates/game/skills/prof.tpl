{extends 'layout/skills_menu.tpl'}
{block name="skills"}
<span>{lang sect="skills" line="alchemist"}</span>: <strong>{$view.skills->alchemist}</strong><br/>
<span>{lang sect="skills" line="carpenter"}</span>: <strong>{$view.skills->carpenter}</strong><br/>
<span>{lang sect="skills" line="miner"}</span>: <strong>{$view.skills->miner}</strong><br/>
<span>{lang sect="skills" line="juvelir"}</span>: <strong>{$view.skills->juvelir}</strong><br/>
<span>{lang sect="skills" line="smith"}</span>: <strong>{$view.skills->smith}</strong><br/>
<span>{lang sect="skills" line="tailor"}</span>: <strong>{$view.skills->tailor}</strong><br/>
<span>{lang sect="skills" line="stealer"}</span>: <strong>{$view.skills->stealer}</strong>
<h6>
    {lang sect="help" line="prof_skill_up"}
</h6>
{/block}