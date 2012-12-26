{include file="layout/header.html.tpl"}
<div class="wrapper">
{block name="errors"}
    {if isset($view.errors) && $view.errors|length > 0}
    {include file="layout/errors.tpl" errors=$view.errors}
    {/if}
{/block}
    {block name="wrapper"}
{*
******************
   Здесь содержится контент страницы
   -------------------------------------------
   @author Maks Babenko <mbabenko21@gmail.com>
   20.12.2012
*******************
*}
{/block}
</div>
{include file="layout/footer.html.tpl"}