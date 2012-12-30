<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 12:06:46
         compiled from "/home/mbabenko21/glor.dev/Resources/templates/templates/layout/header.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90310569550dd531621c934-56425870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed72b05776785dc44e2dfab871aa128ba454d3cf' => 
    array (
      0 => '/home/mbabenko21/glor.dev/Resources/templates/templates/layout/header.html.tpl',
      1 => 1356677409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90310569550dd531621c934-56425870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dd53164fbda8_47194791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dd53164fbda8_47194791')) {function content_50dd53164fbda8_47194791($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("application.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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