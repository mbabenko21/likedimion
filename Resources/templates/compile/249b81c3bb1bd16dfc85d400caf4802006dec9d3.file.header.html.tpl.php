<?php /* Smarty version Smarty-3.1.12, created on 2014-04-22 22:30:01
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\header.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102905353cac6a87d38-08163812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249b81c3bb1bd16dfc85d400caf4802006dec9d3' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\header.html.tpl',
      1 => 1398191166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102905353cac6a87d38-08163812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353cac6af91c8_10583714',
  'variables' => 
  array (
    'app' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353cac6af91c8_10583714')) {function content_5353cac6af91c8_10583714($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("application.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['app']->value['version'];?>
</title>
    <link rel="stylesheet" media="all" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/css/standart.css"/>
    <script src="/js/less-1.7.0.min.js" type="text/javascript"></script>
</head>
<body>
<div class='f'>
    <p class="d">
    <span>
    <?php if (!isset($_smarty_tpl->tpl_vars['view']->value['title'])){?>
        <?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>

        <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['view']->value['title'];?>

        <?php }?>
    </span>
    </p>
<?php }} ?>