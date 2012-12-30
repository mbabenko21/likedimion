<?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:09:21
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\skills\war.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209550d89a5142fdd6-59526289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '937d265eaab4807cd75ee9bfcb76cf222e9a579e' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\skills\\war.tpl',
      1 => 1356179161,
      2 => 'file',
    ),
    '908143187a58e2d3d21cee5649aa3be4fc9e6a97' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\skills_menu.tpl',
      1 => 1356260596,
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
  ),
  'nocache_hash' => '3209550d89a5142fdd6-59526289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d89a52488195_88554515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d89a52488195_88554515')) {function content_50d89a52488195_88554515($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '3209550d89a5142fdd6-59526289');
content_50d89a51a97e59_93845102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<div class="skills_menu">
    <ul class="menu">
        <li>
            <a href="/?do=skills:base&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"base_skills"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:war&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"war_skills"),$_smarty_tpl);?>

            </a>
        </li>
        <li>
            <a href="/?do=skills:prof"&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"prof_skills"),$_smarty_tpl);?>

            </a>
        </li>
    </ul>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['study_points'])){?>
    <div class="study-points">
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"study_points"),$_smarty_tpl);?>
: <span class="counter__red">+<?php echo $_smarty_tpl->tpl_vars['view']->value['study_points'];?>
</span>
    </div>
    <hr/>
    <?php }?>
<div class="skills">
    <div class="skills_content">
        

<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"cold_weapon"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->coldWeapon;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"ranged_weapon"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->rangedWeapon;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"crush_weapon"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->crushWeapon;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->magic;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"dogfight"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->dogfight;?>
</strong><br/>
<hr/>

<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->bias;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->parring;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->magicBias;?>
</strong><br/>
<span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['skills']->magicParring;?>
</strong>

<h6>
    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"help",'line'=>"war_skill_up"),$_smarty_tpl);?>

</h6>

    </div>
</div>
<div class="back">
    <ul class="menu">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"back"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-24 22:09:21
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50d89a51a97e59_93845102')) {function content_50d89a51a97e59_93845102($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?>