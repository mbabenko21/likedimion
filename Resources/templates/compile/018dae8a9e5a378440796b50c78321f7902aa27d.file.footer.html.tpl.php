<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:28:46
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\footer.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583750d892f3cb1823-86066171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018dae8a9e5a378440796b50c78321f7902aa27d' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\footer.html.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583750d892f3cb1823-86066171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d892f3d46310_51368532',
  'variables' => 
  array (
    'view' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d892f3d46310_51368532')) {function content_50d892f3d46310_51368532($_smarty_tpl) {?><div class="d">

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