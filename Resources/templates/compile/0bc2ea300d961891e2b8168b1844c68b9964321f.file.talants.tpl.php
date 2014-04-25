<?php /* Smarty version Smarty-3.1.12, created on 2014-04-22 23:50:35
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\skills\talants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1453053542bd070caf1-63159250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc2ea300d961891e2b8168b1844c68b9964321f' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\skills\\talants.tpl',
      1 => 1398196182,
      2 => 'file',
    ),
    '671f43a769364db91db34d244ce4f120b55b889a' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\skills_menu.tpl',
      1 => 1398022009,
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
    '8b8d6133fb1241f1489a62f846461fe7e5d84b8b' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\talant_image.tpl',
      1 => 1398196150,
      2 => 'file',
    ),
    '00f98fe2ea2c23b57e3cebb1f8963ba6730139c3' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\talant_info.tpl',
      1 => 1398118500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453053542bd070caf1-63159250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53542bd09143e1_72974678',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53542bd09143e1_72974678')) {function content_53542bd09143e1_72974678($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '1453053542bd070caf1-63159250');
content_5356c80b744fa5_28854659($_smarty_tpl);
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
        <li>
            <a href="/?do=skills:talants"&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
            <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"talants_skills"),$_smarty_tpl);?>

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
        
    <ul class="menu">
        <?php  $_smarty_tpl->tpl_vars['magic_school'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['magic_school']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['magic_schools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['magic_school']->key => $_smarty_tpl->tpl_vars['magic_school']->value){
$_smarty_tpl->tpl_vars['magic_school']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['magic_school']->key;
?>
            <li>
                <a href="/?do=skills:talants&school=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
">
                    <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"school_".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>

                </a>
            </li>
        <?php } ?>
    </ul>
    <ul class="talants">
    <?php  $_smarty_tpl->tpl_vars['talant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talant']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['current_school']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talant']->key => $_smarty_tpl->tpl_vars['talant']->value){
$_smarty_tpl->tpl_vars['talant']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['talant']->key;
?>
        <li>
            <?php /*  Call merged included template "layout/talant_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('talant'=>$_smarty_tpl->tpl_vars['talant']->value,'name'=>$_smarty_tpl->tpl_vars['key']->value,'size'=>64), 0, '1453053542bd070caf1-63159250');
content_5356c80bab3ef2_70317434($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_info.tpl" */?>
        </li>
    <?php } ?>
    </ul>
    <h6>
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"help",'line'=>"talants_skill_up"),$_smarty_tpl);?>

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
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-22 23:50:35
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5356c80b744fa5_28854659')) {function content_5356c80b744fa5_28854659($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-22 23:50:35
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\talant_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5356c80bab3ef2_70317434')) {function content_5356c80bab3ef2_70317434($_smarty_tpl) {?><div class="talant">
    <?php /*  Call merged included template "layout/talant_image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/talant_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>$_smarty_tpl->tpl_vars['name']->value,'talant'=>$_smarty_tpl->tpl_vars['talant']->value), 0, '1453053542bd070caf1-63159250');
content_5356c80bafa402_32501877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/talant_image.tpl" */?>
    <div class="talant___name">
        <span class="name"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>((string)$_smarty_tpl->tpl_vars['talant']->value->getName())),$_smarty_tpl);?>
</span>
        <span class="skill_look"><?php echo $_smarty_tpl->tpl_vars['talant']->value->getInfo();?>
</span>
    </div>
    <div class="talant___info">
        <?php if ($_smarty_tpl->tpl_vars['talant']->value->getType()!="passive"){?>
            <span><strong><?php echo $_smarty_tpl->tpl_vars['talant']->value->getMP();?>
MP, <?php echo $_smarty_tpl->tpl_vars['talant']->value->getCooldown();?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"sec"),$_smarty_tpl);?>
</strong></span>
        <?php }?>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-22 23:50:35
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\talant_image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5356c80bafa402_32501877')) {function content_5356c80bafa402_32501877($_smarty_tpl) {?><div class="talant-image">
    <div class="<?php if ($_smarty_tpl->tpl_vars['talant']->value->getClass()!=''){?><?php echo $_smarty_tpl->tpl_vars['talant']->value->getClass();?>
<?php }else{ ?>a-skills<?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?> a-icon__<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['size']->value){?>_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['size']->value>32){?><span
                id="light-span"><?php echo $_smarty_tpl->tpl_vars['talant']->value->getLevel();?>
</span><?php }?></div>
</div><?php }} ?>