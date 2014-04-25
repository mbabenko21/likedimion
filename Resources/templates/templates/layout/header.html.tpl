{config_load file="application.conf"}
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title>{$app.app_name}: {$app.version}</title>
    <link rel="stylesheet" media="all" type="text/css" href="http://{$smarty.server.SERVER_NAME}/css/standart.css"/>
    <script src="/js/less-1.7.0.min.js" type="text/javascript"></script>
</head>
<body>
<div class='f'>
    <p class="d">
    <span>
    {if not isset($view.title)}
        {$app.app_name}
        {else}
        {$view.title}
        {/if}
    </span>
    </p>
