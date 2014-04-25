<div class="talant-image">
    <div class="{if $talant->getClass() != ""}{$talant->getClass()}{else}a-skills{if $size}_{$size}{/if} a-icon__{$name}{/if}{if $size}_{$size}{/if}">{if $size > 32}<span
                id="light-span">{$talant->getLevel()}</span>{/if}</div>
</div>