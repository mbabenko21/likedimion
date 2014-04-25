<?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:58:19
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239115353d27b654f41-69466102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170e1229cee1517b480b9dc1e1daea1b0cbf3d51' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\login\\index.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '4cf5b90fb6068b6cd2269f48079de19686d1d40f' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    'e92d9f56ffe3193baa8c56bf2cbc449d7593fdde' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    'e561c37841e306879e77849efc3c69e1e1b44af9' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\html\\about_game.html.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
    '7f104fa7d81f0b610fdca63dc4c25fdca5cd2259' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\login\\login_layout.html.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239115353d27b654f41-69466102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d27b8e9263_16313957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d27b8e9263_16313957')) {function content_5353d27b8e9263_16313957($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '239115353d27b654f41-69466102');
content_5353d27b710776_56556614($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<div class="about_game">
<?php /*  Call merged included template "html/about_game.html.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("html/about_game.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '239115353d27b654f41-69466102');
content_5353d27b76a504_07755700($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("login/login_layout.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '239115353d27b654f41-69466102');
content_5353d27b8971d6_61746280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "login/login_layout.html.tpl" */?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:58:19
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d27b710776_56556614')) {function content_5353d27b710776_56556614($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:58:19
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\html\about_game.html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d27b76a504_07755700')) {function content_5353d27b76a504_07755700($_smarty_tpl) {?><h5>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"version"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['app']->value['version'];?>
<br/>
    by <?php echo $_smarty_tpl->tpl_vars['app']->value['author'];?>

</h5>
<?php if (isset($_smarty_tpl->tpl_vars['view']->value['reg_complete'])){?>
<h5>
    <?php echo $_smarty_tpl->tpl_vars['view']->value['reg_complete'];?>

</h5>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-20 17:58:19
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\login\login_layout.html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5353d27b8971d6_61746280')) {function content_5353d27b8971d6_61746280($_smarty_tpl) {?><div class="login_links">
    <a href="/reg.php"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"registration"),$_smarty_tpl);?>
</a><br/>
    <a href="/help.php?help=main"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"help"),$_smarty_tpl);?>
</a><br/>
<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"online"),$_smarty_tpl);?>
: <a href="/?do=online"><?php echo $_smarty_tpl->tpl_vars['view']->value['online'];?>
</a>
</div><?php }} ?>