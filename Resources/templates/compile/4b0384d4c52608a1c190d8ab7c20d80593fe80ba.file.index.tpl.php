<?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 21:37:54
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284350d892f2d3cbf8-13111391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0384d4c52608a1c190d8ab7c20d80593fe80ba' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\login\\index.tpl',
      1 => 1356038712,
      2 => 'file',
    ),
    '215698c7640cbb297996a8212b39a1e84ecfae22' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1356259495,
      2 => 'file',
    ),
    '8d6e602103c68add83eac291ee4509c468d2de08' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1355943354,
      2 => 'file',
    ),
    '4f74c1bac9d98eff5b9d6755984bfb2932c4e2fb' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\html\\about_game.html.tpl',
      1 => 1356027714,
      2 => 'file',
    ),
    'b09d2986a954ab609836896644d5427591d2d03a' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\login\\login_layout.html.tpl',
      1 => 1356027714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284350d892f2d3cbf8-13111391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d892f3a82059_00109085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d892f3a82059_00109085')) {function content_50d892f3a82059_00109085($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '284350d892f2d3cbf8-13111391');
content_50d892f3305ef7_25670514($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<div class="about_game">
<?php /*  Call merged included template "html/about_game.html.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("html/about_game.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '284350d892f2d3cbf8-13111391');
content_50d892f3638580_97542443($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "html/about_game.html.tpl" */?>
</div>

    
        <?php if ($_smarty_tpl->tpl_vars['view']->value['news']!=null){?>
            <?php if (isset($_smarty_tpl->tpl_vars["created"])) {$_smarty_tpl->tpl_vars["created"] = clone $_smarty_tpl->tpl_vars["created"];
$_smarty_tpl->tpl_vars["created"]->value = $_smarty_tpl->tpl_vars['view']->value['news']->getCreated(); $_smarty_tpl->tpl_vars["created"]->nocache = null; $_smarty_tpl->tpl_vars["created"]->scope = 0;
} else $_smarty_tpl->tpl_vars["created"] = new Smarty_variable($_smarty_tpl->tpl_vars['view']->value['news']->getCreated(), null, 0);?>
        <div class="last_news">
            <div id="post_name">
                <strong>
                    <?php echo $_smarty_tpl->tpl_vars['view']->value['news']->getName();?>

                </strong>
            </div>
            <div id="post">
                <?php echo $_smarty_tpl->tpl_vars['view']->value['news']->getPost()->getMessage();?>

            </div>
            <div id="author">
                <?php echo $_smarty_tpl->tpl_vars['view']->value['news']->getPost()->getAuthor()->getName();?>
, <span><?php echo mb_strtolower(MB\Core\Kernel\SmartyService::format_date($_smarty_tpl->tpl_vars['created']->value), 'UTF-8');?>
</span>
            </div>
        </div>
        <?php }?>
    

<div class="login_form">
    <form action="/login.php" method="post">
        <input name="login" type="text" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"login"),$_smarty_tpl);?>
"/><br/>
        <input name="pass" type="password" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"password"),$_smarty_tpl);?>
"/><br/>
        <input type="checkbox" checked="true" name="rememberme" value='yes'/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"remember"),$_smarty_tpl);?>

        <br/>
        <input type="submit" name="button_sign" value="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"sign_in"),$_smarty_tpl);?>
">
    </form>
</div>
<br/>
<?php /*  Call merged included template "login/login_layout.html.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("login/login_layout.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '284350d892f2d3cbf8-13111391');
content_50d892f399c647_65384590($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "login/login_layout.html.tpl" */?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 21:37:55
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d892f3305ef7_25670514')) {function content_50d892f3305ef7_25670514($_smarty_tpl) {?><div class="errors">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li class="error_item"><span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['error']->value, 'UTF-8');?>
</span></li>
    <?php } ?>
    </ul>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 21:37:55
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\html\about_game.html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d892f3638580_97542443')) {function content_50d892f3638580_97542443($_smarty_tpl) {?><h5>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"version"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['app']->value['version'];?>
<br/>
    by <?php echo $_smarty_tpl->tpl_vars['app']->value['author'];?>

</h5>
<?php if (isset($_smarty_tpl->tpl_vars['view']->value['reg_complete'])){?>
<h5>
    <?php echo $_smarty_tpl->tpl_vars['view']->value['reg_complete'];?>

</h5>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 21:37:55
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\login\login_layout.html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d892f399c647_65384590')) {function content_50d892f399c647_65384590($_smarty_tpl) {?><div class="login_links">
    <a href="/reg.php"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"registration"),$_smarty_tpl);?>
</a><br/>
    <a href="/help.php?help=main"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"help"),$_smarty_tpl);?>
</a><br/>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"online"),$_smarty_tpl);?>
: <a href="/?do=online"><?php echo $_smarty_tpl->tpl_vars['view']->value['online'];?>
</a>
</div><?php }} ?>