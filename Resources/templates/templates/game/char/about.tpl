{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
{include file="layout/char_menu.tpl"}
<div class="about_char">
    {lang sect="about_char" line="name"}: <strong>
{include file="layout/char_name.tpl" char_name={$view.char->getName()} class={$view.char->getClass()}}
</strong><br/>
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
{/block}