<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:25:26
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\footer.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24355353cac6b379d7-78071050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4e7a7136ac57ba523591c50db41de2d69bf29b' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\footer.html.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24355353cac6b379d7-78071050',
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
  'unifunc' => 'content_5353cac6b761e2_72954214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353cac6b761e2_72954214')) {function content_5353cac6b761e2_72954214($_smarty_tpl) {?><div class="d">

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