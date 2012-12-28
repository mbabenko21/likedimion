<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 12:06:46
         compiled from "/home/mbabenko21/glor.dev/Resources/templates/templates/layout/footer.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33455269550dd53165617f5-61850878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b5a5a2dfe5b4ed8bd08f9987b6e84e3e8a8da1' => 
    array (
      0 => '/home/mbabenko21/glor.dev/Resources/templates/templates/layout/footer.html.tpl',
      1 => 1356677409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33455269550dd53165617f5-61850878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dd53165e4116_56628562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dd53165e4116_56628562')) {function content_50dd53165e4116_56628562($_smarty_tpl) {?><div class="d">

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