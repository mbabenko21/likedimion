{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
<div class="skills_menu">
    <ul class="menu">
        <li>
            <a href="/?do=skills:base&{math equation='rand(0,100)'}">
                {lang sect="menu" line="base_skills"}
            </a>
        </li>
        <li>
            <a href="/?do=skills:war&{math equation='rand(0,100)'}">
                {lang sect="menu" line="war_skills"}
            </a>
        </li>
        <li>
            <a href="/?do=skills:prof"&{math equation='rand(0,100)'}">
                {lang sect="menu" line="prof_skills"}
            </a>
        </li>
    </ul>
</div>
    {if isset($view.study_points)}
    <div class="study-points">
        {lang sect="menu" line="study_points"}: <span class="counter__red">+{$view.study_points}</span>
    </div>
    <hr/>
    {/if}
<div class="skills">
    <div class="skills_content">
        {block name="skills"}

    {/block}
    </div>
</div>
<div class="back">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&{math equation='rand(0,100)'}">{lang sect="app" line="back"}</a>
        </li>
    </ul>
</div>
{/block}