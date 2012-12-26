<?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 15:15:18
         compiled from "W:\domains\glor\Resources\templates\templates\layout\footer.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:337850d6f2699a22a7-62851074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dcca1bb31643633f7ae807dc76acdb6cdcd50d9' => 
    array (
      0 => 'W:\\domains\\glor\\Resources\\templates\\templates\\layout\\footer.html.tpl',
      1 => 1356347714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337850d6f2699a22a7-62851074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d6f269bb1a24_13567803',
  'variables' => 
  array (
    'view' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6f269bb1a24_13567803')) {function content_50d6f269bb1a24_13567803($_smarty_tpl) {?><div class="d">

<?php if (!isset($_smarty_tpl->tpl_vars['view']->value['home'])){?>
    <div>
        <a href="/"><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"home_page"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_strtolower($_tmp1, 'UTF-8');?>
</a>
    </div>
<?php }?>
    <?php echo $_smarty_tpl->tpl_vars['app']->value['author'];?>
&trade; 2012
</div>
</div>
</body></html><?php }} ?>