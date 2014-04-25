<div class="talant">
    {include file="layout/talant_image.tpl" name=$name talant=$talant}
    <div class="talant___name">
        <span class="name">{lang sect="skills" line="{$talant->getName()}"}</span>
        <span class="skill_look">{$talant->getInfo()}</span>
    </div>
    <div class="talant___info">
        {if $talant->getType() != "passive"}
            <span><strong>{$talant->getMP()}MP, {$talant->getCooldown()} {lang sect="helper" line="sec"}</strong></span>
        {/if}
    </div>
</div>