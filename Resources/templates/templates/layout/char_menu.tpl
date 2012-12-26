<div class="char_menu">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&{math equation='rand(0,100)'}">
                {lang sect="menu" line="char"}
            </a>
        </li>
        <li>
            <a href="/?do=char:inventory&{math equation='rand(0,100)'}">
                {lang sect="menu" line="inventory"}
            </a>
        </li>
        <li>
            <a href="/?do=skills:base&{math equation='rand(0,100)'}">
                {lang sect="menu" line="skills"}
                {if $view.char->getCharParams()->studyPoints > 0}
                    <span class="counter__red">
                    +{$view.char->getCharParams()->studyPoints}
                </span>
                {/if}
            </a>
        </li>
        <li>
            <a href="/?do=char:parameters&{math equation='rand(0,100)'}">
            {lang sect="menu" line="parameters"}
            </a>
        </li>
    </ul>
</div>
