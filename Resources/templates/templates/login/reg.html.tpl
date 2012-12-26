{extends 'layout/wrapper.html.tpl'}
{block name="wrapper"}
<form action="/reg.php" method="post">
    <input type='hidden' name='otvet' value="{$view.otvet}"/>
    <input type="text" name="login" placeholder="{lang sect="login_page" line="login"}"/><br/>
    <input type="password" name="password" placeholder="{lang sect="login_page" line="password"}"/><br/>
    <input type="password" name="password_repeat" placeholder="{lang sect="registration" line="password_repeat"}"/><br/>
    <input type="text" name="email" placeholder="{lang sect="registration" line="email"}"/>
    <hr/>
    <input type="text" name="char_name" placeholder="{lang sect="registration" line="char_name"}"/>

    <div class="red">
        {lang sect="registration" line="race"}
    </div>
    <div class="radio_buttons">
        <label id="light"><input type="radio" name="race" value="light"
                                 checked="true"/>{lang sect="registration" line="light"}</label>
        <label id="dark"><input type="radio" name="race" value="dark"/>{lang sect="registration" line="dark"}</label>
    </div>
    <div class="red">
        {lang sect="registration" line="class"}
    </div>
    <div class="radio_buttons">
        <label><input type="radio" name="class" value="war"
                      checked="true"/>{lang sect="classes" line="warrior"}</label>
        <label><input type="radio" name="class" value="heal"/>{lang sect="classes" line="healer"}</label>
        <label><input type="radio" name="class" value="sniper"/>{lang sect="classes" line="sniper"}</label>
    </div>
    <hr/>
    <span class="antibot"><strong>{$view.first} {lang sect="registration" line="{$view.func}"} {$view.second}</strong> = <input
            type="text" name="captcha"/></span><br/>
    <input type="submit" name="reg_button" value="{lang sect="registration" line="button"}"/>
</form>
{/block}