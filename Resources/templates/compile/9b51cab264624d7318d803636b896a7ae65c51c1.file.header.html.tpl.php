<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:28:44
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\header.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160450d892f3b040e0-77822818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b51cab264624d7318d803636b896a7ae65c51c1' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\header.html.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160450d892f3b040e0-77822818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d892f3c42555_70228435',
  'variables' => 
  array (
    'app' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d892f3c42555_70228435')) {function content_50d892f3c42555_70228435($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("application.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['app']->value['version'];?>
</title>
    <link rel="stylesheet" media="all" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/css/standart.css"/>
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