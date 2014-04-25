<?php /* Smarty version Smarty-3.1.12, created on 2014-04-23 23:28:22
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\game\char\params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69105353d3b79df8b7-86044362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee0737a8e91a5d246f11f4470a311abdecd6dfd' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\game\\char\\params.tpl',
      1 => 1398281299,
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
    '8dce4d4c771147761b733a7ae414a6bbbdb39755' => 
    array (
      0 => 'E:\\web\\OpenServer\\domains\\likedimion\\Resources\\templates\\templates\\layout\\char_menu.tpl',
      1 => 1397999786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69105353d3b79df8b7-86044362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5353d3b7d4e801_00236835',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353d3b7d4e801_00236835')) {function content_5353d3b7d4e801_00236835($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '69105353d3b79df8b7-86044362');
content_53581456d91411_92110056($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<?php /*  Call merged included template "layout/char_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/char_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69105353d3b79df8b7-86044362');
content_53581456e122b2_67483377($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/char_menu.tpl" */?>
<div class="skills">
    <div class="skills_content">
        <div class="params">
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"attack"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->attack;?>
</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"magic_boost"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->magicBoost;?>
</strong>
            <br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"hit"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->hit;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from"),$_smarty_tpl);?>
</span>
            <ul class="armor">
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_crushing"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_strtolower($_tmp1, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromCrushing;?>
</strong></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_cutting"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_strtolower($_tmp2, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromCutting;?>
</strong><br/></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_pricking"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_strtolower($_tmp3, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromPricking;?>
</strong><br/></li>
                <li><span><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"armor_from_magic"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo mb_strtolower($_tmp4, 'UTF-8');?>
</span>:
                    <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->armorFromMagic;?>
</strong><br/></li>
            </ul>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"shield"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->shield;?>
</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"params",'line'=>"speed"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->speed;?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"app",'line'=>"sec"),$_smarty_tpl);?>
</strong>
            <hr/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->bias;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->parring;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_bias"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->magic_bias;?>
%</strong><br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"magic_parring"),$_smarty_tpl);?>
</span>: <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['params']->magic_parring;?>
%</strong>
            <br/> --- <br/>
            <span><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"life_per_second"),$_smarty_tpl);?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['formuls']['params']['life_per_second'];?>
</strong> HP/<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"sec"),$_smarty_tpl);?>
, <strong><?php echo $_smarty_tpl->tpl_vars['view']->value['formuls']['params']['mana_per_second'];?>
</strong> MP/<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"helper",'line'=>"sec"),$_smarty_tpl);?>

        </div>
    </div>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-23 23:28:22
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53581456d91411_92110056')) {function content_53581456d91411_92110056($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2014-04-23 23:28:22
         compiled from "E:\web\OpenServer\domains\likedimion\Resources\templates\templates\layout\char_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53581456e122b2_67483377')) {function content_53581456e122b2_67483377($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\web\\OpenServer\\domains\\likedimion\\vendor\\smarty\\libs\\plugins\\function.math.php';
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
<?php }} ?>