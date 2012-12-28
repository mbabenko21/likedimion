{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
<div class="about_game">
{include file="html/about_game.html.tpl"}
</div>

    {block name="last_news"}
        {if $view.news != null}
            {assign var="created" value=$view.news->getCreated()}
        <div class="last_news">
            <div id="post_name">
                <strong>
                    {$view.news->getName()}
                </strong>
            </div>
            <div id="post">
                {$view.news->getPost()->getMessage()}
            </div>
            <div id="author">
                {$view.news->getPost()->getAuthor()->getName()}, <span>{$created|strftime|lower}</span>
            </div>
        </div>
        {/if}
    {/block}

<div class="login_form">
    <form action="/login.php" method="post">
        <input name="login" type="text" placeholder="{lang sect="login_page" line="login"}"/><br/>
        <input name="pass" type="password" placeholder="{lang sect="login_page" line="password"}"/><br/>
        <input type="checkbox" checked="true" name="rememberme" value='yes'/>{lang sect="login_page" line="remember"}
        <br/>
        <input type="submit" name="button_sign" value="{lang sect="login_page" line="sign_in"}">
    </form>
</div>
<br/>
{include file="login/login_layout.html.tpl"}
{/block}