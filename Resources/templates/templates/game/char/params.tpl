{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
{include file="layout/char_menu.tpl"}
<div class="skills">
    <div class="skills_content">
        <div class="params">
            <span>{lang sect="params" line="damage"} {{lang sect="params" line={$view.weapon}}|lower}</span> <strong>{$view.params->minDamage}-{$view.params->maxDamage}</strong>
            <br/>
            <span>{lang sect="params" line="hit"}</span>: <strong>{$view.params->hit}%</strong><br/>
            <span>{lang sect="params" line="armor_from"}</span>
            <ul class="armor">
                <li><span>{{lang sect="params" line="armor_from_crushing"}|lower}</span>:
                    <strong>{$view.params->armorFromCrushing}</strong></li>
                <li><span>{{lang sect="params" line="armor_from_cutting"}|lower}</span>:
                    <strong>{$view.params->armorFromCutting}</strong><br/></li>
                <li><span>{{lang sect="params" line="armor_from_pricking"}|lower}</span>:
                    <strong>{$view.params->armorFromPricking}</strong><br/></li>
                <li><span>{{lang sect="params" line="armor_from_magic"}|lower}</span>:
                    <strong>{$view.params->armorFromMagic}</strong><br/></li>
            </ul>
            <span>{lang sect="params" line="shield"}</span>: <strong>{$view.params->shield}</strong><br/>
            <span>{lang sect="params" line="speed"}</span>: <strong>{$view.params->speed} {lang sect="app" line="sec"}</strong>
            <hr/>
            <span>{lang sect="skills" line="bias"}</span>: <strong>{$view.params->bias}%</strong><br/>
            <span>{lang sect="skills" line="parring"}</span>: <strong>{$view.params->parring}%</strong><br/>
            <span>{lang sect="skills" line="magic_bias"}</span>: <strong>{$view.params->magic_bias}%</strong><br/>
            <span>{lang sect="skills" line="magic_parring"}</span>: <strong>{$view.params->magic_parring}%</strong><br/>
        </div>
    </div>
</div>
{/block}