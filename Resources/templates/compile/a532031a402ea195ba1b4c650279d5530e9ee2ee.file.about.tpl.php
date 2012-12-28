<?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 17:27:32
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\char\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992550d8970d7bacb9-62832022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a532031a402ea195ba1b4c650279d5530e9ee2ee' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\char\\about.tpl',
      1 => 1356442037,
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
    '0b873bcc32bc7ac748b2b77eb79003c5624de9f3' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\char_menu.tpl',
      1 => 1356260522,
      2 => 'file',
    ),
    '07157c7ffcb43e56778bdd97cfcec0f702a5b482' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\char_name.tpl',
      1 => 1356132795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992550d8970d7bacb9-62832022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d8970e6f84b5_55401970',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d8970e6f84b5_55401970')) {function content_50d8970e6f84b5_55401970($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '1992550d8970d7bacb9-62832022');
content_50d9a9c57528e9_55328176($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1992550d8970d7bacb9-62832022');
content_50d9a9c5c1d678_47708178($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
<div class="about_char">
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"name"),$_smarty_tpl);?>
: <strong>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getName();?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getClass();?>
<?php $_tmp2=ob_get_clean();?><?php /*  Call merged included template "layout/char_name.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('char_name'=>$_tmp1,'class'=>$_tmp2), 0, '1992550d8970d7bacb9-62832022');
content_50d9a9c672fc22_64150761($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_name.tpl" */?>
</strong><br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"reg"),$_smarty_tpl);?>
: <strong><?php echo mb_strtolower(MB\Core\Kernel\SmartyService::format_date($_smarty_tpl->tpl_vars['view']->value['char']->getCreated()), 'UTF-8');?>
</strong><br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"class"),$_smarty_tpl);?>
:
    <span>
        <strong><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"classes",'line'=>$_smarty_tpl->tpl_vars['view']->value['char']->getClass()),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_strtolower($_tmp3, 'UTF-8');?>
</strong>
    </span>
    <br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"level"),$_smarty_tpl);?>
:
    <span class="counter__brown">
    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getLevel();?>
</strong>
    </span>
    <br/>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"status"),$_smarty_tpl);?>
: <strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['view']->value['status'];?>
<?php $_tmp4=ob_get_clean();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"stats",'line'=>$_tmp4),$_smarty_tpl);?>
</strong>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 17:27:33
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d9a9c57528e9_55328176')) {function content_50d9a9c57528e9_55328176($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 17:27:33
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d9a9c5c1d678_47708178')) {function content_50d9a9c5c1d678_47708178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><div class="char_menu">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"char"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=char:inventory&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"inventory"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:base&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"skills"),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->studyPoints>0){?>
                    <span class="counter__red">
                    +<?php echo $_smarty_tpl->tpl_vars['view']->value['char']->getCharParams()->studyPoints;?>

                </span>
                <?php }?>
            </a>
        </li>
        <li>
            <a href="/?do=char:parameters&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
            <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"parameters"),$_smarty_tpl);?>

            </a>
        </li>
    </ul>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 17:27:34
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\char_name.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d9a9c672fc22_64150761')) {function content_50d9a9c672fc22_64150761($_smarty_tpl) {?><span class="char-race__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16">
        <span class="char-class__<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
__16"><?php echo $_smarty_tpl->tpl_vars['char_name']->value;?>
</span>
</span><?php }} ?>